<?php session_start();  
unset($_SESSION["error"]);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php if( isset($_SESSION["user"])): ?>
        <h1> Bonjour <?=$_SESSION['user']?> </h1>
        <form action="auth.php" method="POST">
            <input type="submit" value="logout" name="logout">
        </form>
        
    <?php else : ?>
           <?php header("Location: login.php");?>
    <?php endif ?>
</body>
</html>