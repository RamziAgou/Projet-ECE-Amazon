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

<?php
if($_SESSION['connected']==2){
	$connexion = 1;
}
else{
	$connexion = 0;
}
?>


<a class="navbar-brand" href="Accueil.php">ECE Amazon</a>

<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<?php

if($connexion && $_SESSION['image_connected']=="") echo '<li class="nav-item"><a class="nav-link" href="#">Bienvenue, '.$_SESSION['prenom_connected'].' '.$_SESSION['nom_connected'].'</li>';
else if($connexion && $_SESSION['image_connected']!="") echo '<li class="nav-item"><a class="nav-link" href="#">Bienvenue, '.$_SESSION['prenom_connected'].' '.$_SESSION['nom_connected'].' <img src='. $_SESSION['image_connected']. ' alt="Image non trouvée" height="30" width ="30"/></a></li>';

?>
<li class="nav-item"><a class="nav-link" href="ConnexionAdmin1.php">Admin</a></li>
<li class="nav-item"><a class="nav-link" href="ConnexionVendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link" href="#"><img src= "Panier.png" alt='Image non trouvée' height='30' width ='60'/></a></li>
<?php
if(!$connexion)echo '<li class="nav-item"><a class="nav-link" href="VotreCompte.php">Votre Compte</a></li>';
else if($connexion) echo '<li class="nav-item"><a class="nav-link" href="Deconnexion.php">Deconnexion</a></li>';
?>
</ul>
</div>

</nav>
	<title>Toutes les ventes</title>
	<form action="newvendeur1.php" method="post">
	<table>	
			<tr>
			 	<td><a href="ChoixAdmin.php"> 
				<img src="retour.jpg" alt ="retour" height="50" width ="50"></a></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value ="Ajouter un vendeur ?" />
				</td>
			</tr>
	</table>
	</form>
<?php

 //paire (utilisateur => mot de passe) stockés dans le serveur
 //on utilise 3 paires juste pour montrer un exemple
$database = "ECEAmazon";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );	//connect('serveur', 'login', 'passw'); Ca renvoie un entier 0 = pas de connexion
$db_found = mysqli_select_db($db_handle, $database);

//erreurs
$error = 0;

if ($db_found) {

$sql = "SELECT * FROM vendeur WHERE vendeur.Admin = FALSE";
$result = mysqli_query($db_handle, $sql);

error_reporting(0);
$suppvend = $_GET['Email'];
if($suppvend){
$sql2 = "DELETE FROM vendeur WHERE vendeur.Email LIKE '$suppvend'";
$result2 = mysqli_query($db_handle, $sql2);
}
if (mysqli_num_rows($result) != 0) {
if($error){

}
else{
	//Afficher toutes les ventes
	$result = mysqli_query($db_handle, $sql);
 	echo "<h3>Voici tous les vendeurs</h3>";
 	while ($data = mysqli_fetch_assoc($result)) {
	echo "Email: " . $data['Email'] . '<br>';
	echo "Pseudo: " . $data['Pseudo'] . '<br>';
	echo "Nom: " . $data['Nom'] . '<br>';
	echo "<img src= ".$data['Photo']." alt='Image non trouvée' height='60' width ='60'/>". '<br>';
	echo "<div id ='liste'><a href = 'AdminVendeur.php?Email=".$data['Email']." '>
		 <img src = 'suppression.png'height='50' width ='50'/> </a> </div><br>";
	}
	
}
}
else{//Informations saisies incorrectes
	echo "<h3>Il n'y a pas de vendeur.</h3>";
}
}
//si le BDD n'existe pas
else {
 echo "Database not found";
}

mysqli_close($db_handle);
?>
</body>
</html>