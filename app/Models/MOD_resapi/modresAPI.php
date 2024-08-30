<?php

require_once './app/Models/AdvancedCRUD.php';

class modresAPI
{
    public static function runApiallproduct()
    {
        return AdvancedCRUD::select('products');
    }
    public static function filtrePdroduct($arrayfilte=[])
    {

        $whereClauses = [];
        foreach ($arrayfilte[0] as $key => $value) {
            $whereClauses[] = "$key = '$value'";
        }
        $whereCondition = implode(' AND ', $whereClauses);

        return AdvancedCRUD::select('products', '*', "WHERE $whereCondition");
    }

    public static function orderinfo($where,$id)
    {
        return AdvancedCRUD::select('products', '*', "WHERE ".$where."='".$id."' ");
    }
    public static function card_ecommerce($where,$id)
    {
        return AdvancedCRUD::select('card_shop', '*', "WHERE ".$where."='".$id."' ");
    }
}