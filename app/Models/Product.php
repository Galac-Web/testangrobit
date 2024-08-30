<?php

require_once 'AdvancedCRUD.php';
class Product
{
    public static function selectDatte()
    {
        return AdvancedCRUD::select('products', '*', "WHERE id_users='".$_SESSION['user_id']."' ");
    }
    public static function selecall($id,$db='tiket',$where='id_users')
    {

        return AdvancedCRUD::select($db, '*', "WHERE ".$where."='".$id."' ");
    }
    public static function createTask($taskData,$db='products')
    {

        return AdvancedCRUD::create($db, $taskData);
    }
    public static function createtoken($taskData,$db='products')
    {

        return AdvancedCRUD::create($db, $taskData);
    }
}