<?php
class AdvancedCRUD
{
    private static $db;

    public static function setDatabase(PDO $db)
    {
        self::$db = $db;
    }

    public static function select($tableName, $columns = '*', $whereClause = '', $orderBy = '', $limit = '')
    {
        $sql = "SELECT $columns FROM $tableName $whereClause $orderBy $limit";

        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($tableName, $data)
    {
        // Проверка и хэширование пароля, если он присутствует в данных
        if (isset($data['password'])) {
            $data['password'] = md5($data['password']);
        }

        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";

        $stmt = self::$db->prepare($sql);

        // Привязка значений
        $values = array_values($data);
        foreach ($values as $index => $value) {
            $stmt->bindValue($index + 1, $value);
        }


        return $stmt->execute();
    }

    public static function update($tableName, $data, $whereClause)
    {
        $set = implode(", ", array_map(function($key, $value) { return "$key = '$value'"; }, array_keys($data), array_values($data)));
        $sql = "UPDATE $tableName SET $set $whereClause";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute();
    }

    public static function delete($tableName, $whereClause)
    {
        $sql = "DELETE FROM $tableName $whereClause";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute();
    }
}
?>
