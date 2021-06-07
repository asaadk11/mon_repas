<!DOCTYPE html>
<html>
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
                <div class="form1">
                <form method="post" action="traitement_recettes.php">
                <input type="button" value="Gestion des recettes" onclick="submit()" id="btn1" class="btn btn-dark">
                </form>
                <br>
                </div>
                <div class="form2">
                <form method="post" action="traitement_ingrédients.php">
                <input type="button" value="Gestion des ingrédients" onclick="submit()" id ="btn2" class="btn btn-dark">
                </form>
                <br>
                </div>
                <div class="form3">
                <form method="post" action="traitement_admins.php">
                <input type="button" value="Gestion des admins" onclick="submit()" id ="btn3" class="btn btn-dark">
                </form>
                <br>
               
            </div>
        </div>
          
    </body>
</html>
