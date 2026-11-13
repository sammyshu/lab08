<?php
session_start();
if (isset($_SESSION['user'])) {
echo "Welcome, ". $_SESSION['user'];
} else {
header('Location: login.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='author' content="Sammy">
    <meta name='description' content="Lab 08 welcome page">

    <title>Lab 08 Welcome</title>
</head>
<body>
<?php include 'header.inc'; ?>

    <h1>Welcome</h1>
    <p>Welcome, <?php echo $_SESSION['user']; ?>. You are logged in.</p>

<?php include 'footer.inc'; ?>
</body>
</html>

