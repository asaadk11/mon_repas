<?php
    $ingrédient = $_POST['ingredient'];
    $servername ='127.0.0.1';
        $database ='mon_repas';
        $username ='root';
        $password ='Neymar11';
     $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error()."<br>");
    }
    if($conn->query("DELETE FROM ingrédient WHERE ID = $ingrédient") == TRUE){
        echo "<script>alert('ingrédient supprimé avec succes!');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/traitement_suppression_ingredient.php');</script>";
      } else {
        echo "Error " . $conn->error;
      }
?>