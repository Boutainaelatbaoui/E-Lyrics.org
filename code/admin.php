<?php
require 'connection.php';
session_start();

class Admin extends Connection
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $confirm;


    function __construct($id = null, $username = null, $email = null, $password = null, $confirm = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->confirm = $confirm;
    }


    public function registration()
    {
        $sql = "SELECT * FROM admins WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetch();

        if ($result['id'] == '') {
            $ins = "INSERT INTO `admins` (`name`, `email`, `password`) VALUES(?,?,?)";
            $stmt = $this->connect()->prepare($ins);
            $stmt->execute([$this->username, $this->email, $this->password]);
            header('location:../login.php');
            $_SESSION['message'] = "Registration has been added successfully !";
        } else {
            $_SESSION['message1'] = "Email already exists!!";
            header('location:../registration.php');
        }
    }
}

