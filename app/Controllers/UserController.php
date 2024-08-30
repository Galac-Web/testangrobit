<?php
require_once './app/Models/TemplateEngine.php';
require_once './app/Models/User.php';
session_start();
class UserController
{
    private $templateEngine;

    public function __construct()
    {
        $this->templateEngine = new TemplateEngine('./app/views/user');
    }
    public function index()
    {
        $users = User::getuserslogin();
        echo $this->templateEngine->render('allusers.php', ['users' => $users]);
    }

    public function vivedusers($id)
    {
        $users = User::getLoginID($id);
        echo $this->templateEngine->render('desusers.php', ['users' => $users]);
    }
    public function getIdusets($id)
    {
        return User::getLoginID($id);
    }
    public function get_allinfo($id,$db='users_connect',$where='randomn_id')
    {
        return User::getinfousers($id,$db,$where);
    }



    public function getidUsers()
    {
        if (isset($_SESSION['user_id']) && $this->verifyId($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            if ($this->checkUserExists($id)) {
                setcookie('token', $this->generateToken(), time() + (86400 * 30), "/");
                setcookie('UserAcces', 'true', time() + (86400 * 30), "/");
                $res = true;
            } else {
                session_unset();
                setcookie('UserAcces', 'false', time() + (86400 * 30), "/");
                setcookie('error', 'Invalid ID ', time() + (86400 * 30), "/");
                unset($_COOKIE['fxuser_accessed']);
                $res = false;
            }
        } else {
            session_unset();
            setcookie('UserAcces', 'false', time() + (86400 * 30), "/");
            setcookie('error', 'Invalid ID format Nes', time() + (86400 * 30), "/");
            unset($_COOKIE['fxuser_accessed']);
            $res = false;
        }
        return $res;
    }

    private function verifyId($id) {
        // Ваша функция для проверки формата ID
        return preg_match('/^[0-9]+$/', $id);
    }

    private function checkUserExists($id) {
       return User::getLoginID($id);
    }

    private function generateToken() {
        // Функция для генерации токена
        return bin2hex(random_bytes(16));
    }

    public function add($db='')
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $exceptions = ['type','idusers','randomnid']; // Добавьте сюда любые ключи, которые хотите исключить

// Удаление исключений из массива $_POST
            $filteredPost = array_diff_key($_POST, array_flip($exceptions));

// Проверка на наличие специальных символов, исключая телефон и email
            $taskData = [];
            foreach ($filteredPost as $key => $value) {
                // Условие для пропуска проверки для полей 'phone' и 'email'
                if ($key === 'phone' || $key === 'email') {
                    // Для этих полей просто добавляем значение в $taskData без проверки
                    $taskData[$key] = $value;
                } else {
                    // Проверка на специальные символы для всех остальных полей
                    if (preg_match('/[^a-zA-Z0-9_\- ]/', $value)) {
                        // Здесь можно добавить обработку ошибки
                        echo "Недопустимые символы в поле $key.";
                        continue;
                    }

                    // Если проверка пройдена, добавляем значение в $taskData
                    $taskData[$key] = $value;
                }
            }
            // Добавление id_users в массив
            $taskData['id_users'] = $_SESSION['user_id'];
            ($_POST['randomnid'])? $taskData['randomn_id'] = $_POST['randomnid'] : $taskData['randomn_id'] = rand(20, 1000);
            ($db !== '')? User::createTask($taskData,$db) : User::createTask($taskData);


        } else {
            header('Location: /');
            exit; // Добавьте exit, чтобы предотвратить выполнение дальнейшего кода
        }
    }

    public function addrefusers($db='',$usrsid='')
    {
        $taskData['id_users'] = $usrsid;
        $taskData['connect_id'] = $_POST['idusers'];
        $taskData['randomn_id'] = rand(20, 1000);
        User::createTask($taskData,'users_refer');

    }
    public function edit($taskId)
    {
        $exceptions = ['type']; // Добавьте сюда любые ключи, которые хотите исключить

// Удаление исключений из массива $_POST
        $filteredPost = array_diff_key($_POST, array_flip($exceptions));
        $taskData = [];
        foreach ($filteredPost as $key => $value) {
                $taskData[$key] = $value;
        }
        User::updateTaskinfo($taskId, $taskData);

    }



    public function delete($taskId)
    {
        $users = User::deleteTask($taskId);

    }
    // Функцыя для работы с монедный в системы

    public function moneySystem($array = null)
    {
        $return_users = User::getInfoUsers($_SESSION['user_id'], 'users_connect', 'random_id');

        if (count($return_users) == 0) {
            return [
                "token" => '0',
                "tiket" => '0',
                "ProgresBar" => '0',
            ];
        }
    }
// Функцыя Получения статуса пользвателия в системе
    public function system_status()
    {
        $return_users = User::getInfoUsers($_SESSION['user_id']);
        $token_count = $this->count_datte('users_mony','id_users','count_token');
        $count_tiket = $this->count_datte('users_tiket','id_users','count_tiket');

        if (count($return_users) > 0) {
            return [
                "token" => $token_count,
                "tiket" => $count_tiket,
                "ProgresBar" => '0',
            ];
        } else {
            return [
                "token" => 0,
                "tiket" => 0,
                "ProgresBar" => '0',
            ];
        }
    }

    private function count_datte($namebd,$type_id,$name)
    {
        $return_array= User::getInfoUsers($_SESSION['user_id'], $namebd, $type_id);

        (count($return_array)>0)? $result = $return_array[0][$name]: $result = 0;

        return $result;
    }




}