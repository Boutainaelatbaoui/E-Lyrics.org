<?php
require_once 'admin.php';
if (isset($_POST['signup'])) {
    extract($_POST);
    var_dump($_POST);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = new Admin($id, $username, $email, $password, $confirm);
    $user->registration();
}
