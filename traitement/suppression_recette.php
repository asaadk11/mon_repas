<?php
    $recette = $_POST['recette'];
    $servername ='127.0.0.1';
    $database ='mon_repas';
    $username ='root';
    $password ='Neymar11';
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error()."<br>");
    }
    if($conn->query("DELETE FROM recettes WHERE ID = $recette") == TRUE){
        echo "<script>alert('recette supprimé avec succes!');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/mon_repas/html/traitement_suppression_recette.php');</script>";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
?>