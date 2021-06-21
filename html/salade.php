<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Mon repas</title>
        <link rel="stylesheet" href="../css/salade.css"/>
        <link rel="stylesheet" href="../css/dropdown.css"/>
        <script src="../js/dropdown.js"></script>
        <link rel="icon" type="image/png" sizes="18x18" href="../images/logo.png">
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
       <?php
$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$conn = mysqli_connect($servername,$username,$password,$database);
?>
        </head>
    <body>
   <div class="page-header">
                <a href="login.php" id="retour à la page d'accueuil" ><img class="logo"
                src="../images/logo.png" alt="Logo Mon Repas"></a>
                <a href="https://github.com/asaadk11" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../images/github.png" alt="Logo GitHub"></a>
                <p id="titre" class="display-6"  >Mon repas</p>
            </div>
            <div class="dropdown">
                <?php
                $nom = $_COOKIE['nom'];
                echo "<button onclick='myFunction()' class='dropbtn' >$nom</button>";
                ?>
            <div id="myDropdown" class="dropdown-content">
                    <a href="changer_mdp.php">Changer de mot de passe</a>
                    <?php
                        $sql1 = $conn->query("SELECT fonction FROM utilisateur WHERE nom_complet = '$nom' ") or die($conn->error);
                        $fonction = $sql1->fetch_assoc();
        if ($fonction['fonction']=='admin') 
            {  echo'<a href="traitement_admins.php">Gestion admins</a>';
              echo'<a href="traitement_recettes.php">Gestion recette </a>';
              echo'<a href="traitement_ingrédients.php">Gestion ingrédient</a>';
             }
                     ?>
                   <a href="login.php">Déconnexion</a>
                </div>
                </div>

        <h2 style="font-size:7vw"><b>Salades</b></h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
         <?php
        $sql = $conn->query("SELECT lien_photo,nom,lien_page FROM recettes WHERE genre ='salade' ");
        while($row = $sql->fetch_array()){
       echo ' <div class="col">';
       echo '<div class="card h-50">';  
       echo ' <img src = "'.$row['lien_photo'].'" class="card-img-top" alt="">';
       echo '<div class="card-body">';
       echo ' <h5 class="card-title">'.$row['nom'].'</h5> ';
       echo ' <a href="'.$row['lien_page'].'" class="btn btn-primary">Découvrez cette recette</a> ';
       echo '</div>';
       echo '</div>';
       echo '</div>';
        }
      ?>
</div>

</body>
</html>
