<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Mon repas</title>
        <link rel="stylesheet" href="../css/acceuil2.css"/>
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

            <img src="../images/dessert.jpg" class="salades_img" style="font-size:9vw">   
        <?php
       $cok = $_COOKIE['nom'];
       echo "<p class='bjr'><b>Bienvenue $cok,laissez vous emporter <br> par notre variéte de choix ci dessous...  </b></p>";
    ?> 
     
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link " href="acceuil1.php">Salades</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link " href="acceuil2.php">Cuisine italienne</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="acceuil3.php">fast food</a>
                  </li>
                  
                  <li class="nav-item">
                  <a class="nav-link active " href="acceuil4.php">Desserts</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">le dernier plat servi au cours d'un repas, typiquement composé d'aliments sucrés : fruits, pâtisseries, sorbets, flans, etc...</p>
              <a href="dessert.php" class="btn btn-primary">Découvrir les recettes </a>
            </div>
          </div>
          
        </body>
</html>