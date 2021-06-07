
<?php
$servername ='127.0.0.1';
$database ='mon_repas';
$username ='root';
$password ='Neymar11';
$name = $_POST['nom_ingredient'];
$conn = mysqli_connect($servername,$username,$password,$database);
$sql1 = $conn->query("SELECT nom FROM ingrédient;");
    while($row = $sql1->fetch_array()){
        if($name ===  $row['nom']){
            echo "<script>alert('Cet ingrédient existe dejà');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_ingredient.php');</script>";
        }   } 
        
if($conn->query("INSERT INTO ingrédient VALUES (NULL,'$name');") == TRUE){
        echo "<script>alert('l'ingrédient $name a été ajouté avec succes!');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/ajout_ingredient.php');</script>";
    }

?>
