<?php
require_once './app/Controllers/UserController.php';

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];
$login = $protocol . '://' . $host . '/login';
$reg = $protocol . '://' . $host . '/register';
$fxuser = $protocol . '://' . $host . '/fxuser';
$regref= $protocol . '://' . $host . '/regref?id='.$_GET['id'];
$GLOBALS['link'] = $currentUrl;
if($currentUrl != $login && $currentUrl != $reg && $currentUrl != $fxuser && $currentUrl != $regref){
    $userController = new UserController();
    $userController->getidUsers();
    $res = $protocol . '://' . $host . '/login';
    if($currentUrl != $login){
        if (!isset($_SESSION['user_id'])) {
            //header('Location: ' . $res);
        }
    }

}
?>