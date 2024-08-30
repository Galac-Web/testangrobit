<?php
class Database
{
    private static $db;

    public static function connect($host, $dbname, $username, $password)
    {
        try {
            self::$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getDB()
    {
        return self::$db;
    }
}
?>
