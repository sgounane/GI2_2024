<?php 
session_start(); 
if(isset($_SESSION["user"])) header("Location: index.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <?php
     if(isset($_SESSION["error"])) echo "<div style='background-color:orange;'> ".$_SESSION["error"]."</div>";
  ?>
<form action="auth.php" method="POST">
    <h1>LOGIN</h1>
    <label class="form-label" for="user">Login*: </label>
    <input class="form-control" type="text" name="user"><br>
    <label class="form-label" for="password">Password *: </label>
    <input class="form-control" type="password" name="password"><br>
    <input class="btn btn-primary" type="submit"  value="Login" name="login" >
</form>
<pre>

</pre>
</div>
  </body>
</html>