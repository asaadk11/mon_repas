
<?php
$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$mail = $_POST['e-mail'];
$rps = $_POST['reponse'];
$pwd = $_POST['pass'];
$pass_word2= $_POST['pass_word2'];
$conn = mysqli_connect($servername,$username,$password,$database);
$sql1 = $conn->query("SELECT reponse_secrete FROM utilisateur WHERE adresse_mail = '$mail'") or die($conn->error);
$row = $sql1->fetch_array() ; 
if($row['reponse_secrete'] ==$rps){
if($pwd == $pass_word2){
    $sql2="UPDATE utilisateur SET mdp='$pwd' WHERE adresse_mail = '$mail'" ;
         if ($conn->query($sql2) === TRUE) {
                echo "<script>alert('Félicitation,votre mot de passe a été modifié avec succes!');</script>";
                echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/login.php');</script>";
              } else {
                echo "Error updating record: " . $conn->error;
              }
        }else{
            echo "<script>alert('Mots de passes ne sont pas identiques');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/mdp_oublie.php');</script>";
        }
    }else{
        echo "<script>alert('La réponse secrète est incorrect !');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/mdp_oublie.php.php');</script>";
    }
?>
