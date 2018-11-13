<!DOCTYPE html>
<html lang="ro-RO">
	<head>
		
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<title>Turism romanesc</title>
		<meta name="description" content="Turism in Romania">
		<meta name="keywords" content="turism, Romania, Banat, Crisana, Transilvania, Moldova, Maramures, Oltenia, Muntenia, Dobrogea">
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		

		
		
	</head>
	<body>
		<!-- cotainer-fluid -->
		<div class="container">
			
			<div class="panel panel-primary">
				<?php
				//LOGAT
				include 'forum/connect.php';
				//$_SESSION['signed_in']=false;
				if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
					//if($_SERVER['REQUEST_METHOD'] == 'POST')
						
					echo
				'<nav class="navbar navbar-inverse">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Destinații turistice în România</a>
					</div> <!--end navbar-header -->
					<div id="navbar" class="navbar-collapse collapse">
						<div class="navbar-form navbar-right" >
							<div class="form-group">
									<font size="4" color="white">';
									 $user=$_SESSION['user_name'];
									 echo "Hello, " . $user;
									echo '</font>
							</div>
							<form class="btn" action="signout.php" method="post">
							<button type="submit" class="btn btn-success">Sign out</button>
							</form>
						</div>
					</div> <!--end navbar-collapse -->
					
				</nav> <!--end navbar -->';
				}
				
				//NELOGAT
				else{
					//$_SESSION["signed_in"]=false;
				echo '<nav class="navbar navbar-inverse">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Destinații turistice în România</a>
					</div> <!--end navbar-header -->
					<div id="navbar" class="navbar-collapse collapse">
						<form class="navbar-form navbar-right" action="login.php" method="post">
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control" name="user_name">
							</div>
							<div class="form-group">
								<input type="password" placeholder="Password" class="form-control" name="user_pass">
							</div>
							<button type="submit" class="btn btn-success">Sign in</button>
						</form>
					</div> <!--end navbar-collapse -->
					
				</nav> <!--end navbar -->';
				}
				?>
				
				
				
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">ACASĂ</a></li>
							<li><a href="harta.php">HARTĂ</a></li>
							<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">CAZARE<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://www.turistinfo.ro/zona-banat/cazare-hoteluri-vile-pensiuni-zona-banat.html" target=blank>Banat</a></li> 
									<li><a href="http://www.turistinfo.ro/zona-transilvania/cazare-hoteluri-vile-pensiuni-zona-transilvania.html" target="blank">Transilvania</a></li> 
									<li><a href="http://www.turistinfo.ro/zona-moldova/cazare-hoteluri-vile-pensiuni-zona-moldova.html" target="blank">Moldova</a></li> 
									<li><a href="http://www.turistinfo.ro/zona-crisana/cazare-hoteluri-vile-pensiuni-zona-crisana.html" target="blank">Crișana</a></li>  
									<li><a href="http://www.turistinfo.ro/zona-maramures/cazare-hoteluri-vile-pensiuni-zona-maramures.html" target="blank">Maramureș</a></li> 
									<li><a href="http://www.turistinfo.ro/zona-oltenia/cazare-hoteluri-vile-pensiuni-zona-oltenia.html" target="blank">Oltenia</a></li> 
									<li><a href="http://www.turistinfo.ro/zona-muntenia/cazare-hoteluri-vile-pensiuni-zona-muntenia.html" target="blank">Muntenia</a></li> 
									<li><a href=http://www.booking.com/searchresults.ro.html?region=2739&tfl_cwh=1" target="blank">Dobrogea</a></li>
								</ul>
							</li>
							<li><a href="galerie.php">GALERIE</a></li>
							<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">FORUM<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="forum/index.php">Postari</a></li>
									<li><a href="forum/create_topic.php">Creare topic</a></li>
									<li><a href="forum/create_cat.php">Creare categorie</a></li>
								</ul>
						</ul>
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div> <!-- end container-fluid -->
				</nav><!-- end navbar -->
				
				<!-- BEGIN AUTOMATIC-IMAGE-CAROUSEL Script -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="imag1.jpg" alt="poza1">
						</div>
						<div class="item">
							<img src="imag2.jpg" alt="poza2">
						</div>
						<div class="item">
							<img src="imag3.jpg" alt="poza3">
						</div>
					</div>
				
				</div> <!-- END AUTOMATIC-IMAGE-CAROUSEL Script -->
				<br>
				<div class="row">
					
					
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="white">
								<p id="istoric">Elementele ale turismului colectiv în România sunt atestate documentar în trecut, când a apărut turismul balnear, acesta fiind menționat în localitățile Băile Felix în secolul al XV-lea, Ivanda și Lipova în secolul al XVI-lea, Bazna în secolul al XVII-lea, Băile Herculane în anul 1734, Olănești în 1760, Borsec în 1770, Vatra Dornei în 1788. În secolul al XIX-lea, se dezvoltă stațiunile balneoclimaterice existând 23 de stațiuni de interes general, 78 de interes local și 38 de localități cu izvoare minerale. Primele activități turistice organizate în România datează din a doua parte a secolului al XIX-lea. Au apărut o serie de asociații, organizații, societăți, cluburi etc. care desfășurau activitate turistică pe unele arii geografice, căutând să atragă turiști din toate păturile sociale și care sponsorizau de asemenea amenajarea unor obiective turistice. Aceste asociații și organizații de turism din România și-au desfășurat activitatea înainte de primul război mondial și în perioada interbelică. Preocuparea acestor asociații de profil s-a îndreptat la început spre zonele montane prin construirea de cabane și case de adăpost (refugii), amenajări de drumuri, poteci, marcaje, precum și organizarea de cursuri de schi, publicarea de monografii turistice, almanahuri, ghiduri, hărți etc.</p>

								<p>În perioada postbelică, prima organizație de turism pe baze economico-sociale, a fost Turismul Popular (1948-1950), care apoi devine Federația de Turism Alpin. În 1957 se constituie Asociația Turiștilor din România, iar în 1968 Biroul de Turism pentru Tineret(BTT). Asociațiile de turism existente, au fost dizolvate la 11 iunie 1948, iar patrimoniul acestora a trecut la Oficiul Național de Turism (ONT). România a fost singura țară din blocul sovietic ce a dizolvat asociațiile și organizațiile de turism. În 1971, se înființează Ministerul Turismului și Sporturilor, for de conducere, îndrumare și coordonare organizatorică, căruia îi sunt subordonate oficiile județene de turism. Pe lângă modernizarea și transformarea vechilor stațiuni balneoclimaterice, apar și altele noi ca Mangalia Nord, Năvodari, Voineasa, Costinești, Bâlea Lac, Durău, Piatra Arsă. Între anii 1976-1980, direcțiile prioritare de dezvoltare a turismului s-au orientat spre valorificarea stațiunilor montane, dezvoltarea stațiunilor balneoclimaterice și modernizarea stațiunilor de pe litoral. Sunt amenajate mijloace moderne de transport pe cablu: telecabine, telescaune, teleschiuri. În 1982, turismul din România cuprindea peste 155000 de locuri pe litoral, peste 38000 de locuri în stațiunile montane, aproape 45000 de locuri în stațiunile balneoclimaterice și aproximativ 20000 în cabane și alte forme de găzduire.</p>
							</div>
						</div> <!-- end col -->

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<nav class="btn-group-vertical nav-justified">
								<button type="button" class="btn btn-primary  btn-lg header" disabled="disabled">Cuprins</button>
								<a href="index.php#acasa" type="button" class="btn btn-primary">Introducere</a>
								<a href="istoric.php#istoric" type="button" class="btn btn-primary active" >Istoric</a>
								<a href="zone.php#zone" type="button" class="btn btn-primary">Zone turistice</a>
								<a href="statistici.php#statistici" type="button" class="btn btn-primary">Statistici</a>
							</nav> <!-- end btn-group-vertical -->
							<div class="white">
								<div><h3>Știați că...</h3>
								<p> ...cele mai calde ape termale (56°C) se găsesc în împrejurimile oraşului Băile Herculane?</p>
								<p>...valoarea record a temperaturii maxime absolute a fost de 44,5 °C şi s-a înregistrat la 10 august 1951, la ferma Ion Sion, comuna Râmnicelu, în Câmpia Brăilei?</p>
								<p>...recordul temperaturii minime absolute a fost de -38,5 °C, înregistrat la 24 ianuarie 1942, în cea mai geroasă lună a secolului XX, la Bod, lângă Braşov?</p>
								<p>...cel mai lung râu este Mureşul: 768 km?</p>
								<p>...oraşul situat la cea mai mare altitudine este Predeal (1060m), aflat pe Valea Prahovei?</p>
								</div>
							</div>
						</div> <!-- end col -->
				
				</div> <!-- end row -->
				
				<div class="panel-footer">
				  <h6>&copy; 2016 Sîrbu Radu - An 3 CTI. All rights reserved.</h6>
				</div> <!-- end panel-footer -->
		
			</div> <!-- end panel -->
			
		</div> <!-- end container -->
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	</body>
</html>