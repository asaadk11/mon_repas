<?php
   $servername ='127.0.0.1';
   $database ='mon_repas';
   $username ='root';
   $password ='Neymar11';
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error()."<br>");
    }
    $nom_complet = $_COOKIE['nom'];
    $mdp_actuel = $_POST['mdp_actuel'];
    $new_pass1 = $_POST['nouveau_mdp1'];
    $new_pass2 = $_POST['nouveau_mdp2'];
  $requette_1 = "SELECT mdp FROM utilisateur WHERE nom_complet = '$nom_complet'";
    $sql = $conn->query($requette_1) or die($conn->error);
    $row = $sql->fetch_array() ;
    if ($row['mdp'] == $mdp_actuel){
        if($new_pass1 == $new_pass2){
            $requette_2 = "UPDATE utilisateur SET mdp='$new_pass1' WHERE nom_complet = '$nom_complet'";
            if ($conn->query($requette_2) === TRUE) {
                echo "<script>alert('Mot de passe modifié');</script>";
                echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/admin.php');</script>";
              } else {
                echo "Error updating record: " . $conn->error;
              }
        }else{
            echo "<script>alert('Mots de passes ne sont pas identiques');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/changer_mdp.php');</script>";
        }
    }else{
        echo "<script>alert('Mot de passe actuel invalide !');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/changer_mdp.php');</script>";
    }
?>