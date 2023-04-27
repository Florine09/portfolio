<?php
    require "connexion.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="container-products">
        <?php
            $req = $bdd->query("SELECT * FROM products ORDER BY date DESC");
            while($don = $req->fetch())
            {
                //var_dump($don);
                echo "<a class='products' href='product.php?id=".$don['id']."'>";
                    echo "<img src='images/mini_".$don['cover']."' alt='image de ".$don['title']."'>";
                    echo "<div class='prod-title'>".$don['title']."</div>";
                echo "</a>";
            }
            $req->closeCursor();
        ?>
    </div>
</body>
</html>