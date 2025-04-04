<?php

session_start();


$errors = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST['firstName']) . ' ' . trim($_POST['lastName']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $gender = isset($_POST['Gender']) ? $_POST['Gender'] : "";






    // Validate Name
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate userame
    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Validate Birthday
    if (empty($birthday)) {
        $errors[] = "Birthday is required.";
    }

    // Validate Gender
    if (empty($gender)) {
        $errors[] = "Gender selection is required.";
    }




    if (!isset($_FILES['image']) | $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "File upload failed.";
        $errors[] = "File upload failed. Error code: " . $error_code;
    } else {
        $file_name  = basename($_FILES['image']['name']);
        $target_dir = __DIR__ . "./../images/";
        $target_file = $target_dir . basename($file_name);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_size = $_FILES['image']['size'];
        $relative_path = "./assets/images/" . $file_name;

        if ($file_size > 1000000) {
            $errors[] = "Sorry, file is too large";
        }

        $valid_file =  ["png", "jpg", "jpeg", "gif"];
        if (!in_array($image_file_type, $valid_file)) {
            $errors[] = "Sorry, only JPG, JPEG, PNG, and GIF are supported.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['error'] = implode("<br>", $errors);
        header("Location: ./../../registration-form.php");
        exit();
    }

    $temp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($temp_name, $target_file);
    // If no errors, proceed with registration (Example only)
    $_SESSION['success'] = "Registration successful!";
    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;
    $_SESSION['user_email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['gender'] = $gender;
    $_SESSION['img_dir'] = $relative_path;
    header("Location: ./../../display-details.php");

    exit();
}
