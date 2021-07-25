<?php
    class UserDbOperations
    {
        private $con;

        function __construct()
        {
            $this->con = $this->connect();
        }
        function connect() {
            $this->con = new mysqli(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
            if(mysqli_connect_errno()) {
                echo "Failed to connect to the database".mysqli_connect_err();
            }

            return $this->con;
        }
        public function registerUser($username, $pass)
        {

            if ($this->doesUsernameExist($username)) {
                return -2;
            } else {
                $password = md5($pass);

                $preferences = '{"community_notifications": false}';
                $stmt = $this->con->prepare("INSERT INTO users (id, username, password, preferences) VALUES (NULL, ?, ?, '[{\"community_notifications\": false}]');");
                $stmt->bind_param("ss", $username, $password);
                if ($stmt->execute()) {
                    return 0;
                } else {
                    return -1;
                }
            }
        }

        public function telegramCreate($phone_num, $nonce, $full_name, $user_id, $random) {
            $password = md5($nonce);
            $photo_url = "https://lalu.uz/api/telegram/photos/".$random.$user_id.".jpg";
            if($this->doesUsernameExist($phone_num)) {
                $stmt = $this->con->prepare("UPDATE users SET password = ?, full_name = ?, avatar = ? WHERE username = ?");
                $stmt->bind_param("ssss", $password, $full_name, $photo_url, $phone_num);
                $stmt->execute();
            } else {
                $stmt = $this->con->prepare("INSERT INTO users (id, username, password, phone, full_name, avatar) VALUES (NULL, ?, ?, ?, ?, ?);");
                $stmt->bind_param("sssss", $phone_num, $password, $phone_num, $full_name, $avatar);
                $stmt->execute();
            }
        }

        public function telegramLogin($nonce) {
            $password = md5($nonce);
            $stmt = $this->con->prepare("SELECT id FROM users WHERE password = ?");
            $stmt->bind_param("s", $password);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                return -2;
            } else return 0;
        }

        public function loginUser($username, $pass, $token)
        {
            $password = md5($pass);
            $stmt = $this->con->prepare("SELECT id, tokens FROM users WHERE username = ? AND password = ? LIMIT 1");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                if (!isset($token)) return -2;
                $user = $result->fetch_assoc();
                $tokens = json_decode($user['tokens'], true);
                $tokens[] = $token;
                $tokens = json_encode($tokens);

                $query = $this->con->prepare("UPDATE users SET tokens = ? WHERE id = ?");
                $query->bind_param("si", $tokens, $user['id']);
                $query->execute();
                return -2;
            } else return 0;
        }

        public function getTelegramUser($nonce)
        {
            $password = md5($nonce);
            $stmt = $this->con->prepare("SELECT * FROM users WHERE password = ?");
            $stmt->bind_param("s", $password);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function getUser($username)
        {
            $stmt = $this->con->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function getUserById($id)
        {
            $stmt = $this->con->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
        public function getUserPubById($id)
        {
            $stmt = $this->con->prepare("SELECT id, username, full_name, email, avatar, ohk, age, blood_type, password, total_score, current_score, telegramusername, bio FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function doesUsernameExist($username)
        {
            $stmt = $this->con->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            return $stmt->num_rows > 0;
        }

        private function checkUserAndPassword($username, $pass)
        {
            $stmt = $this->con->prepare("SELECT id FROM users WHERE username = ? AND password = ?");
            $password = md5($pass);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $stmt->store_result();
            return $stmt->num_rows() > 0;
        }

        public function updateUser(
            $id,
            $full_name,
            $email,
            $avatar,
            $ohk,
            $age,
            $blood_type,
            $phone,
            $address,
        	$bio,
        	$nickname)
        {

            $stmt = $this->con->prepare("UPDATE users SET full_name = ?, email = ?,
                avatar = ?, ohk = ?, age = ?, blood_type = ?, phone = ?, address = ?, bio = ?, nickname = ? WHERE users.id = ?");
            $stmt->bind_param("ssssisssssi", $full_name, $email, $avatar, $ohk, $age,
                $blood_type, $phone, $address, $bio, $nickname, $id);

            if ($stmt->execute()) {
                return 0;
            } else {
                return -1;
            }

        }

        public function updatePassword($username, $old, $new)
        {
            if (!$this->doesUsernameExist($username)) {
                return -3;
            } else if ($this->checkUserAndPassword($username, $old)) {
                $stmt = $this->con->prepare("UPDATE users SET password = ? WHERE username = ?");
                $password = md5($new);
                $stmt->bind_param("ss", $password, $username);
                if ($stmt->execute()) {
                    return 0;
                } else {
                    return -1;
                }
            } else {
                return -2;
            }
        }

        public function updateUserName($old, $new, $pass) {
            if ($this->doesUsernameExist($new)) {
              return -1;
            } else if (!$this->checkUserAndPassword($old, $pass)) {
                return -2;
            } else {
                $stmt = $this->con->prepare("UPDATE users SET username = ? WHERE username = ?");
                $stmt->bind_param("ss", $new, $old);
                if ($stmt->execute()) {
                    return 0;
                } else {
                    return -3;
                }
            }
        }

        function getCounters($user_id) {
            $query = $this->con->prepare("UPDATE users SET last_seen_at = NOW() WHERE id = ?");
            $query->bind_param("i", $user_id);
            $query->execute();

            $response = array();
            $stmt = $this->con->prepare("SELECT COUNT(*) FROM posts WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $response['posts'] = $stmt->get_result()->fetch_assoc()['COUNT(*)'];
            $stmt = $this->con->prepare("SELECT COUNT(*) FROM answers WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $response['answers'] = $stmt->get_result()->fetch_assoc()['COUNT(*)'];
            return $response;
        }

        function getContent(
            $user_id,
            $type,
            $limit,
            $offset
        ) {
            $content = array();
            if($type == "posts") {
                $stmt = $this->con->prepare("SELECT * FROM posts WHERE user_id = ? LIMIT ? OFFSET ?");
            } else {
                $stmt = $this->con->prepare("SELECT T.* FROM (SELECT answers.* FROM answers WHERE answers.user_id = ? ORDER BY answers.id DESC) T LIMIT ? OFFSET ?");
            }
            $stmt->bind_param("iii", $user_id, $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                	if (isset($row['post_id'])) $row['post'] = $this->getPostById($row['post_id']);
                    if(isset($row['post'])) $content[] = $row;
                }
            }
            return $content;
        }

    	function getPostById($id) {
        $stmt = $this->con->prepare("SELECT posts.*, users.full_name, users.avatar, users.ohk FROM posts, users WHERE posts.id = ? AND posts.user_id = users.id LIMIT 1");
        $stmt->bind_param("i", $id);
        if(!$stmt->execute()) {
            echo mysqli_error($this->con);
        }
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = array();
            $row = $result->fetch_assoc();
            $row['count'] = $this->answerCount($id);
            return $row;
        }
    }

    function answerCount($post_id) {
        $stmt = $this->con->prepare("SELECT COUNT(*) FROM answers WHERE post_id = ?");
        $stmt->bind_param("i", $post_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc()['COUNT(*)'];
    }

        function gSignIn($person_id, $token_id, $full_name, $email, $avatar) {
            $password = md5($token_id);
            if($this->checkUserAndPassword($person_id, $token_id)) {
                $stmt = $this->con->prepare("UPDATE users SET password = ? WHERE username = '?'");
                echo mysqli_error($this->con);
                $stmt->bind_param("ss", $password, $person_id);
               if($stmt->execute()) {
                   return true;
               } else return false;
            } else {
                $stmt = $this->con->prepare("INSERT INTO users (id, username, password, full_name, email, avatar) VALUES (NULL, ?, ?, ?, ?, ?);");
                $stmt->bind_param("sssss", $person_id, $password, $full_name, $email, $avatar);
                if($stmt->execute()) return true;
                else  {
                    echo mysqli_error($this->con);
                    return false;
                }
            }
        }

        function getGenderVoting($user_id) {
            $result = array();
            $stmt = $this->con->prepare("SELECT COUNT(*) FROM gender WHERE agreed = 1");
            $stmt->execute();
            $result['agreed_count'] = $stmt->get_result()->fetch_assoc()['COUNT(*)'];

            $stmt = $this->con->prepare("SELECT COUNT(*) FROM gender WHERE agreed = 0");
            $stmt->execute();
            $result['disagreed_count'] = $stmt->get_result()->fetch_assoc()['COUNT(*)'];

            if($user_id != null) {
            $stmt = $this->con->prepare("SELECT agreed FROM gender WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $val = $stmt->get_result();
            if($val->num_rows > 0) $result['user_agreed'] = $val->fetch_assoc()['agreed'];
            else $result['user_agreed'] = null;
            } else $result['user_agreed'] = null;

            return $result;
        }



        function genderVote($user_id, $agreed) {
            $stmt = $this->con->prepare("SELECT COUNT(*) FROM gender WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            if($stmt->get_result()->fetch_assoc()['COUNT(*)'] > 0) {
                $stmt = $this->con->prepare("UPDATE gender SET agreed = ? WHERE user_id = ?");
                $stmt->bind_param("ii", $agreed, $user_id);
                $stmt->execute();
            } else {
                $stmt = $this->con->prepare("INSERT INTO gender (id, user_id, agreed) VALUES (NULL, ?, ?);");
                $stmt->bind_param("ii", $user_id, $agreed);
                $stmt->execute();
            }
        }




    }
