<?php
session_start();

// Dummy user data for example purposes
$users = [
    'user@example.com' => 'password123'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (isset($users[$email]) && $users[$email] == $password) {
        $_SESSION['user'] = $email;
        header('Location: welcome.php');
    } else {
        echo "Invalid email or password";
    }
}
?>
