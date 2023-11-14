
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hnouti</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1> Hanouti</h1>
        <nav>
            
            <?php if(isset($_SESSION["user"])):?>
                
                <a href="prodForm.php">Ajouter un produit</a>
                <a href="../controllers/logout.php">Logout</a>
            <?php else:?>
                <a href="login.php">Login</a>
            <?php endif ?>
        </nav>
    </header>