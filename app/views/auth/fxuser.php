<?php
require_once './app/config/app.php';


$login = $_POST['login'];
$passw_new = md5($_POST['password']);
require_once './app/Controllers/AuthController.php';
$controller = new AuthController();
function generateToken() {
    return bin2hex(random_bytes(16));
}
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];


$retunrsE = $controller->index($login, $passw_new);

if (count($retunrsE) > 0 && isset($retunrsE[0]['randomn_id'])) {
    $id = $retunrsE[0]['randomn_id'];
    session_start();
    $_SESSION['user_id'] = $id;
    setcookie('UserAcces', 'true', time() + (86400 * 30), "/");
    setcookie('token', generateToken(), time() + (86400 * 30), "/");
    $res = $protocol . '://' . $host . '/';
} else {
    $res = $protocol . '://' . $host . '/login';
    session_unset();
    setcookie('UserAcces', 'false', time() + (86400 * 30), "/");
    unset($_COOKIE['fxuser_accessed']);
    setcookie('error', 'User not found', time() + (86400 * 30), "/");
}
header('Location: ' . $res);
exit;





?>