<?php
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }

    require "../connexion.php";

    if(isset($_GET['delete']))
    {
        $id = htmlspecialchars($_GET['delete']);
        $verif = $bdd->prepare("SELECT * FROM works WHERE id=?");
        $verif->execute([$id]);
        if(!$donVerif = $verif->fetch() )
        {
            $verif->closeCursor();
            header("LOCATION:works.php");
        }
        $verif->closeCursor();
        
        // supprimer l'image du produit
        unlink("../images/".$donVerif['image']);

        // supprimer le produit
        $delete = $bdd->prepare("DELETE FROM works WHERE id=?");
        $delete->execute([$id]);
        $delete->closeCursor();
        header("LOCATION:works.php?successDelete=".$id);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Administration de Stock</title>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- <?php 
        include("partials/header.php");
    ?> -->
    <div class="container">
        <h1>Administration</h1>
        <div>
            <a href="dashboard.php" class="btn btn-secondary">Retour</a>
        </div>
        <div>
            <a href="addWorks.php" class="btn btn-primary my-3">Ajouter un produit</a>
        </div>
        <?php
            if(isset($_GET['successDelete']))
            {
                echo "<div class='alert alert-danger'>Vous avez bien supprimé le produit n°".$_GET['successDelete']."</div>";
            }
            if(isset($_GET['addsuccess']))
            {
               echo "<div class='alert alert-success'>Vous avez bien ajouté un nouveau produit</div>"; 
            }
            if(isset($_GET['updatesuccess']))
            {
                echo "<div class='alert alert-warning'>Vous avez bien modifié le produit n°".$_GET['updatesuccess']."</div>";
            }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req = $bdd->query("SELECT * FROM works");
                    while($don = $req->fetch())
                    {
                        echo "<tr>";
                            echo "<td>".$don['id']."</td>";
                            echo "<td>".$don['title']."</td>";
                            echo "<td class='text-center'>";
                                echo "<a href='updateWorks.php?id=".$don['id']."' class='btn btn-warning m-2'>Modifier</a>";
                                echo "<a href='works.php?delete=".$don['id']."' class='btn btn-danger m-2'>Supprimer</a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    $req->closeCursor();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>