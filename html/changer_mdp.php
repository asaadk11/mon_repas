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
    <body>
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
                <a href="changer_mdp.php"  class="btn disabled">mot de passe</a>
                <a href="login.php">Déconnexion</a>
                </div>
            </div>

        <div class="container-fluid">
            <div class="warning">
                <form action="change.php" method="post">
                    <h4>Changer le mot de passe : </h4><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Mot de passe actuel : </span>
                        <input type="password" placeholder="***********" name="mdp_actuel" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nouveau mot de passe : </span>
                        <input type="password" placeholder="***********" name="nouveau_mdp1" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ressaisissez le nouveau mot de passe : </span>
                        <input type="password" placeholder="***********" name="nouveau_mdp2" class="form-control" required><br>
                    </div>
                    <input type="button" value="Enregistrer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
        <br>
        <br>
        </body>
</html>