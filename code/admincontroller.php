<?php
require_once 'admin.php';
if (isset($_POST['signup'])) {
    extract($_POST);
    // var_dump($_POST);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $admin = new Admin($id, $username, $email, $password, $confirm);
    $admin->registration();
}
if (isset($_POST['login'])) {
    extract($_POST);
    // var_dump($_POST);
    // die();
    $admin = new Admin;
    $admin->email = $email;
    $admin->password = $password;
    $admin->login();
}
