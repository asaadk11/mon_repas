
<?php
$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$name = $_POST['name'];
$vid = $_POST['video'];
$photo = $_POST['photo'];
$genre = $_POST['genre'];

$conn = mysqli_connect($servername,$username,$password,$database);
$sql1 = $conn->query("SELECT nom FROM recettes;");
    while($row = $sql1->fetch_array()){
        if($name ===  $row['nom']){
            echo "<script>alert('Cette recette existe dejà');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_recette.php');</script>";
        }  
        } 
     


    if($conn->query("INSERT INTO recettes(nom,lien_video,lien_photo,lien_page,genre) VALUES ('$name','$vid','$photo','new_page.php','$genre');") == TRUE){
        echo "<script>alert('$name a été ajouté aux recettes avec succes!');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_recette.php');</script>";
    }


?>
