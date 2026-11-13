<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='author' content="Sammy">
    <meta name='description' content="Lab 08 login page">

    <title>Lab 08 Login</title>
</head>
<body>
<?php include 'header.inc'; ?>

    <h1>Login</h1>
    <form action="process.php" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </p>
        <input type="hidden" name="token" value="S106687632">
        <p>
            <button type="submit">Log in</button>
        </p>
    </form>

<?php include 'footer.inc'; ?>
</body>
</html>
