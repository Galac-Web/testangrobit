<?php

use Controllers\Templates;

require_once __DIR__.'/app/config/app.php';
require_once __DIR__.'/app/Controllers/UserController.php';
require_once __DIR__.'/app/Controllers/Language.php';

require_once __DIR__ . '/app/Controllers/Templates.php'; // Убедитесь, что путь правильный
session_set_cookie_params([
    'lifetime' => 0,                 // Время жизни сессии (0 = до закрытия браузера)
    'path' => '/',                   // Путь, для которого действует cookie
    'domain' => '/', // Домен
    'secure' => true,                // Включите флаг Secure для HTTPS
    'httponly' => true,              // Включите флаг HttpOnly
    'samesite' => 'Lax'              // Флаг SameSite для защиты от CSRF
]);

session_start();
require_once './app/Controllers/root.php';
$router = new \Models\Router();

// Путь к JSON-файлу
$jsonFile = './app/config/server.json';

$data = json_decode(file_get_contents($jsonFile), true);
if (empty($data['namebd']) || empty($data['login'])  || empty($data['link'])) {
    $contentFile = './thema/pages/setpaguser.php';
    $templates = new Templates($contentFile);
    $templates->rederLogin();
    $router->addRoute('POST', '/runquery', function() {
        require_once './thema/pages/user/runControler.php';
    });
} else {
    $link = $data['link'];
    $dataArray = ['http://'.$link.'/login', 'http://'.$link.'/register', 'http://'.$link.'/fxuser', 'http://'.$link.'/runquery'];
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    $requestUri = $_SERVER['REQUEST_URI'];
    $currentUrl = $protocol . $host . $requestUri;
    $valueToCheck = $currentUrl;
    (in_array($valueToCheck, $dataArray)) ? box_root($router) : box_pagroot($router);
}



$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '');


function box_root($router)
{
    $router->addRoute('GET', '/login', function() {
        clearCookiesAndSession();
        $login = './app/views/auth/login.php';
        $templates = new Templates($login);
        $templates->rederLogin();
    });


    $router->addRoute('POST', '/fxuser', function() {
        require_once './app/views/auth/fxuser.php';
    });

    $router->addRoute('POST', '/runquery', function() {
        require_once './thema/pages/user/runControler.php';

    });
}
function box_pagroot($router){
    $router->addRoute('GET', '/', function() {
        $contentFile = './thema/pages/home.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/regref', function() {
        clearCookiesAndSession();
        $contentFile = './app/views/auth/register.php';
        $templates = new Templates($contentFile);
        $templates->rederLogin();
    });


    $router->addRoute('GET', '/task', function() {
        $contentFile = './thema/pages/task/home.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/ecommerce', function() {
        $contentFile = './thema/pages/ecommerce/all.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/profile', function() {
        $contentFile = './thema/pages/user/profile.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/token', function() {
        $contentFile = './thema/pages/user/token/token.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });


    $router->addRoute('GET', '/desproduct', function() {
        $contentFile = './thema/pages/ecommerce/desproduct.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/addproduct', function() {
        $contentFile = './thema/pages/ecommerce/addproduct.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });
    $router->addRoute('GET', '/res', function() {
        $contentFile = './thema/pages/resapi/resapi.php';
        $templates = new Templates($contentFile);
        $templates->render();
    });

}
function clearCookiesAndSession() {
    // Удаление всех куки
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach ($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 3600, '/');
            setcookie($name, '', time() - 3600, '/', $_SERVER['HTTP_HOST'], true, true);
        }
    }

    // Завершение сессии
    session_start(); // Запуск сессии, если не запущена
    // Очистка всех переменных сессии
    $_SESSION = [];
    // Удаление сессионного куки
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    // Уничтожение сессии
    session_destroy();
}
















