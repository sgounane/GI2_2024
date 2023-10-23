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
if($_SERVER["REQUEST_METHOD"]=="GET"):?> 
<form action="myForm.php" method="POST">
    <label class="form-label" for="nom">Nom*:</label>
    <input class="form-control" type="text" name="nom"><br>
    <label class="form-label" for="prenom">Prenom*: </label>
    <input class="form-control" type="text" name="prenom"><br>
    <label class="form-label" for="age">Age (12+)*: </label>
    <input class="form-control" type="number" name="age"><br>
    <input class="btn btn-primary" type="submit" value="submit" name="data" >
</form>
<?php elseif(((int)$_POST["age"])<12 || strlen($_POST["nom"])==0 || strlen($_POST["prenom"])==0 ) :?>

    <form action="myForm.php" method="POST">
    <label class="form-label" for="nom">Nom*:</label>
    <input class="form-control" type="text" name="nom" value=<?=$_POST["nom"]?> >
    <?php 
    $str=strlen($_POST["nom"])==0 ? "<p style='color:red'>Nom Obligatoir</p>": "";
    echo $str."</br>";
    ?>
    <label class="form-label" for="prenom">Prenom*: </label>
    <input class="form-control" type="text" name="prenom" value=<?=$_POST["prenom"] ?> >
    <?php 
    $str=strlen($_POST["prenom"])==0 ? "<p style='color:red'>Prenom Obligatoir</p>": "";
    echo $str."</br>";
    ?>

    <label class="form-label" for="age">Age (12+)*: </label>
    <input class="form-control" type="number" name="age" value=<?=$_POST["age"]?> >
    <?php 
    $str=$_POST["age"]<12 ? "<p style='color:red'> age <12 </p>": "";
    echo $str."</br>";
    ?>

    <input class="btn btn-primary" type="submit" value="submit" name="data" >
</form>

<?php else:?>

    <h1> BONJOUR <?=$_POST['nom'] ?></h1>

<?php endif ?>

</div>
  </body>
</html>