
<?php 
        session_start();
        include_once("db.php");
        $prods=getProducts();
       // var_dump($prods);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hnouti</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1> Hanouti</h1>
        <nav>
            
            <?php if(isset($_SESSION["user"])):?>
                
                <a href="prodForm.php">Ajouter un produit</a>
                <a href="logout.php">Logout</a>
            <?php else:?>
                <a href="login.php">Login</a>
            <?php endif ?>
        </nav>
    </header>

    <section>
        <article> 

            <?php foreach($prods as $prod) :?>
                <div class="article">
                    <img src=<?=$prod->image ?> alt="" class="prodimg">
                    <div class="titre"><?=$prod->titre ?></div>
                    <div class="prix"><?=$prod->prix ?>DH</div>
                    <a href="add.php" class="add"></a>
                    <a href=<?="details.php?id=".$prod->id ?>  class="detail">Detail</a>
                </div>
            <?php endforeach ?> 
            
        </article>
        
    </section>

    <aside> 
            <form action="search.php" method="POST" class="searchefrm">
                <input type="text" >
                <input type="submit" value="Search" name="search">
            </form>
            <div class="title">Total: 234DH</div>
            <div class="element">
                <img src="images/1.jpg" alt="" class="prodimgmin">
                <div>Linovo thinkpad</div>
                <div>3</div>
                <a href="delete.php"  class="delete"></a>
            </div>
            <div class="element">
                <img src="images/2.jpg" alt="" class="prodimgmin">
                <div>Linovo thinkpad</div>
                <div>3</div>
                <a href="delete.php"  class="delete"></a>
            </div>
            <div class="element">
                <img src="images/3.jpg" alt="" class="prodimgmin">
                <div>Linovo thinkpad</div>
                <div>3</div>
                <a href="delete.php"  class="delete"></a>
            </div>
            <div class="element">
                <img src="images/4.jpg" alt="" class="prodimgmin">
                <div>Linovo thinkpad</div>
                <div>3</div>
                <a href="delete.php"  class="delete"></a>
            </div>
        </aside>

    <footer>Footer</footer>
</body>
</html>