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

        //Form validation
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirm)) {
            $_SESSION['message1'] = "Please fill all required fields!!";
            header('location: ../registration.php');
        } elseif (!password_verify($this->confirm, $this->password)) {
            $_SESSION['message1'] = "Password and Confirm password should match!!";
            header('location: ../registration.php');
        } elseif ($result['id'] == '') {
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

    public function login()
    {
        $sql = "SELECT * FROM admins WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetch();
        // var_dump($this);
        // die;

        if ($result["email"] != "") {
            if (!password_verify($this->password, $result["password"])) {
                $_SESSION['message1'] = "Incorrect Password!!";
                header('location: ../login.php');
            }
            else {
                $_SESSION['name'] = $result['name'];
                header('location:../index.php');
            }
        } else {
            $_SESSION['message1'] = "Incorrect Email!!";
            header('location: ../login.php');
        }
    }

    public function logoutAdmin(){  
        session_destroy();
        header("Location: ../login.php");
    }
}
