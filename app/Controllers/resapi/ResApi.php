<?php
require_once './app/Models/MOD_resapi/modresAPI.php';
session_start();


class ResApi
{
    protected static function getresetapi($id)
    {
        // Проверка пользователя по логину и паролю
        return modresAPI::runApiallproduct('');
    }
    protected static function getresetapiproduct($id){
        $arrayfilte = [
            [
                'name' => 'name',
                'price' => 0,
                'category' => '',
                'size' => '',
            ]

        ];
        return modresAPI::filtrePdroduct($arrayfilte);
    }
}