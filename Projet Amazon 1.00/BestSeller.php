<div id="BestSeller">
  <div id="CateHeader">
    <h2 style="color: red">Nos Best Sellers</h2>
  </div>

	 <?php
		$tab1 = array("");
    $tab5 = array("");
		$sql = "SELECT * FROM item WHERE Categorie LIKE 'Vetement' ORDER BY Vendu DESC ";
		$result = mysqli_query($db_handle, $sql);

		while ($data = mysqli_fetch_assoc($result)) {
			array_push($tab1, $data['Photo']);
      array_push($tab5, $data['Nom']);

		}

		echo '
		<div id="Seller1" class="carousel slide col-md-3" data-ride="carousel">
      <h3>Vêtements</h3>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
            <a href="itemrecherche.php?q='.$tab5[1].'">
      			<img src="'.$tab1[1].'" alt="..." width = "260" height ="200">
            </a>
    		</div>
    		<div class="carousel-item">
      			<a href="itemrecherche.php?q='.$tab5[2].'">
            <img src="'.$tab1[2].'" alt="..." width = "260" height ="200">
            </a>
    		</div>
    		<div class="carousel-item">
      			<a href="itemrecherche.php?q='.$tab5[3].'">
            <img src="'.$tab1[3].'" alt="..." width = "260" height ="200">
            </a>
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#Seller1" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="false"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#Seller1" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="false"></span>
    		<span class="sr-only">Next</span>
  		</a>
    </div>';
	?>
  

   <?php
    $tab2 = array("");
    $tab6 = array("");
    $sql = "SELECT * FROM item WHERE Categorie LIKE 'Sport et Loisir' ORDER BY Vendu DESC ";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      array_push($tab2, $data['Photo']);
      array_push($tab6, $data['Nom']);
    }

    echo '
    <div id="Seller2" class="carousel slide col-md-3" data-ride="carousel">
      <h3>Sports et Loisir</h3>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="itemrecherche.php?q='.$tab6[1].'">
            <img src="'.$tab2[1].'" width = "260" height ="200">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab6[2].'">
            <img src="'.$tab2[2].'" width = "260" height ="200">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab6[3].'">
            <img src="'.$tab2[3].'"width = "260" height ="200">
        </div>
      </div>
      <a class="carousel-control-prev" href="#Seller2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#Seller2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>';
  ?>

  <?php
    $tab3 = array("");
    $tab7 = array("");
    $sql = "SELECT * FROM item WHERE Categorie LIKE 'Musique' ORDER BY Vendu DESC ";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      array_push($tab3, $data['Photo']);
      array_push($tab7, $data['Nom']);
    }

    echo '
    <div id="Seller3" class="carousel slide col-md-3" data-ride="carousel">
      <h3>Musique</h3>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="itemrecherche.php?q='.$tab7[1].'">
            <img src="'.$tab3[1].'" alt="..."width = "260" height ="200">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab7[2].'">
            <img src="'.$tab3[2].'" alt="..."width = "260" height ="200">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab7[3].'">
            <img src="'.$tab3[3].'"  alt="..."width = "260" height ="200">
        </div>
      </div>
      <a class="carousel-control-prev" href="#Seller3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#Seller3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>';
      ?>

      <?php
    $tab4 = array("");
    $tab8 = array("");
    $sql = "SELECT * FROM item WHERE Categorie LIKE 'Livres' ORDER BY Vendu DESC ";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      array_push($tab4, $data['Photo']);
      array_push($tab8, $data['Nom']);
    }

    echo '
    <div id="Seller4" class="carousel slide col-md-3" data-ride="carousel">
      <h3>Livres</h3>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="itemrecherche.php?q='.$tab8[1].'">
            <img src="'.$tab4[1].'" width = "260" height ="200" alt="...">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab8[2].'">
            <img src="'.$tab4[2].'" width = "260" height ="200" alt="...">
        </div>
        <div class="carousel-item">
            <a href="itemrecherche.php?q='.$tab8[3].'">
            <img src="'.$tab4[3].'" width = "260" height ="200"alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#Seller4" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#Seller4" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>';
      ?>

</div>