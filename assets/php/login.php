<?php
// IMPORTANT: Start session ONCE at the very beginning, before ANY output.
session_start();

// --- Error Reporting (Good for Development) ---
error_reporting(E_ALL);
ini_set('display_errors', 1);

// --- Get error message from previous attempt (if any) ---
$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']); // Clear the error message after retrieving it

// --- Hardcoded Credentials (as per criteria, BUT VERY INSECURE) ---
// WARNING: Storing plain text passwords like this is highly insecure and
//          should NEVER be done in a real application. Use password hashing.

$valid_emails = array(
    "random@gmail.com",   // Index 0
    "test@example.com",   // Index 1
    "password@gmail.com" // Index 2
    // Add more valid emails here
);

$valid_passwords = array(
    "random123",         // Index 0 (Password for random@gmail.com)
    "test123",         // Index 1 (Password for test@example.com)
    "password3"          // Index 2 (Password for anotheruser@domain.net)
    // Add corresponding passwords here (MUST maintain the same order/index)
);

// --- Handle Login Form Submission ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Optional: Check if the specific submit button was pressed, if you have multiple forms
    if (isset($_POST["submit"])) { // Assuming your submit button has name="submit"

        // Retrieve submitted data
        $submitted_email = $_POST['email'] ?? null; // Use null coalescing for safety
        $submitted_password = $_POST['password'] ?? null;

        // --- Validation Logic using Parallel Arrays ---
        $isValid = false; // Flag to track if login is successful
        if ($submitted_email && $submitted_password) { // Basic check if fields are not empty

            // Find the index of the submitted email in the valid emails array
            $userIndex = array_search($submitted_email, $valid_emails);

            // Check if email was found AND if the password at the same index matches
            if ($userIndex !== false && isset($valid_passwords[$userIndex]) && $valid_passwords[$userIndex] === $submitted_password) {
                // Credentials are correct!
                $isValid = true;
                $_SESSION['user_email'] = $submitted_email; // Store email in session
                // You could also store the index or other related info if needed
                // $_SESSION['user_index'] = $userIndex;
            }
        }

        // --- Redirect based on validation result ---
        if ($isValid) {
            unset($_SESSION['error']); // Clear any potential previous error just in case
            header("Location: ./../../index.php"); // Redirect to main page on success
            exit(); // ALWAYS exit after a header redirect
        } else {
            // Invalid credentials or missing input
            $_SESSION['error'] = "Invalid email or password. Please try again.";
            header("Location: ./../../login-form.php"); // Redirect back to login form
            exit(); // ALWAYS exit after a header redirect
        }
    } else {
        // Handle case where POST request happened but submit button wasn't set (optional)
        $_SESSION['error'] = "Form submission error.";
        header("Location: ./../../login-form.php");
        exit();
    }
}
