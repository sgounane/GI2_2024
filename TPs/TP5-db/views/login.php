<?php 
  session_start();
  if(isset($_SESSION["user"])) header("Location: home.php");

  include_once("header.php");
?>

    <div class="container">
    <form action= "/auth" method="POST" class=" border mt-5 p-3 w-50 ml-auto mr-auto">
  <div class="form-group  ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
</div>

<?php
include_once("footer.php");
?>