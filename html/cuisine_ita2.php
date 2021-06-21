<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8" />
        <title>Mon repas</title>
        <link rel="stylesheet" href="../css/salade1.css"/>
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

            <div class="">    
            <table class="table container-sm ">
  <thead>
    <tr>
      <th scope="col">ingrédient</th>
      <th scope="col">quantité</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = $conn->query("SELECT nom_ingrédient,quantite FROM quantité WHERE nom_recette='Polpette de boeuf à la sauce tomate' ");
        while($row = $sql->fetch_array()){
       echo '<tr>';
       echo '<th scope="row">'.$row['nom_ingrédient'].'</th>';
        echo '<td>'.$row['quantite'].'</td>';
        echo '</tr>';  
        }
      ?>
   </tbody>
</table>
</div>
            <div class="video">
            <p><b>Vidéo explicatif pour preparer la recette:</b></p> </br>
  <video width="320" height="240" controls >
  <?php
                        $sql2 = $conn->query("SELECT lien_video FROM recettes WHERE lien_page ='cuisine_ita2.php' ") ;
                        while($ligne= $sql2->fetch_assoc())
            {  echo'<source src="'.$ligne['lien_video'].'" type="video/mp4">';
             }
                     ?>
  </video>
 
</body>
</html>