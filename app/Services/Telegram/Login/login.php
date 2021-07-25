<?php
require_once "../includes/UserDbOperations.php";
$response = array();

$db = new UserDbOperations();
if ($db->telegramLogin($_REQUEST['nonce'])) {
    $response['error'] = false;
    $response['message'] = "Login successful";
    $response['code'] = 1;
    $response['content'] = $db->getTelegramUser($_REQUEST['nonce']);
} else {
    $response['error'] = true;
    $response['message'] = "Telegram login failed";
    $response['code'] = -7;
    $response['content'] = null;
}

echo json_encode($response);