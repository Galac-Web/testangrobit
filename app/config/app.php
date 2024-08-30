<?php
require_once './app/Models/Database.php';
require_once './app/Models/AdvancedCRUD.php';
require_once './app/Models/Router.php';
require_once './app/Models/User.php';
// Путь к JSON-файлу
$jsonFile = './app/config/server.json';
// Чтение текущих данных из JSON-файла
$data = json_decode(file_get_contents($jsonFile), true);
Database::connect('localhost', $data['namebd'], $data['login'], $data['password']);
AdvancedCRUD::setDatabase(Database::getDB());

