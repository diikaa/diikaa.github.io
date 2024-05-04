<?php
session_start(); // Start the session.

// Dummy credentials for demonstration purposes
$myUsername = 'admin';
$myPassword = 'password';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $myUsername && $password === $myPassword) {
// Credentials are correct
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
echo "Welcome, " . $username . "!";
// Redirect to a new page or display a success message
// header('Location: welcome.php'); // Redirect to another page
// exit();
} else {
// Credentials are incorrect
echo "Invalid username or password!";
}
}
?>