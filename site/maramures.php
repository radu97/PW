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
							<li><a href="http://www.turistinfo.ro/zona-maramures/cazare-hoteluri-vile-pensiuni-zona-maramures.html" target="blank">CAZARE</a></li>
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
<b><font size=6>Salina Turda</font><br><br></b>
<font size=4>
<img src="galerie/salina.jpg" width=60%><br>
<p>
Salina Turda este probabil cea mai celebra destinatie a turistilor ce viziteaza localitatea Turda. Aceasta mina dateaza inca din perioada romanilor si a fost unul dintre motivele pentru care localitatea s-a dezvoltat vertiginos si dupa retreagerea romanilor din Dacia.
Istorie
Prima atestare documentara a extragerii sarii in Turda dateaza din anul 1271. In trecut exploatarea era organizata in asa numitele Camari de Sare care erau de doua tipuri: unele care faceau exploatare, depozitare si transport pana la apa iar altele efectuau transportul pe apa si vanzarea sarii. Ulterior in anul 1786 exploatarea si valorificarea sarii devin monopol de stat dar incep sa apara unele probleme privind transportul sarii pe drumul abrupt ce cobora de la salina. Pentru rezolvarea acestei situatii se construieste incepand cu 1853 galeria Franz Josef si sunt modernizate minele Terezia si Rudolf. Salina Turda este inchisa in 1932.
Geologie
Depozitul de sare apartine sedimentarului transilvan ce se afla pe toata rama vestica a Depresiunii Transilvaniei, dar care apare aproape de suprafata doar in zonele anticlinale. Acest zacamant s-a format in urma cu 18 milioane de ani si se intinde din Depresiunea Maramures pana la Ocna Sibiului incluzand si Turda si Ocna Mures. Zacamantul de la Turda este situat in nord-estul orasului fiind intinsa sub forma unei perne alungite pe o suprafata de 45 kmp si are o adancime de 1200 m. Continutul de NaCl se situeaza in jurul valorii de 99% iar intregul zacamant este estimat la aproape 39000 milioane tone. La suprafata zacamantului sarea este pura, cristalizata cu granule mari iar mai jos are unele intercalatii de sisturi argiloase si nisip fin alaturi de pietris.
Tratament in salina
Pe parcursul anilor s-a descoperit ca mediul salin este deosebit de prielnic in tratarea afectiunilor respiratorii datorita temperaturii constante de 10-12 grade Celsius si a umiditatii de 75-80% precum si datorita concentratiei optime de aerosoli (particule de sare solide foarte fine). Viteza curentilor de aer este de maxim 0,2 m/s (0,02 m/s in mina Rudolf). Ca urmare dupa 1992 mina Rudolf a fost amenajata ca si sala de tratament subterana.<br><br>
</p>
<b><font size=6>Vârful Pietrosul Rodnei</font><br><br></b>
<img src="galerie/rodnei.jpg" width=60%><br>
<p>
Varful Pietrosu este cel mai inalt pisc muntos din Muntii Rodnei cu 2.303 metri. De asemenea, este cel mai inalt varf din intregul lant al Carpatilor Orientali, fiind impartit intre judetele Maramures si Bistrita Nasaud.<br><br>
</p>
<b><font size=6>Lacul Albastru</font><br><br></b>
<img src="galerie/lac.jpg" width=60%><br>
<p>
Unic in Europa a luat fiinta prin prabusirea in 1920 a unei vechi galerii de mina. Unicitatea lacului o da abundenta sarurilor cuprice dizolvate in apa lacului care ii confera apei o culoare albastra sau verzuie, in functie de directia si cantitatea luminii. Lacul se alimenteaza in continuare prin subteran, printr-o veche galerie si este situat la 3 km de Baia Sprie, la o altitudine de 565 m.<br><br>
</p>

<b><font size=6>Creasta Cocoșului</font><br><br></b>
<img src="galerie/coco.jpg" width=60%><br>
<p>
Rezervatia este amplasata in Muntii Gutai, in judetul Maramures, la o distanta de aproximativ 35 km de orasul Baia Mare. In cadrul rezervatiei se evidentiaza "Creasta Cocosului", care da numele rezervatiei, reprezentand o colina ascutita, crenelata, de circa 200 m lungime, aflata la o altitudine medie de 1200 m, cu o orientare spatiala aproape verticala, dupa directia NV - SE. La sud de creasta principala se afla centrele miniere Baia Mare, Baia Sprie si Cavnic, centrul turistic Mogosa si Complexul Suior, iar la nord, peisajul idilic cuprinde taurile de munte Chendroaisei si Morarenilor.<br><br>
</p>
<b><font size=6>Muzeul Satului din Sighetu Marmației</font><br><br></b>
<img src="galerie/sighet.jpg" width=60%><br>
<p>
Localizat la intrarea in orasul Sighet, pe drumul dinspre Baia Mare, Muzeul Satului Maramuresean se alatura in 1981, Muzeului Etnografic al Maramuresului ca o sectie in aer liber.
S-a constituit ca o rezervatie de monumente de arhitectura taraneasca, fiind opera comuna a domnului Francisc Nistor si a actualului director al institutiei, domnul Mihai Dancus.
Prin structura sa, creeaza impresia unui sat tipic maramuresean. Ulite drepte (principale) si intortocheate, poteci si "prilazuri" alcatuiesc structura intima a asezarii si converg ca in toate satele maramuresene, spre biserica.
Pentru casele expuse in muzeu s-a folosit lemn cioplit de mesterii din zona, si ilustreaza locuinte tipice slave, evreiesti, maghiare, germane si romanesti din secolele 17 si 18. Acestea sunt pastrate in conditii foarte bune atat in interior cat si pe exterior, impreuna cu motivele originale de pe usi si inscriptiile in Chirilica si Araba.<br><br>
</p>

<b><font size=6>Cheile Tătarului</font><br><br></b>
<img src="galerie/tatar.jpg" width=60%><br>
<p>
Cheile Tatarului reprezinta una dintre frumusetile naturale unice ale tarii Maramuresului. Cheile Tatarului din Maramures aduna de-a lungul timpului o sumedenie de turisti impresionati de frumusetea naturala, dar si de peisajul in care acestea s-au format.

Situate in judetul Maramures, Cheile Tatarului reprezinta una dintre cele mai importante si renumite rezervatii naturale. Acestea se afla amplasate foarte aproape de Baia Mare, la nici 30 kilometri distanta, pe raza satului Mara al comunei Desesti.

Cheile Tatarului din Maramures sunt singurele chei din tare care au fost sapate in andezit. Acestea au o lungime considerabila, de cateva sute de metri, fiind inconjurate de multa verdeata, de paduri dese de foioase si conifere, dar si de o fauna si vegetatie extrem de variata.

Popularizarea acestei regiuni nu a fost una intense. Cu toate acestea, turistii ajunsi odata in aceste locuri se reintorc ori de cate ori au ocazia, cuceriti de cadrul natural unic creat de natura.

Chiar prin interiorul Cheilor Tatarului din Maramures curge paraul Runcu. In apropiere, s-a inceput constructia unui baraj de acumulare, ramas inca nefinalizat. In cazul in care acesta va fi pus in functiune, Cheile Tatarului nu vor mai putea fi vizibile, fiind acoperite de ape.<br><br>
</p>
<b><font size=6>Mănăstirea Sf. Ana din Rohia</font><br><br></b>
<img src="galerie/ana.jpg" width=60%><br>
<p>
Manastirea a fost ctitorita intre anii 1923 si 1926 de catre preotul ortodox Nicolae Gherman, paroh la Rohia. Manastirea a fost construita in memoria fetitei lui Anuta, care a decedat la numai 10 ani, in 1922.

Manastirea Rohia cuprindea o biserica si un corp de chilii, fiind prima manastire ortodoxa din Transilvania construita dupa Unirea din 1918. Astazi, manastirea Rohia este una dintre cele mai dezvoltate din tara, cuprinzand multe cladiri si deosebite valori culturale si duhovnicesti. La demisolul bisericii se adaposteste Icoana Maicii Domnului, facatoare de minuni.

Manastirea Rohia, dispune si de o biblioteca formata din aproximativ 40.000 de carti si reviste cu continut teologic si de cultura profana, cuprinzand pe langa lucrarile in limba romana, un important fond in limbile germana, si maghiara, precum si un numar de carti in limbile franceza, engleza si neogreaca.<br><br>
</p>

<b><font size=6>Borsa</font><br><br></b>
<img src="galerie/borsa.jpg" width=60%><br>
<p>
Intr-o descriere a localitatii din anul 1941 se aminteste ca aceasta comuna rasfirata si risipita are o lungime de 59 km si o latime de 35 km. Localitatea Borsa se intinde, azi, pe o suprafata de 47482 ha, avand o populatie de 29000 locuitori. Intinderea localitatii de-a lungul soselei care o strabate de la Valea Hotarului , pe langa pasajul de cale ferata, pana la Gura Tiboului (raul Tibou), masoara 52 km, fiind una dintre cele mai lungi asezari din tara.Relieful zonei Borsa este muntos, foarte accidentat, cu pante repezi si diferente mari de nivel. Inaltimile care se intalnesc in zona tin de trei formatiuni muntoase: Muntii Rodnei, Muntii Maramuresului si Muntii Tibau. Acesti munti inconjoara o depresiune si sunt asezati ca adevarate ziduri naturale de cetate; aici se poate aminti o ramura industriala importanta a regiunii: mineritul din zona Baia Borsa.<br>
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