<?php 
  session_start();
  if(!isset($_SESSION["user"])){
    header("Location: home.php");
    die();
  } 

  include("header.php")
?>

    <div class="container">
    <form action= "../controllers/ajoutProduit.php" method="POST" class=" border mt-5 p-3 w-50 ml-auto mr-auto" enctype="multipart/form-data">
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
    <textarea type="number" class="form-control" rows=8 id="description" placeholder="description" name="description" required></textarea>
  </div>

  <div class="form-group">
    <label for="photo">Upload Image</label>
    <input type="file" class="form-control" id="photo"  name="photo" required>
  </div>

  <button type="submit" class="btn btn-primary" name="addproduct">Ajouter</button>
</form>
    </div>
    <?php
    include_once("footer.php");
    ?>