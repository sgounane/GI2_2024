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
<?= $_SERVER["SERVER_ADDR"]?>
<form action="multiform.php" method="POST">
    <label class="form-label" for="nom">Nom*:</label>
    <input class="form-control" type="text" name="nom"><br>
    <label class="form-label" for="prenom">Prenom*: </label>
    <input class="form-control" type="text" name="prenom"><br>
    <label class="form-label" for="age">Age (12+)*: </label>
    <input class="form-control" type="number" name="age"><br>
    <input class="btn btn-primary" type="submit"  value="Save"  name="perso" >
</form>

<form action="multiform.php" method="POST">
    <label class="form-label" for="université">    <label class="form-label" for="université">Nom*:</label>
*:</label>
    <input class="form-control" type="text" name="nom"><br>
    <label class="form-label" for="etablissemenr">etablissemenr*: </label>
    <input class="form-control" type="text" name="etablissemenr"><br>
    <label class="form-label" for="filiere">Filière *: </label>
    <input class="form-control" type="string" name="filiere"><br>
    <input class="btn btn-primary" type="submit"  value="Save" name="fomation" >
</form>
<?php endif ?>

</div>
  </body>
</html>