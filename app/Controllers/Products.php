<?php
require_once './app/Models/TemplateEngine.php';
require_once './app/Models/Product.php';
session_start();

class Products
{
    private $templateEngine;

    public function __construct()
    {
        $this->templateEngine = new TemplateEngine('./app/views/user');
    }
    public function createProduct()
    {
        $exceptions = ['type']; // Добавьте сюда любые ключи, которые хотите исключить

// Удаление исключений из массива $_POST
        $filteredPost = array_diff_key($_POST, array_flip($exceptions));
        $taskData = [];
        foreach ($filteredPost as $key => $value) {

            $taskData[$key] = $value;
        }
        Product::createtoken($taskData);
    }
}