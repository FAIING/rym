<?php
header('Content-Type: application/json');

$buttonId = $_GET['buttonId'] ?? '';
$password = $_GET['password'] ?? '';

// 假设密码已硬编码并以某种方式关联到按钮ID
$passwords = [
    'button1' => '1121',
    'button2' => '1212',
    'button3' => '1221',
    // 更多按钮及其对应密码...
];

if (isset($passwords[$buttonId]) && $password === $passwords[$buttonId]) {
    http_response_code(200);
    echo json_encode(['message' => '密码正确']);
} else {
    http_response_code(401);
    echo json_encode(['error' => '密码错误']);
}
?>
