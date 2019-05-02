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
<li class="nav-item"><a class="nav-link" href="connexionvendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link" href="VotreCompte.php">Votre Compte</a></li>
<li class="nav-item"><a class="nav-link" href="#">Panier</a></li>
</ul>
</div>

</nav>
	<title>Création nouveau Vendeur</title>
	<form action="newvendeur.php" method="post">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"/></td>
			</tr>
			<tr>
			<tr>
				<td>Pseudo:</td>
				<td><input type="text" name="pseudo"/></td>
			</tr>
			<tr>
				<td>Mot de passe:</td>
				<td><input type="password" name="mdp"/></td>
			</tr>
			<tr>
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="nom"/></td>
			</tr>
			<tr>
			<tr>
				<td>Prénom:</td>
				<td><input type="text" name="prenom"/></td>
			</tr>
			<tr>
			<tr>
				<td>Photo:</td>
    			<td><input type="file" id="fond" name="photo" accept="image/png, image/jpeg"></td>
			</tr>
			<tr>
			<tr>
				<td>Fond:</td>
    			<td><input type="file" id="fond" name="fond" accept="image/png, image/jpeg"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Inscription"  />
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="page précédente" onclick="javascript:history.back()">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>