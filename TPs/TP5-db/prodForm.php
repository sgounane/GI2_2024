<?php 
  session_start();
  if(!isset($_SESSION["user"])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <h3>Ajout Produit</h3>
    <div class="container">
    <form action= "ajoutProduit.php" method="POST" class=" border mt-5 p-3 w-50 ml-auto mr-auto">
  <div class="form-group  ">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="titre" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prix</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" name="prix" required>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="number" class="form-control" id="description" placeholder="description" name="description" required></textarea>
  </div>

  <div class="form-group">
    <label for="photo">Upload Image</label>
    <input type="file" class="form-control" id="photo"  name="photo" required>
  </div>

  <button type="submit" class="btn btn-primary" name="addproduct">Ajouter</button>
</form>
    </div>
</body>
</html>