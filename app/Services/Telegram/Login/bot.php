<?php
require_once "../includes/UserDbOperations.php";
$db = new UserDbOperations();
$private_key = "-----BEGIN RSA PRIVATE KEY-----
MIIEpgIBAAKCAQEAmfJYu0QbO+xm9e7g7rP+Sh3DgikN9SY/n/Z9u6NLWNsf2mXj
HTV66TA2HUWpwsWBJ6daywCxzCqYmHmnchIkQVOEGrHKVVC+t71XCyWzUnkg5FqB
ezwEZI5XnsQ1o6lSUVrqw3PGoHlxDtmTcGYHIbEPY3sCZAA9su5JuA99ZYuF6T6I
XLMSviUGRA+xCj8L0Uzq1Lts1DQVqhbFor/9RjXfSktvzxYHRFx98Xpsw/OhiXRJ
PqmVz/nj48m+w/rA9CapQqregnw9aGWOItq+v8TWSq9K9Sei9kFrs2aLRySjKTUp
dvr9VBBB492/Fkwv0JCPDAPPsNuNcsgZyKrJCwIDAQABAoIBAQCBv+RRUUGy67iL
p14lUccNKLDTT07YQ/h0Fgg60ZJ7vZPHOwCEacLCL0Qsv74oztXgWgkH9/ninjQm
rsIWPnwYIw/AgACMj5Vuv0JRvuC4riau0Ck5eIgrSF1JDw42dktPDlW3jijmr/Q+
E9tUbGmuV9Ekg1SsfBeEa5nua//ASN1WOcPtZp4HF+XNejVrTjHKutspo92xaFW7
lGOg4Lc7jQEynERZQZ9A4FSuZpMysmmlaxZYGw00Scn7qOWHeCCQld6L2S6mxJh7
0O8Vjne3oBqbYssAD4PRqTNL9KVLNDHb588L9qp5eRWiyTg3bEzBraKzigp3mu7L
L3N0ibdhAoGBAMj+kr+fDGqBexeZGseWE5mGl6ddkj2gBvwuXN1X1nxfz4of1pDh
jfRW7smi61TZiJVUoqCriMCUS4YtacomSswwzxrDa3G2AeD7zhPnCKohBFq7WfTY
dxYdGD2YvN72QnmFn/3cIaHXKxseiKf1fJf0t1QnaR6B/YEuUhu1NYOVAoGBAMQT
qgNTp2IBM5PXNVa7ZZ2YAtuEXWkrEHYaS7xn4uv6WKEQlp2u75wezIDxM6wIkrNC
PNAaUvSRBOTVc2Wk8mE/cmeTlf0kChgzOgLCWSppb4Obp7FFl779Zi+xcBFaKhZu
uKh7b8l+1/4++Dwll2uZD7HeVbNYLvn6f/j6WfIfAoGBAJQx539zxJLOzzRSBcW8
6MycyTp0qnvXfu73PC9TMWjYt8wut2Rxedn7Murmvb78+VCpa5MthpH/hUP0Pfj3
jNTK9BjWl2Tq/q2k24gfI2tVFsHTO3tlE0DxyMq50CBQ0CiLlrB1WzLZ1AWV2MqG
HQxpObbJrB77Vy+lOJMHY+KVAoGBAISgLGpNpjVjTKjec6Sz4vri/GPRN4HQcDUC
emH4/wPQ9SwU1VvZHRfDuV4qSGI/9kKsNggpFh15Dg9e1cxV8uCWkuK+cECmpPFT
jRSassc+RACIQ7hjs02rhvgRlBUYoMlFoT/NJoLrelvt6eh9INvVz0jnc554smXB
69fUNwzPAoGBAKfm/fqbV3HoOwn6wXLehgbPBJ3XITkiwBbvrwjUm8t2RKSg/ld3
Mgcb57yAT1fPc1PNdXjbZuXfmMpxd9esHx9JmS6SFd3/U+qpqE8oZKc7QycY7MQe
loPIpB953PMwaygDma1bLYHmXLuo/eQ9WPkbxwndiYadaTAMwo9DdLxK
-----END RSA PRIVATE KEY-----";

$bot_token = "1111042417:AAEBIrMWMXYmmo4AiktqbgocKHWfSpodVWI";

//Initialize logging, stores logs to php-error.log
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

if (!isset($update['message']['passport_data'])) {
    // Supports passport_data update only
    exit;
}

$from = $update['message']['from'];
$full_name = $from['first_name']." ".$from['last_name'];
$user_id = $from['id'];

$profile_photos = file_get_contents(fileIdUrl($bot_token, $user_id));
$profile_photos = json_decode($profile_photos, true);
$first_photo = $profile_photos['result']['photos'][0];
$file_id = $first_photo[sizeof($first_photo)-1]['file_id'];

$path = file_get_contents(filePathUrl($bot_token, $file_id));
$path = json_decode($path, true);
$file_path = $path['result']['file_path'];
$random = generateRandomString(10);
file_put_contents("photos/".$random.$user_id.".jpg", fopen(fileDownloadPathUrl($bot_token, $file_path), 'r'));


$passport_data = $update['message']['passport_data'];

$phone_number  = "+".$passport_data['data'][0]['phone_number'];

$credentials        = $passport_data['credentials'];
$secret_encrypted   = base64_decode($credentials['secret']);
$result             = openssl_private_decrypt($secret_encrypted, $credentials_secret, $private_key, OPENSSL_PKCS1_OAEP_PADDING);

if(!$result) {
    error_log("Credential secret decryption failed");
    exit;
}

try {
    $credentials_data_encrypted = base64_decode($credentials['data']);
    $credentials_hash           = base64_decode($credentials['hash']);
    $credentials_data_json      = decryptData($credentials_data_encrypted, $credentials_secret, $credentials_hash);
    $credentials_data           = json_decode($credentials_data_json, true);

    if (!isset($credentials_data['nonce'])) {
        throw new Exception('CREDENTIALS_FORMAT_INVALID');
    }
    $nonce       = $credentials_data['nonce'];

    $db->telegramCreate($phone_number, $nonce, $full_name, $user_id, $random);
} catch (Exception $e) {
    if (!isset($credentials_data['nonce'])) {
      // Nonce invalid
    error_log("NONCE Invalid");

      exit;
    }
    $nonce = $credentials_data['nonce'];
    $passport_data = [
      'error' => $e->getMessage(),
    ];
  }


function decryptData($data_encrypted, $data_secret, $data_hash) {
    $data_secret_hash = hash('sha512', $data_secret.$data_hash, true);
    $data_key         = substr($data_secret_hash, 0, 32);
    $data_iv          = substr($data_secret_hash, 32, 16);
    $options          = OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING;
    $data_decrypted   = openssl_decrypt($data_encrypted, 'aes-256-cbc', $data_key, $options, $data_iv);
    if (!$data_decrypted) {
      throw new Exception('DECRYPT_FAILED');
    }
    $data_decrypted_hash = hash('sha256', $data_decrypted, true);
    if (strcmp($data_hash, $data_decrypted_hash)) {
      throw new Exception('HASH_INVALID');
    }
    $padding_len    = ord($data_decrypted[0]);
    $data_decrypted = substr($data_decrypted, $padding_len);
    return $data_decrypted;
}

function fileIdUrl($token, $id) {
  return "https://api.telegram.org/bot".$token."/getUserProfilePhotos?user_id=".$id."&limit=1";
}

function filePathUrl($token, $id) {
  return "https://api.telegram.org/bot".$token."/getFile?file_id=".$id;
}

function fileDownloadPathUrl($token, $path) {
  return "https://api.telegram.org/file/bot".$token."/".$path;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

