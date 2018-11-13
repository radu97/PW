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
							<li><a href="http://www.booking.com/searchresults.ro.html?region=2739&tfl_cwh=1" target="blank">CAZARE</a></li>
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
<b><font size=6>Stațiunea Mamaia</b></font><br><br>
<font size=4>
<img src="galerie/mamaia.jpg" width=60%><br>
<p>
MAMAIA este cea mai renumita statiune de pe Litoralul Romanesc si cea mai mare din taradupa numarul locurilor de cazare pe care le ofera. Situata la N de Constanta intre Marea Neagra si Lacul Siutghiol(cunoscut mai ales ca Lacul Mamaia), este statiunea de pe litoral cu cea mai mare capacitate de cazare, creata pe cordonul de nisip ce separa Lacul Siutghiol-un fost golf, de mare. Mamaia este o statiune cu o dezvoltare foarte dinamica, in ultimii ani construindu-se cateva hoteluri noi, restaurante sau complexe de magazine. In fiecare an turistii s-au obisnuit cu faptul ca Statiunea Mamaia ii intampina cu ceva nou - palmieri, Aqua Magic, fantani arteziene, Telegondola, autobuze supraetajate etc.<br><br>
</p>
<b><font size=6>Cetatea Histria</b></font><br><br>
<img src="galerie/histria.jpg" width=60%><br>
<p>
Cetatea greceasca Histria a fost cel mai vechi oras atestat de pe actualul teritoriu al Romaniei. In prezent, ruinele sale se afla pe teritoriul administrativ al comunei Istria, in judetul Constanta.
La inceputul anilor '20 a fost construit primul muzeu arheologic (de sit) de la Histria, fiind proiectat de arhitectul G. Simotta, in vremea directoratului lui Vasile Parvan. Din cauza terenului slab, prost ales, in anul 1923 cladirea s-a daramat, fiind ulterior demolata definitiv din ordinul directorului Muzeului National de Antichitati, Vasile Parvan.
Actualul muzeu a fost infiintat in 1982, in subordinea Muzeului de Istorie Nationala si Arheologie din Constanta, intr-o cladire noua. In Muzeul Arheologic Histria sunt expuse piese de arheologie greaca, romana si bizantina, provenind din cercetarile de la Histria si din imprejurimi: amfore, inscriptii, vase ceramice, sticla, opaite, podoabe, basoreliefuri elenistice, documente epigrafice.<br><br>
</p>
<b><font size=6>Delta Dunării</b></font><br><br>
<img src="galerie/delta.jpg" width=60%><br>
<p>
Delta Dunarii este limitata la sud-vest de podisul Dobrogei, la nord formeaza granita cu Ucraina, iar in est se varsa in Marea Neagra. Delta Dunarii este traversata de paralela de 45°, latitudine N si de meridianul de 29°, longitudine E. Delta ocupa, impreuna cu complexul lagunar Razim - Sinoe 5050 km², din care 732 km² apartin Ucrainei, Deltei romanesti revenindu-i o suprafata de 2540 km². Datorita celor 67 milioane de tone aluviuni aduse de Dunare, Delta Dunarii creste anual cu aprox. 40 m².
Dunarea ajunsa la Patlageanca se bifurca in doua brate, Bratul Chilia la nord si Bratul Tulcea la sud, brat care mai apoi la Ceatal Sfantu Gheorghe, se desparte in Bratul Sulina si Bratul Sfantul Gheorghe.
Bratul Chilia, formeaza granita cu Ucraina, si transporta pe cursul sau de o lungime de 104 km², 60% din apele si aluviunile Dunarii.
Bratul Sulina este situat in mijlocul Deltei, si spre deosebire de Chilia, are un curs rectiliniu, fiind permanent dragat si intretinut pentru navigatia vaselor maritime. Are o lungime de 71 km si transporta 18% din volumul de apa al Dunarii.
Cursul Bratului Sfantul Gheorghe este orientat spre sud-est, si se desfasoara pe 112 km, transportand 22% din debitul Dunarii. La varsare formeaza insulele Sacalin considerate un inceput de delta secundara.
Delta Dunarii (cu exceptia deltei secundare a bratului Chilia) face traditional parte din Dobrogea, dar in Antichitate si Evul Mediu, litoralul se afla mult mai la apus (intre Chilia Veche si Murighiol pe vremea lui Strabon, intre Periprava si Lacul Dranov in epoca bizantina), astfel incat hartile istorice care reprezinta Dobrogea cuprinzand toata Delta actuala, sunt geomorfologic false.<br><br>
</p>
<b><font size=6>Stațiunea Techirghiol</b></font><br><br>
<img src="galerie/techirghiol.jpg" width=60%><br>
<p>
Situata in judetul Constant, Statiunea Techirghiol este cunoscuta prin faptul ca aici se gaseste un namol cu proprietati vindecatoare reale a multor afectiuni severe sau mai usoare.
Orasul este situat pe malul lacului Techirghiol, la 16 km de Constanta si 3 km distanta de Marea Neagra.
Din punct de vedere geografic, al tipului de lac, acesta este un liman maritim, format prin bararea gurii de varsare a unui mic rau dobrogean de catre un cordon de nisip format de curentii marini si de valuri.Salinitatea sa, candva foarte mare, a scazut din cauza irigatiilor din zona si a infiltrarilor in apa lacului, ceea ce afecteaza si calitatea namolului.
Lacul Techirghiol( tekir= magar, ghiol=lac) este cunoscut pentru calitatile apei sarate si a namolului sapropelic, folosit in tratarea diferitelor afectiuni.<br><br>
</p>
<b><font size=6>Stațiunea Eforie Sud</b></font><br><br>
<img src="galerie/eforiesud.jpg" width=60%><br>
<p>
Eforie Sud este o localitate in judetul Constanta, Dobrogea, Romania, parte si centru administrativ al orasului Eforie. Inainte de Al Doilea Razboi Mondial localitatea s-a numit Carmen Sylva (pseudonimul literar al reginei Elisabeta, 1843-1916). Intre 1950-1962, localitatea a purtat numele "eroului" ceferist Vasile Roaita. Abia in 1962, in cadrul marii operatiuni de destalinizare la nivel simbolic, localitatea a primit numele Eforie Sud. Localitatea Eforie Sud a fost infiintata de Ioan Movila, un boier din partile Moldovei, la 1899, atunci cand s-a pus piatra de temelie a hotelului Movila. La inceput statiunea a purtat numele de Baile Techirghiol-Movila, mai apoi Baile Movila sau Techirghiol-Movila.
Atractia principala a statiunii o reprezinta "Baile Reci" cu namol, complet modernizate. In Eforie Sud exista si un Sanatoriu pentru copii cu afectiuni reumatologice cu regim permanent, care trateaza in principal slabiciunea fizica si rahitismul.
Statiunea se distinge printr-un promontoriu de calcar si prin faleza de la a carei inaltime de 25-35 m se deschide o splendida panorama. Nu lipsesc nici discotecile, un teatru in aer liber, bazele de agrement si posibilitatile de practicare a sporturilor nautice. Si mai ales nu lipsesc florile, care uimesc prin multimea lor, raspandind un aer de prospetime.
La Eforie Sud sunt, de asemenea,stabilimente pentru bai calde cu apa din lac si impachetari cu namol,sanatoriu de recuperare si ortopedie, un altul cu profil de debilitate si rahitism. Statiunea dispune de teatru de vara,cinematografe, terenuri de sport, peste 35 de hoteluri, vile, popas turistic.<br><br>
</p>
<b><font size=6>Mănăstirea Sfânta Maria</b></font><br><br>
<img src="galerie/maria.jpg" width=60%><br>
<p>
Manastirea Techirghiol, din statiunea balneara Techirghiol, isi are inceputul in anul 1928, cand patriarhul Miron Cristea cumpara aici o casa cu 16 camere. Aici, patriarhul a infiintat un sanatoriu preotesc, deservit de cateva monahii, pentru clerul din intreaga tara.<br><br>
</p>
<b><font size=6>Muzeul de Arheologie - Mangalia</b></font><br><br>
<img src="galerie/muzeu.jpg" width=60%><br><br>
<p>
Muzeul expune descoperiri arheologice din Mangalia si imprejurimi (datand din preistorie si din perioada greco-romana): vase, amfore, recipiente de sticla, tuburi de apeducte si canalizari, mozaicul unei incaperi de epoca elenistica, colectie numismatica, inventarul Mormantului cu papirus, statuete de Tanagra, basoreliefuri. Detine bunuri culturale clasate in Tezaurul patrimoniului cultural national.<br><br>
</p>

<b><font size=6>Munții Măcinului</b></font><br><br>
<img src="galerie/macin.jpg" width=60%><br>
<p>
Muntii Macin se desfasoara sub forma unor culmi paralele orientate NV-SE si asezate in cotul pronuntat pe care Dunarea il face in nord-vestul judetului Tulcea (Cotul Pisicii).
Limita de nord este marcata de Dunare, pana la care se interpun lacurile Jijila si Crapina si baltile dintre ele. Limita de est o constituie vaile Luncavita si Taita cu Pasul Teilor si localitatile Luncavita, Nifon, Hamcearca si Balabancea de pe acestea. Limita de sud se situeaza la culoarul depresionar in care se gasesc localitatile Traian, Mircea Voda, Horia, culoar ce desparte muntii de podisul Babadagului prin Pasul Carapelit sau Iaila. Limita de vest a muntilor o formeaza, ca si la nord, Dunarea, prin bratul Macin, ce-i separa de Balta Brailei.<br>
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