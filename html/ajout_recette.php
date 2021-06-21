<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mon repas</title>
		    <link rel="stylesheet" href="../css/admin.css"/>
        <link rel="stylesheet" href="../css/dropdown.css"/>
        <script src="../js/dropdown.js"></script>
		    <link rel="icon" type="image/png" sizes="18x18" href="../images/logo.png">
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body >
    <div class="page-header">
                <a href="login.php" id="retour à la page d'accueuil" ><img class="logo"
                src="../images/logo.png" alt="Logo Mon Repas"></a>
                <a href="https://github.com/asaadk11" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../images/github.png" alt="Logo GitHub"></a>
                <p id="titre" class="display-6" >Mon repas</p>
            </div>
            <div class="dropdown">
                <?php
                $nom = $_COOKIE['nom'];
                echo "<button onclick='myFunction()' class='dropbtn' >$nom</button>";
                ?>
                
                <div id="myDropdown" class="dropdown-content">
                <a href="changer_mdp.php">Changer de mot de passe</a>
                <a href="login.php">Déconnexion</a>
                </div>
            </div> 
        <div class="container-fluid">
            <div class="warning">
                <form action="../traitement/ajout_recette.php" method="post">
                    <h4>Ajouter une recette : </h4><br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Nom Recette </span>
    <input type="text" placeholder="Nom Recette" name="name" class="form-control" required><br>
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">lien_video</span>
    <input type="text" placeholder="../videos/video.mp4" name="video" class="form-control" ><br>
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">lien_photo</span>
    <input type="text" placeholder="../images/image.jpg" name="photo" class="form-control" ><br>
    </div><select class="form-select" aria-label="Default select example" name="genre">
        <option selected>veuillez choisir un type</option>
        <option value="salade">Salade</option>
        <option value="cuisine_ita">Cuisine italienne</option>
        <option value="fast_food">Fast food</option>
        <option value="dessert">Dessert</option>
      </select> <br>
    
     <input type="button" value="Ajouter" id="btn" onclick="submit()"  class="btn btn-dark">
    </form>
        </div>
        </div>
        <br>
        <br>
        
    </body>
</html>