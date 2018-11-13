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
							<li><a href="index.php">ACASĂ</a></li>
							<li><a href="harta.php">HARTĂ</a></li>
							<li><a href="http://amfostacolo.ro/harta-romania__15/banat__91/" target="blank">HARTĂ TURISTICĂ</a></li>
							<li><a href="http://www.turistinfo.ro/zona-transilvania/cazare-hoteluri-vile-pensiuni-zona-transilvania.html" target="blank">CAZARE</a></li>
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
				
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="white">
							<p id="acasa">
								<br>
<b><font size=6>Castelul Bran</b></font><br><br>
<font size=4>
<img src="galerie/bran.jpg" width=60%><br>
<p>
La fel ca si Castelul de la Hunedoara, cel de la Bran figureaza atat in topurile celor mai frumoase castele cat si in cele care enumera cele mai inspaimantatoare cladiri. 
Una dintre cele mai prestigioase pozitionari ale edificiului de la granita Transilvaniei cu Muntenia a fost intr-o selectie a celor mai frumoase zece castele din lume, 
realizata de Budget Travel si preluata de CNN, in ianuarie 2009. Atat administratorii Castelului Bran cat si Oficiul de Turism al Romaniei insista asupra legaturilor 
dintre Castelul Bran si Vlad Tepes, cel care a inspirat personajul Dracula al lui Bram Stoker. Poate ca aceste legaturi sunt subtiri, dar nimeni nu poate nega farmecul 
inspaimantator al numeroaselor turnuri si turnulete.<br><br>
</p>
<b><font size=6>Castelul Corvinilor</b></font><br><br>
<img src="galerie/corvin.jpg" width=60%><br>
<p>
Fortificatia medievala de la Hunedoara, transformata in timp intr-un castel nobiliar somptuos, a fost inclusa in august 2011 de Lonely Planet intr-un Top 10 al
 „castelelor de basm” din Europa. Castelul de la Hunedoara a fost clasat pe locul 8 in acest top, in care mai figureaza castelele din Praga, Neuschwanstein sau
 Malbork. „Daca nu simti un fior pe sira spinarii atunci cand te apropii de pod, cu raul spumegand dedesubt, inseamna ca iti lipseste glanda fricii: singurul motiv pentru 
care aici nu se mai gasesc vampiri este acela ca ei au fost mancati de varcolaci”, glumeau autorii topului pe seama infatisarii castelului hunedorean. De altfel, Castelul 
Corvinilor figureaza si in diverse clasamente ale celor mai inspaimantatoare cladiri din lume.<br><br>
</p>
<b><font size=6>Cheile Turzii</b></font><br><br>
<img src="galerie/chei.jpg" width=60%><br>
<p>
Seria de volume de calatorie editata in 2007 de National Geographic Traveler sub titlul „Calatorii pentru o viata – 500 de locuri unice”, include printre destinatiile 
selectate si Cheile Turzii. „La sud de Cluj incepe drumul care va poarta prin abruptele chei ale Turzii, pline de pesteri in care locuiau odinioara oameni, in zorii 
preistoriei, decorate cu turnuri naturale din piatra si cu arcade”, scriau autorii de la NG Traveler. In text se mai mentioneaza si ca microclimatul Cheilor Turzii este 
propice pentru nu mai putin de o mie de specii de plante, zona fiind „un paradis al speciilor rare de fluturi si pasari”.<br><br>
</p>
<b><font size=6>Creasta Făgărașului</b></font><br><br>
<img src="galerie/creasta.jpg" width=60%><br>
<p>
Prestigiosul cotidian britanic „The Guardian” a inclus, in august 2012, drumetiile in Muntii Fagaras intr-un Top 10 al activitatilor de vacanta in Europa. 
„Amatorii de drumetii care cauta o provocare mai putin conventionala nu trebuie sa priveasca mai departe de lantul muntos Fagaras. Muntii au o linie de creasta 
incredibila, oferind privelisti uimitoare asupra lacurilor glaciare si a vailor abrupte”, considera jurnalistii britanici. Alte activitati recomandate de jurnalistii de la
 „The Guardian” includ surfing in Algarve (Portugalia) sau cicloturism in Alpii francezi.<br><br>
</p>
<b><font size=6>Pădurea Hoia-Baciu</b></font><br><br>
<img src="galerie/padure.jpg" width=60%><br>
<p>
Ultima sosita in familia celebritatilor turistice transilvanene, padurea de la marginea Clujului, unde se crede ca au loc fenomene paranormale, a fost inclusa in octombrie 
2012 de revista americana „Travel+Leisure” pe lista celor mai „bantuite” paduri din lume, alaturi de locuri precum Padurea Neagra (Germania), Aokigahara (Japonia)
sau Wychwood Forest (Anglia). „Hoia-Baciu din Transilvania are o faima nedorita de mai bine de o jumatate de secol. Locuitorii din jurul ei sustin ca padurea – care 
are in centru o poiana de forma circulara – este un portal, iar cei care il trec nu se mai intorc niciodata. Cine supravietuieste povesteste ca pe timpul petrecut in padure 
a avut stari de agitatie si rau”, scrie revista americana.<br><br>
</p>
<b><font size=6>Sibiu și Mărginimea</b></font><br><br>
<img src="galerie/sibiu.jpg" width=60%><br>
<p>
Orasul de pe Cibin si zona inconjuratoare au figurat in 2008 in topul celor mai idilice zece orase ale Europei, realizat de celebra revista americana Forbes. 
„In imprejurimile orasului, practic, nu este niciun zgomot si nici poluare, iar localnicii isi calaresc in continuare caii. Este un minunat stil de viata nealterat”,  
declara la vremea respectiva, pentru Forbes, Ala Osmond, directoarea Exeter International, o companie din SUA care organizeaza trasee turistice in Europa. 
Sibiul a devansat in acel top Roma. Pe primele doua locuri au fost plasate zone din Toscana, respectiv Provence.<br><br>
</p>
<b><font size=6>Transfăgărășanul</b></font><br><br>
<img src="galerie/trans.jpg" width=60%><br>
<p>
A doua cea mai inalta sosea din Romania apare in mod constant in topurile celor mai frumoase drumuri. Realizatorii emisiunii „Top Gear” au declarat-o in 2009 cea 
mai frumoasa sosea din lume, iar un an mai tarziu site-ul de specialitate carsroute.com o plasa tot pe locul 1, intr-un Top 15 al celor mai frumoase drumuri din lume. 
De asemenea, site-ul motorbikeeurope.com considera Transfagarasanul cea mai buna sosea pentru motociclete de pe continent.<br><br>

<b><font size=6>Viscri</b></font><br><br>
<img src="galerie/viscri.jpg" width=60%><br>
<p>
Ajuns celebru, la fel ca si Valea Zalanului, dupa ce Printul Charles a cumparat aici o casa, satul sasesc care adaposteste o biserica fortificata inscrisa in Patrimoniul 
UNESCO a fost inclus de revista „Travel+Leisure” pe lista celor 25 de „sate secrete” din Europa. „Perii sun replantati, fieraria are un magazin nou, iar un drum de-a 
lungul caselor pastelate din caramida le ofera vizitatorilor – si elitei filantropice – o privire asupra modului traditional de viata sasesc”, mentiona revista in numarul din 
aprilie 2010. Alaturi de satele Slavonice, din Cehia, Koguva, din Estonia, Plios, din Rusia, si de oraselul Kotor, din Muntenegru, Viscri a facut parte din minoritatea de 
localitati est-europene incluse in aceasta selectie, restul aflandu-se in vestul continentului sau in Grecia.<br>
</p>
							</p>
						</div>
					</div> <!-- end col -->
				</div> <!-- end row -->
				<br>
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