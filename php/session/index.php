<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    
    if(isset($user))
    echo "<h1> Bonjour $user</h1>";
    else    header("Location: login.php");
    ?>
</body>
</html>