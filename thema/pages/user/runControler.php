<?php
require_once './app/config/app.php';
require_once './app/Controllers/AuthController.php';
require_once './app/Controllers/Products.php';
require_once './app/Controllers/ImageController.php';
$controller = new UserController();
$products = new Products();
$img = new ImageController();
header('Content-Type: application/json');
// Пример корректного JSON ответа
function generateToken() {
    return bin2hex(random_bytes(16));
}
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];
$res = $protocol . '://' . $host . '/';
switch ($_POST['type']) {
    case 'add':
        $controller->add('users_info');
        echo json_encode(['success' => true, 'message' => 'Data submitted successfully!']);
        break;
    case 'productadd':
        $products->createProduct();
        break;
    case 'savebd':
        $jsonFile = './app/config/server.json';
        $data['namebd'] = $_POST['name'];
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['link'] = $_SERVER['HTTP_HOST'];
        file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
        break;
    case 'edit':
        $controller->edit($_POST['id']);
        break;
    case 'addusers':
        $rand = rand(20, 1000);
        $_POST['randomnid'] = $rand;
        $controller->add('users_connect');

        $controller->addrefusers('users_refer',$rand);
        session_start();
        $_SESSION['user_id'] = $_POST['randomnid'];
        setcookie('UserAcces', 'true', time() + (86400 * 30), "/");
        setcookie('token', generateToken(), time() + (86400 * 30), "/");
        header('Location: ' . $res);


        break;
    case 'delete':
        $controller->delete($_POST['id']);
        echo json_encode(['success' => 'Yes']);
        break;

    case 'updattimages':
        $resultimg = $img->upimages();
        echo json_encode($resultimg);
        break;
    default:
        echo json_encode(['success' => $_POST]);

}
