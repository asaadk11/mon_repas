<?php 

$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$mail = $_POST['e-mail'];
$pwd = $_POST['pass'];

$conn = mysqli_connect($servername,$username,$password,$database);
$nom1 = $conn->query("SELECT nom_complet FROM utilisateur WHERE adresse_mail = '$mail'") or die($conn->error);
$nom = $nom1->fetch_assoc();
setcookie('nom', $nom['nom_complet'], time() + (86400 * 30), "/");
$sql = $conn->query("SELECT mdp FROM utilisateur WHERE adresse_mail = '$mail' and fonction='client' ") or die($conn->error);
$mot_de_passe = $sql->fetch_assoc();
        if ($pwd == $mot_de_passe['mdp']) 
            { echo"<script>window.location.replace('http://127.0.0.1/mon_repas/html/acceuil1.php');</script>"; }
           else{
            $sql1 = $conn->query("SELECT mdp FROM utilisateur WHERE adresse_mail = '$mail' and fonction='admin' ") or die($conn->error);
            $mot_de_passe1 = $sql1->fetch_assoc();
            if ($pwd == $mot_de_passe1['mdp']){
                echo"<script>window.location.replace('http://127.0.0.1/mon_repas/html/admin.php');</script>";
            }
            else{
                echo "<script>alert('mot de passe éronne réessayer');</script>"; 
                echo"<script>window.location.replace('http://127.0.0.1/mon_repas/html/login.php');</script>";
            }
            
         } 

         
?>