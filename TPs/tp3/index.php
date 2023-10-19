<?php
  session_start();
  //session_destroy();
  include("tools.php");
  if(!isset($_SESSION["data"]))   $_SESSION["data"]=$todos;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ToDos</title>
</head>
<body>
    <div class="container">
    <h1>ToDos</h1>
    <a href="delete.php">delete</a>
    
    
    
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm  mx-2 border border-primary">
        <form>
          <div class="form-group">
            <label for="userid">UserId</label>
            <input type="text" class="form-control" id="userid" placeholder="234">
          </div>
          <div class="form-group">
            <label for="todo">Todo</label>
            <input type="text" class="form-control" id="todo"  placeholder="todo">
          </div>
          
          <input type="button" id="add" class="btn btn-primary" value="Add">
        </form>
        <hr>
        <form >
          <div class="form-group">
            <label for="todoSearche">Todo Filter</label>
            <input type="text" class="form-control" id="todoSearche" placeholder="todo">
          </div>
          <div class="form-group">
            <label for="userSearche">User Filter</label>
            <input type="text" class="form-control" id="userSearche" placeholder="233">
          </div>
       </form>
        </div>
        <div class="col-sm-8  border border-primary" >
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">UserID</th>
                <th scope="col">Todo</th>
                <th scope="col">Completed</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="tb">
              <?php foreach($_SESSION["data"] as $id=>$todo){?>
                <tr>
                  <td><?= $id ?></td>
                  <td><?= $todo["userId"] ?> </td>
                  <td><?= $todo["todo"] ?> </td>
                  <td><?= $todo["completed"] ?> </td>
                  <td><a href="">edit</a><a href= "delete.php?id=<?= $id ?>" > delete</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

</body>
</html>