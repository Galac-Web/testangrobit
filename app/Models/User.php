<?php
require_once 'AdvancedCRUD.php';
class User
{
    public static function getLogin($login,$password)
    {
        return AdvancedCRUD::select('users_connect', '*', "WHERE login='".$login."' AND password='".$password."' ");
    }
    public static function getLoginID($id)
    {
        return AdvancedCRUD::select('users_connect', '*', "WHERE randomn_id='".$id."' ");
    }
    public static function getinfousers($id,$db='users_connect',$where='randomn_id')
    {

        return AdvancedCRUD::select($db, '*', "WHERE ".$where."='".$id."' ");
    }
    public static function getuserslogin()
    {
        return AdvancedCRUD::select('users_connect');
    }

    public static function createTask($taskData,$db='users_connect')
    {

        return AdvancedCRUD::create($db, $taskData);
    }

    public static function updateTask($taskId, $taskData)
    {
        return AdvancedCRUD::update('users_connect', $taskData, "WHERE id = $taskId");
    }
    public static function updateTaskinfo($taskId, $taskData)
    {
        return AdvancedCRUD::update('users_info', $taskData, "WHERE id = $taskId");
    }
    public static function deleteTask($taskId)
    {
        return AdvancedCRUD::delete('users_connect', "WHERE id = $taskId");
    }
}