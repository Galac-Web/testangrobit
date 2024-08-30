<?php
require_once './app/Models/TemplateEngine.php';
require_once './app/Models/Image.php';

class ImageController
{
    private  $templateEngine;

    public function __construct()
    {
        $this->templateEngine = new TemplateEngine('./app/views/user');
    }

    public function upimages()
    {
        $targetDir = "./uploads/";

        // Создаем объект FileUploader
        $fileUploader = new Image($targetDir);

        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // Проверяем наличие ошибок при загрузке файла
            $fileUploader->uploadFile($_FILES['file']);
            $coutimg = $fileUploader->selectimg($_SESSION['add_product'],'img_bd','connect_id');
            if(count($coutimg) > 0){
                return $coutimg;
            }


        } else {
            // Обработка ошибок загрузки файла
            echo 'Ошибка при загрузке файла. Код ошибки: ' . $_FILES['file']['error'];
        }
    }
}
