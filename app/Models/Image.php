<?php
require_once 'AdvancedCRUD.php';

class Image
{
    private $targetDir;

    public function __construct($targetDir) {
        $this->targetDir = $targetDir;
    }
    public function selectimg($id,$db='img_bd',$where='randomn_id')
    {

        return AdvancedCRUD::select($db, '*', "WHERE ".$where."='".$id."' ");
    }
    public function uploadFile($file) {
        // Генерация уникального имени файла
        $fileName = uniqid() . '_' . basename($file["name"]);
        $targetFile = $this->targetDir . $fileName;
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file is a actual file or fake file
        if (isset($_POST["submit"])) {
            $check = filesize($file["tmp_name"]);
            if ($check !== false) {
                echo "File is valid. Size: " . $check . " bytes.";
                $uploadOk = 1;
            } else {
                echo "File is not valid.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($file["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        if (!in_array($fileType, $allowedFormats)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                // Create a thumbnail and large version
                $this->createThumbnail($targetFile, $fileType);
                $this->createLargeVersion($targetFile, $fileType);

                // Save image data to database
                $taskData['nameImg'] = $fileName;
                $taskData['randomn_id'] = rand(100, 10000);
                $taskData['id_users'] = $_SESSION['user_id'];
                $taskData['connect_id'] = $_SESSION['add_product'];
                AdvancedCRUD::create('img_bd', $taskData);
            } else {
                $error = error_get_last();
                echo "Sorry, there was an error uploading your file: " . $error['message'];
            }
        }
    }

    private function createThumbnail($filePath, $fileType) {
        $thumbPrefix = 'mini_';
        $thumbPath = $this->targetDir . $thumbPrefix . basename($filePath);

        list($width, $height) = getimagesize($filePath);

        // Set thumbnail size
        $thumbWidth = 150; // Set the desired width of the thumbnail
        $thumbHeight = (int)($height * ($thumbWidth / $width));

        $thumb = imagecreatetruecolor($thumbWidth, $thumbHeight);

        switch ($fileType) {
            case 'jpg':
            case 'jpeg':
                $source = imagecreatefromjpeg($filePath);
                break;
            case 'png':
                $source = imagecreatefrompng($filePath);
                break;
            case 'gif':
                $source = imagecreatefromgif($filePath);
                break;
            default:
                $source = imagecreatefromjpeg($filePath); // Default to jpeg
        }

        imagecopyresampled($thumb, $source, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

        switch ($fileType) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($thumb, $thumbPath);
                break;
            case 'png':
                imagepng($thumb, $thumbPath);
                break;
            case 'gif':
                imagegif($thumb, $thumbPath);
                break;
        }

        imagedestroy($thumb);
        imagedestroy($source);
    }

    private function createLargeVersion($filePath, $fileType) {
        $largePrefix = 'large_';
        $largePath = $this->targetDir . $largePrefix . basename($filePath);

        list($width, $height) = getimagesize($filePath);

        // Set large version size
        $largeWidth = 800; // Set the desired width of the large version
        $largeHeight = (int)($height * ($largeWidth / $width));

        $large = imagecreatetruecolor($largeWidth, $largeHeight);

        switch ($fileType) {
            case 'jpg':
            case 'jpeg':
                $source = imagecreatefromjpeg($filePath);
                break;
            case 'png':
                $source = imagecreatefrompng($filePath);
                break;
            case 'gif':
                $source = imagecreatefromgif($filePath);
                break;
            default:
                $source = imagecreatefromjpeg($filePath); // Default to jpeg
        }

        imagecopyresampled($large, $source, 0, 0, 0, 0, $largeWidth, $largeHeight, $width, $height);

        switch ($fileType) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($large, $largePath);
                break;
            case 'png':
                imagepng($large, $largePath);
                break;
            case 'gif':
                imagegif($large, $largePath);
                break;
        }

        imagedestroy($large);
        imagedestroy($source);
    }
}
