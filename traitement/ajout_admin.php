
<?php
$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$name = $_POST['name'];
$mail = $_POST['e-mail'];
$pwd = $_POST['pass'];
$qst = $_POST['question'];
$rps = $_POST['reponse'];
$pass_word2= $_POST['pass_word2'];
$conn = mysqli_connect($servername,$username,$password,$database);
$sql1 = $conn->query("SELECT adresse_mail FROM utilisateur;");
    while($row = $sql1->fetch_array()){
        if($mail ===  $row['adresse_mail']){
            echo "<script>alert('Cet adresse mail existe dejà');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_admin.php');</script>";
        }  
        } 
     

if($pwd == $pass_word2){
    if($conn->query("INSERT INTO utilisateur(fonction,nom_complet,adresse_mail,mdp,question_secrete,reponse_secrete) VALUES ('admin','$name','$mail','$pwd','$qst','$rps');") == TRUE){
        echo "<script>alert('$name a été ajouté aux admins avec succes!');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_admin.php');</script>";
    }
}else{
    echo "<script>alert('Les mots de passes ne sont pas identiques');</script>";
    echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_admin.php');</script>";
}

?>
