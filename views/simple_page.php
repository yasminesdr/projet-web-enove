
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel = "icon" href = "favicon.ico">
    <title>Produits</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-styleproduit.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
<body class="is-preload">
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
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
        <div id="main">
          <div class="inner">
            <!-- Header -->
            <header id="header">
              <div class="logo">
                  <img id="enove-logo" src="assets\images\logo-2-blanc.ico">
              </div>
            </header>
            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Simple Post -->            
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="diapo-p">
        <p class="item-1">This is your last chance. After this, there is no turning back.</p>
        <p class="item-2">Description 2</p>       
        <p class="item-3">Description 3 </p>
    </div>                    
                    <!-- Services -->
            <section class="services">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="service-item first-item">
                        <div class="icon"></div>
                        <a href="#datatable"> <h4>Industriels</h4></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="service-item second-item">
                        <div class="icon"></div>
                        <h4>Clôtures</h4>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="service-item third-item">
                        <div class="icon"></div>
                        <h4>Fiches Téchniques</h4>
                      </div>
                    </div>
                  </div>
                </div>             
                  </div>
                </div>
              </div>
            </section>
            <!-- recherche dans les produits -->
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
                                <th>Reference ENOVE</th>
                                <th>Reference IEC</th>
                                <th>Categorie du produit</th>
                                <th>Capacite en Amper/Heure <form  method="POST">
              <button  type="submit" name="ASC" value="ASC">↓</button>
              <button type="submit" name="DSC" value="DSC">↑</button>
            </form></th>
                                <th>Tension en Volts <form  method="POST">
              <button  type="submit" name="ASCT" value="ASCT">↓</button>
              <button type="submit" name="DSCT" value="DSCT">↑</button>
            </form></th>
                                <th>Poid en Kg <form  method="POST">
              <button  type="submit" name="ASCP" value="ASCP">↓</button>
              <button type="submit" name="DSCP" value="DSCP">↑</button>
            </form></th>
                                <th>Dimension Longueur*Largeur*hauteur</th>
                                <th>Prix du produit <form  method="POST">
              <button  type="submit" name="ASCPR" value="ASCPR">↓</button>
              <button type="submit" name="DSCPR" value="DSCPR">↑</button>
            </form></th>
                         <th>Fiche Technique</th>
						</tr>
                    </thead>
                    <tfoot>
                            <tr class="first_line">
                                    <th>Reference ENOVE</th>
                                    <th>Reference IEC</th>
                                    <th>Categorie du produit</th>
                                    <th>Capacite en Amper/Heure</th>
                                    <th>Tension en Volts</th>
                                    <th>Poid en Kg</th>
                                    <th>Dimension Longueur*Largeur*hauteur</th>
                                    <th>Prix du produit</th>
                                    <th>Fiche Technique</th>
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
  <td class="contenu2"><a href="#">commander</a></td>
	</form>
	</td>
	</tr>
	<?PHP
}
?>
</tbody>
</table>
          </div>
        </div>  
      <!-- Sidebar -->
        <div id="sidebar">
          <div class="inner">
            <!-- Menu -->
            <nav id="menu">
                <!-- Search Box -->
              <section id="search" class="alt">
                  <form method="get" action="#">
                    <input type="text" name="search" id="search" placeholder="Search..." />
                  </form>
                </section>
                <ul>
                  <li><a href="index.html">Présentation</a></li>
                  <li>
                    <a href="simple_page.php" >Produits</a>
                  </li>
                  <li>
                    <span class="opener">Dropdown Two</span>
                    <ul>
                      <li><a href="#">Sub Menu #1</a></li>
                      <li><a href="#">Sub Menu #2</a></li>
                      <li><a href="#">Sub Menu #3</a></li>
                    </ul>
                  </li>
                  <li><a href="https://www.groupebismuth.com/">Groupe Bismuth</a></li>
                </ul>
              </nav>
            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">Copyright &copy; 2019 Groupe Bismuth Enove
                <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Template Mo</a></p>
              </footer>
          </div>
        </div>
    </div>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
  </body>
</html>