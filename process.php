<?php
session_start();

$EXPECTED_USER = 'Sammy';
$EXPECTED_PASS = '1066876232';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token = $_POST['token'] ?? '';

if ($username === $EXPECTED_USER && $password === $EXPECTED_PASS) {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {

echo "Invalid login. <a href='login.html'>Try again</a>";
exit;
}
