<HTML>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="stylebo.css">
<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<body>
  <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
		<header class="header-section">
			</a>
		
		<nav class="header-nav">
				<form action="POST">
			<ul class="main-menu">
				<li><a href="../views/index.html" >Home</a></li>
				<li><a href="about-us.html">Gestion Client</a></li>
				<li><a href="afficherProduit.php" class="active">Gestion des Produits</a></li>
        <li><a href="afficherCategorie.php">Gestion des Categories</a></li>
				<li><a href="contact.html">Gestion Commande & panier</a></li>
				<li><a href="contact.html">Gestion Livraison</a></li>
				<li><a href="contact.html">Gestion d'événement</a></li>
			</ul>
		</form>
			<div class="header-right">
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
	
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduit();
if(isset($_POST['ASC']) or isset($_POST['DSC']) or isset($_POST['ASCT']) or isset($_POST['DSCT']) or isset($_POST['ASCP']) or isset($_POST['DSCP']) or isset($_POST['ASCPR']) or isset($_POST['DSCPR']) or isset($_POST['touv']) or isset($_POST['Batterie']) or isset($_POST['Pile']) or isset($_POST['touv1']) or isset($_POST['CAP']) or isset($_POST['touv2']) or isset($_POST['TENS1']) or isset($_POST['touv3']) or isset($_POST['POID']) or isset($_POST['touv4']) or isset($_POST['Prixp']))
{
  if(isset($_POST['DSC']))
  {
    $listeProduits=$produit1C->orderltoh();
  }
  else if(isset($_POST['ASC']))
  {
    $listeProduits=$produit1C->orderhtol();
  }
  else if(isset($_POST['ASCT']))
  {
    $listeProduits=$produit1C->orderhtolT();
  }
  else if(isset($_POST['DSCT']))
  {
    $listeProduits=$produit1C->orderltohT();
  }
  else if(isset($_POST['ASCP']))
  {
    $listeProduits=$produit1C->orderhtolP();
  }
  else if(isset($_POST['ASCPR']))
  {
    $listeProduits=$produit1C->orderhtolPR();
  }
  else if(isset($_POST['DSCP']))
  {
    $listeProduits=$produit1C->orderltohP();
  }
  else if(isset($_POST['DSCPR']))
  {
    $listeProduits=$produit1C->orderltohPR();
  }
  else if(isset($_POST['Batterie']))
  {
    $listeProduits=$produit1C->rechercherCategorie($_POST['Batterie']);
  }
  else if(isset($_POST['Pile']))
  {
    $listeProduits=$produit1C->rechercherCategorie($_POST['Pile']);
  }
  else if(isset($_POST['touv']))
  {
    if(($_POST['reech'] == "") and ($_POST['CAP'] == ""))
    {
      $listeProduits=$produit1C->afficherProduit();
    }
    else
    {
      $listeProduits=$produit1C->rechercherListeC($_POST['reech']);
    }
  }
  else if(isset($_POST['touv1']))
  {
    if(($_POST['CAP'] == "") and ($_POST['reech'] == ""))
    {
      $listeProduits=$produit1C->afficherProduit();
    }
    else
    {
      $listeProduits=$produit1C->rechercherCap($_POST['CAP']);
    }
  }
  else if(isset($_POST['touv2']))
  {
    if(($_POST['CAP'] == "") and ($_POST['reech'] == "") and ($_POST['TENS1'] == "") )
    {
      $listeProduits=$produit1C->afficherProduit();
    }
    else
    {
      $listeProduits=$produit1C->rechercherTension($_POST['TENS1']);
    }
  }

  else if(isset($_POST['touv3']))
  {
    if(($_POST['CAP'] == "") and ($_POST['reech'] == "") and ($_POST['TENS1'] == "") and ($_POST['POID'] == ""))
    {
      $listeProduits=$produit1C->afficherProduit();
    }
    else
    {
      $listeProduits=$produit1C->rechercherPoid($_POST['POID']);
    }
  }

  else if(isset($_POST['touv4']))
  {
    if(($_POST['CAP'] == "") and ($_POST['reech'] == "") and ($_POST['TENS1'] == "") and ($_POST['POID'] == "") and ($_POST['Prixp'] == ""))
    {
      $listeProduits=$produit1C->afficherProduit();
    }
    else
    {
      $listeProduits=$produit1C->rechercherPrix($_POST['Prixp']);
    }
  }
  
}
else
{
  $listeProduits=$produit1C->afficherProduit();
}

?>

<div class="container">
	
	<div class="row">
		<h2 class="text-center">BD-ENOVE-PRODUIT</h2>
	</div>
	<div class="row">
            <div class="col-md-12">
			<form class="search-container" method="POST">
      <center> <button name="Batterie" value="Batterie">Batterie</button> <button name="Pile" value="Pile">Pile</button> <br></center>
              <input type="text" name="reech" id="search-bar" placeholder="saisir la Reference"> <button name="touv" value="touv">Rech</button> 
              <input type="number" name="CAP" id="search-bar1" placeholder="saisir la Capacite"> <button name="touv1" value="touv1">Rech</button>
              <input type="number" name="TENS1" id="search-bar2" placeholder="saisir la Tension"> <button name="touv2" value="touv2">Rech</button>
              <input type="number" step="any" name="POID" id="search-bar3" placeholder="saisir le Poid"> <button name="touv3" value="touv3">Rech</button>
              <input type="number" step="any" name="Prixp" id="search-bar4" placeholder="saisir le Prix"> <button name="touv4" value="touv4">Rech</button>
            </form>
			<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr class="first_line">
                                <th>Image du Produit</th>
                                <th>Reference ENOVE</th>
                                <th>Reference IEC</th>
                                <th>Categorie du produit</th>
                                <th>Capacite en Amper/Heure
                                <form  method="POST">
              <button  type="submit" name="ASC" value="ASC">></button>
              <button type="submit" name="DSC" value="DSC"><</button>
            </form></th>
                                <th>Tension en Volts
                                <form  method="POST">
              <button  type="submit" name="ASCT" value="ASCT">></button>
              <button type="submit" name="DSCT" value="DSCT"><</button>
            </form>
                                </th>
                                <th>Poid en Kg
                                <form  method="POST">
              <button  type="submit" name="ASCP" value="ASCP">></button>
              <button type="submit" name="DSCP" value="DSCP"><</button>
            </form>
                                </th>
                                <th>Dimension Longueur*Largeur*hauteur</th>
                                <th>Prix du produit
                                <form  method="POST">
              <button  type="submit" name="ASCPR" value="ASCPR">></button>
              <button type="submit" name="DSCPR" value="DSCPR"><</button>
            </form>
                                </th>
                                <th>Fiche Technique</th>
                                <th>Cloture ou industriel</th>
                                <th>modifier</th>
                                <th>supprimer</th>
						</tr>
                    </thead>
                    <tfoot>
                            <tr class="first_line">
                                    <th>Image du Produit</th>
                                    <th>Reference ENOVE</th>
                                    <th>Reference IEC</th>
                                    <th>Categorie du produit</th>
                                    <th>Capacite en Amper/Heure</th>
                                    <th>Tension en Volts</th>
                                    <th>Poid en Kg</th>
                                    <th>Dimension Longueur*Largeur*hauteur</th>
                                    <th>Prix du produit</th>
                                    <th>Fiche Technique</th>
                                    <th>Cloture ou industriel</th>
                                    <th>modifier</th>
                                    <th>supprimer</th>
                            </tr>
                        </tfoot>

<?PHP
foreach($listeProduits as $row){
	?>
	<tbody>
	<tr>
  <td class="contenu2"> <a href="../entities/img/<?PHP echo $row['IM_P']; ?>" target="_blank">
  <img src="../entities/img/<?PHP echo $row['IM_P']; ?>">
  </a></td>
	<td class="contenu2"><?PHP echo $row['REF_EN']; ?></td>
	<td class="contenu2"><?PHP echo $row['REF_IEC']; ?></td>
	<td class="contenu2"><?PHP echo $row['Cat']; ?></td>
	<td class="contenu2"><?PHP echo $row['CAPACITY_Ah']; ?></td>
	<td class="contenu2"><?PHP echo $row['TENSION_V']; ?></td>
	<td class="contenu2"><?PHP echo $row['POID_KG']; ?></td>
	<td class="contenu2"><?PHP echo $row['DIM_mm']; ?></td>
  <td class="contenu2"><?PHP echo $row['Prixp']; ?></td>
	<td class="contenu2"><a href="../entities/fichetechnique/<?PHP echo $row['FT']; ?>" target="_blank"><?PHP echo $row['FT']; ?> </a> </td>
  <td class="contenue2"><?php echo $row['NOM_C']; ?></td>
	
	<td><a href="modifierProduit.php?REF_EN=<?PHP echo $row['REF_EN']; ?>"> <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
	
	<td>
	<form method="POST" action="supprimerProduit.php">
	<button type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
	<input type="hidden"  value="<?PHP echo $row['REF_EN']; ?>" name="REF_EN" >
	</form>
	</td>
	</tr>
	<?PHP
}
?>
<a href="ajoutProduit.html">Ajouter</a>
</tbody>
</table>
</body>
</HTMl>