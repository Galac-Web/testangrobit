<?php
if (isset($_GET['id']) && is_numeric($_GET['id']) && intval($_GET['id']) > 0) {
    $id = intval($_GET['id']);
    $userController = new UserController();
    $userController->vivedusers($_GET['id']);

}
?>
