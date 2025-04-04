<?php
session_start();
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);



error_reporting(E_ALL);
ini_set('display_errors', 1);

ob_start();
session_start();


$users = array("email" => "random@gmail.com", "password" => "random123");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["submit"])) {
        $data = $_POST;
        $email = $data['email'];
        $password = $data['password'];
        if ($email !== $users['email'] or $password !== $users['password']) {
            $_SESSION['error'] = "Invalid email or password. Please try again.";
            header("Location: ./../../login-form.php");


            exit();
        }
        $_SESSION['user_email'] = $email;
        unset($_SESSION['error']);
        header("Location: ./../../index.php");


        exit();
    }
}
