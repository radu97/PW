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
								<p id="statistici">Potențialul turistic constituie o componentă esențială a ofertei turistice și o condiție indispensabilă a dezvoltării turismului. Prin dimensiunile și diversitatea elementelor sale, prin valoarea și originalitatea acestora, el reprezintă motivația principală a circulației turistice. Evaluarea corectă a componentelor sale, analiza posibilităților de valorificare eficientă a acestora presupune elaborarea unui sistem național și categorial adecvat care să permită conturarea unei strategii coerente a dezvoltării activității turistice. Atracția turistică este motivul fundamental și imboldul inițial al deplasării către o anumită destinație turistică. O zonă sau un teritoriu prezintă interes în măsura în care dispune de elemente de atracție a căror amenajare poate determina o activitate de turism. Din această perspectivă, potențialul turistic al unui teritoriu poate fi definit la modul general, prin ansamblul elementelor ce se constituie ca atracții turistice și care se pretează unei amenajări pentru vizitarea și primirea călătorilor. Turismul în România se concentrează asupra peisajelor naturale și a istoriei sale bogate, având de asemenea o contribuție importantă la economia țării. În 2006, turismul intern și internațional a asigurat 4,8% din PIB și aproximativ jumătate de milion de locuri de muncă (5,8% din totalul locurilor de muncă). După comerț, turismul este cea de-a doua ramură importantă din sectorul de servicii. Dintre sectoarele economice ale României, turismul este unul dinamic și în curs rapid de dezvoltare, fiind de asemenea caracterizat de un mare potențial de extindere. După estimările World Travel and Tourism Council, România ocupă locul 4 în topul țărilor care cunosc o dezvoltare rapidă a turismului, cu o creștere anuală a potențialului turistic de 8% din 2007 până în 2016. Numărul turiștilor a crescut de la 4,8 milioane în 2002, la 6,6 milioane în 2004. De asemenea, în 2005, turismul românesc a atras investiții de 400 milioane de euro. Stațiunea Neptun. În anul 2010, litoralul românesc a atras aproximativ 1,8 milioane de turiști, cu 15% mai puțini decât în 2009. Sunt numeroase agenții de turism din România și din alte țări care aduc turiști străini. Deasemenea turiști români și străini își pot face rezervări la hoteluri, moteluri, pensiuni și alte spații de cazare din țară și din alte țări direct pe siteurile specializate. În anul 2009, România a avut 1,27 milioane turiști străini iar în 2010 - 1,34 milioane. În anul 2004, numărul de turiști străini a fost de 3,6 milioane.</p>
							</div>
						</div> <!-- end col -->

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<nav class="btn-group-vertical nav-justified">
								<button type="button" class="btn btn-primary  btn-lg header" disabled="disabled">Cuprins</button>
								<a href="index.php#acasa" type="button" class="btn btn-primary">Introducere</a>
								<a href="istoric.php#istoric" type="button" class="btn btn-primary" >Istoric</a>
								<a href="zone.php#zone" type="button" class="btn btn-primary">Zone turistice</a>
								<a href="statistici.php#statistici" type="button" class="btn btn-primary active">Statistici</a>
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