<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>ECE Amazon</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="Accueil.css">

<script type="text/javascript">
$(document).ready(function(){
$('.header').height($(window).height());
});
</script>

</head>
<body>
	<nav class="navbar navbar-expand-md">

<a class="navbar-brand" href="Accueil.php">ECE Amazon</a>
<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
<li class="nav-item"><a class="nav-link" href="ConnexionVendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link" href="#">Panier</a></li>
<li class="nav-item"><a class="nav-link" href="VotreCompte.php">Votre Compte</a></li>
</ul>
</div>

</nav>

<div id="login">
        <h3 class="text-center text-black pt-5">Connectez vous à votre compte</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="ConnectionAcheteur.php" method="post">
                            <h3 class="text-center">Connexion</h3>
                            <?php
                                echo '<h6 class="text-center">'.$_SESSION['error_message'].'</h6>';
                            ?>
                            <div class="form-group">
                                <label for="email">Adresse email:</label><br>
                                <?php
                                if($_SESSION['error_message']!=""){
                                    echo '<input type="email" name="email" id="email" class="form-control" style="border-color:red">';
                                }
                                else{
                                    echo '<input type="email" name="email" id="email" class="form-control">';
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="Mdp">Mot de Passe:</label><br>
                                <?php
                                if($_SESSION['error_message']){
                                    echo '<input type="password" name="Mdp" id="Mdp" class="form-control" style="border-color: red">';     
                                }
                                else{
                                    echo '<input type="password" name="Mdp" id="Mdp" class="form-control">';
                                }
                                if($_SESSION['error_message']!=""){
                                    $_SESSION['error_message'] = "";
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-md" id="bouton" value="Connexion">
                            </div>
                            <br>
                            <div id="register-link" class="text-right">
                                <a href="NewAcheteur.html">Pas de compte ? Enregistrez vous</a>	
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>