
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>Mon repas</title>
		<link rel="stylesheet" href="../css/login.css"/>
		<link rel="icon" type="image/png" sizes="18x18" href="../images/logo.png">
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    
    
    <body>
	<div class="page-header">
                <a href="login.php" id="retour à la page d'accueuil" ><img class="logo"
                src="../images/logo.png" alt="Logo Mon Repas"></a>
                <a href="https://github.com/asaadk11" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../images/github.png" alt="Logo GitHub"></a>
                <p id="titre" class="display-6"  >Mon repas</p>
            </div>
   
    <img src="../images/repas.jpg" class="repas_img" style="font-size:9vw">
        <div class="form">
    <form method="post" action="../traitement/login.php">
    <h2><b>Login</b></h2>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="e-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemple@mail.com">
 </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="********">
  </div>
  
  <a href="mdp_oublie.html" class="mdp" >mot de passe oublié ?</a> <br> 
  <a href="inscription.html" class="bout1"><b>Pas encore inscrit? Créer votre compte.</b>  </a>
  <br />
  <br />
  <button type="submit" class="btn btn-primary">LOG IN</button>
  
     </form>
     </div>
     
    </body>
</html>