<?php

session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);


$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);





$valid_emails = array(
    "random@gmail.com",   // Index 0
    "test@example.com",   // Index 1
    "password@gmail.com" // Index 2

);

$valid_passwords = array(
    "random123",         // Index 0 (Password for random@gmail.com)
    "test123",         // Index 1 (Password for test@example.com)
    "password3"          // Index 2 (Password for anotheruser@domain.net)

);



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["submit"])) {


        $submitted_email = $_POST['email'] ?? null;
        $submitted_password = $_POST['password'] ?? null;


        $isValid = false;
        if ($submitted_email && $submitted_password) {


            $userIndex = array_search($submitted_email, $valid_emails);


            if ($userIndex !== false && isset($valid_passwords[$userIndex]) && $valid_passwords[$userIndex] === $submitted_password) {

                $isValid = true;
                $_SESSION['user_email'] = $submitted_email; // Store email in session


            }
        }

        // --- Redirect based on validation result ---
        if ($isValid) {
            unset($_SESSION['error']);
            header("Location: ./../../index.php"); // Redirect to main page on success
            exit();
        } else {
            // Invalid credentials or missing input
            $_SESSION['error'] = "Invalid email or password. Please try again.";
            header("Location: ./../../login-form.php"); // Redirect back to login form
            exit();
        }
    } else {
        $_SESSION['error'] = "Form submission error.";
        header("Location: ./../../login-form.php");
        exit();
    }
}
