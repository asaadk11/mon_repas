<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Mon repas</title>
        <link rel="stylesheet" href="../css/acceuil3.css"/>
        <link rel="icon" type="image/png" sizes="18x18" href="../images/logo.png">
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        </head>
    <body>
    <div class="page-header">
                <a href="login.php" id="retour à la page d'accueuil" ><img class="logo"
                src="../images/logo.png" alt="Logo Mon Repas"></a>
                <a href="https://github.com/asaadk11" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../images/github.png" alt="Logo GitHub"></a>
                <p id="titre" class="display-6"  >Mon repas</p>
            </div>
            <img src="../images/fast_food.jpg" class="salades_img" style="font-size:9vw">
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
                    <a class="nav-link active " href="acceuil3.php">fast food</a>
                  </li>
                  
                  <li class="nav-item">
                  <a class="nav-link " href="acceuil4.php">Desserts</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Fast food signifie littéralement restauration rapide. Le but ici est donc de manger simplement et rapidement, généralement des hamburgers, hot dogs ou sandwichs .</p>
              <a href="fast_food.php" class="btn btn-primary">Découvrir les recettes </a>
            </div>
          </div>
          
        </body>
</html>