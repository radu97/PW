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
							<li><a href="http://amfostacolo.ro/harta-romania__15/banat__91/" target="blank"">HARTĂ TURISTICĂ</a></li>
							
							<li><a href="http://www.turistinfo.ro/zona-banat/cazare-hoteluri-vile-pensiuni-zona-banat.html" target=blank>CAZARE</a></li>
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
<b><font size=6>Cascadele Beușniței </font></b><br><br>
<img src="galerie/beusnita.jpg" width=60% heigh=60%><br>
<font size=4>
<p>Succesiunea de cascade aflate pe Raul Beu, in amonte de Lacul Ochiul Beului au devenit recunoscute drept Cascadele Beusnitei. Cea mai mare cascada din 
aceasta succesiune atinge inaltimea de peste 5 metri.
Cascadele Beusnitei au aparut prin actiunea apei de-a lungul timpului in substratul calcaros. Calcarul care s-a dizolvat prin actiunea apei s-a depus in 
straturi de-a lungul cursului raului. Aceasta depunere a dus la formarea tufului calcaros, si a rocilor cu compozitie moale si permeabila. Rocile formate 
aici au permis modelarea a nenumarate forme, precum mini-baraje, ochiuri de apa si cascade succesive.
Aflandu-se intr-o zona de protectie stricta ce are statut de rezervatie naturala, in Parcului National Cheile Nerei – Beusnita din judetul Caras – Severin, 
Cascadele Beusnitei sunt un fenomen nemaintalnit, un adevarat monument natural si un obiectiv de mare importanta turistica, geologica si peisagistica.<br><br>
</p>

<b><font size=6>Cheile Carașului</font></b><br><br>

<img src="galerie/cheilecarsului2.jpg" width=60% align="middle"><br>
<p>Muntii Aninei gazduiesc cu mandrie Cheile Carasului. Acestea se afla intre confluenta dintre paraul Comarnic cu Carasul si comuna Carasova.
In cadrul Parcul National Semenic – Cheile Carasului Cheile Carasului se considera a fi rezervatie naturala.
Raul Caras intretaie cheile, fapt care a datorat macinarea pietrei calcaroase pe o distanta de aproximativ 19 kilometri. In urma fenomenului a rezultat o panorama minunata, fiind considerat unul din cele frumoase peisaje de acest gen din tara. Tot datorita apei s-au format numeroase pesteri in zona.
Cheile Carasului ocupa locul al doilea in tara din punct de vedere al lungimii. Au fost comparate de nenumarate ori cu canioanele.
Cheile au o adancime de 200 m si o lungime de 19 km (din care aproximativ 10 km vizitabili) si sunt remarcabile datorita versantilor cu pereti calcarosi, vegetatiei abundente, grohotisurilor, izvoarelor carstice, precum si datorita celor peste 500 de pesteri si avene (cateva exemple edificatoare, in acest sens, sunt Pestera Tolosu, situata la intrarea in Cheile Carasului, Pestera Racovita, cunoscuta pentru formatiunile stalactitice si stalagmitice spectaculoase, si Pestera Liliecilor a carei intrare are un contur similar cu cel al continentului african).
<br><br>
</p>

<b><font size=6>Cheile și Cascada Șușarei de lângă Sasca Montană</b></font><br><br>
<p>
<img src="galerie/susara.jpg" width="60%"><br>
Cheile Susarei  sau Cheile Valea Morii se afla in Muntii Locvei, intr-o arie protejata, de interes national, parte integranta a Parcului Nationale Cheile Nerei – Beusnita , aflandu-se la sud de Cheile Nerei.
Rezervatia naturala are o suprafata de 246 ha, este strabatuta de valea Susarei, si cuprinde o zona impadurita, de o frumuste salbatica, unde sunt prezente forme specifice reliefului carstic: doline, lapiezuri, pesteri, chei, pereti calcarosi, abrupturi si grohotisuri, care desigur, confera atractivitate peisajului. La acestea se adauga cascadele, pajistile si poienile, dar si flora (bujorul banatean etc.) si fauna (vulturul alb etc.) diversificata.
Cheile Susarei pot fi parcurse pe poteca marcata cu cruce albastra, din Sasca Montana pe la cascada Susarei, pana in Cheile Nerei la Lacul Dracului, traseu care dureaza 3-4 ore. 
<br><br>
</p>

<b><font size=6>Mănăstirea ortodoxă Călugăra</b></font><br><br>
<img src="galerie/calugara.jpg" width="60%"><br>
<p>
Manastirea Călugăra a fost ridicata in 1858 mai sus de localitatea Ciclova Montana (unde se afla biserica catolica „Maria Stâncii” cu o icoana a Sfintei Fecioare descoperita la 1700 intr-o pestera).
Manastirea Călugăra a fost ridicata de Alexie Nedici, fiul preotului satului, pe locul unde a existat, probabil, o sihastrie. Aici au fost descoperite, intr-o grota cu altar, o icoana a Maicii Domnului si osemintele pietrificate ale unui sihastru.
Legenda spune ca Alexie Nedici, ctitorul manastirii, nascut in Cioclova Montana, teolog si baiat al parohului din Ciclova Montana, a auzit cantarea ingerilor in locul in care a ridicat aceasta manastire ortodoxa. Cantari minunate mai auzisera aici si ciobanii din sat.
Manastirea Călugăra a fost sfintita la 1 octombrie 1861 de episcopul de Vârset, Emilian Kenghelat cu hramul sarbatorii acelei zile - „Acoperamântul Maicii Domnului”. Alexie Nedici, primul calugar si staret al acestei manastiri, avea sa treaca la Domnul doar un an mai tarziu, la numai 26 de ani, si vreme indelungata de manastire s-au ingrijit preotii parohi din Ciclova Montana.
Biserica manastirii a fost a fost pictata in 1942.
Manastirea Calugara a fost restaurata si resfintita in 2000 de catre episcopul Laurentiu Streza, cel care a devenit ulterior Mitropolit al Ardealului.<br><br>
</p>

<b><font size=6>Cheile Nerei</b></font><br><br>
<img src="galerie/cheilenerei.jpg" width=60%><br>
<p>
Cheile Nerei sunt cele mai spectaculoase si mai lungi chei din Romania.
Clima submediteraneana a favorizat dezvoltarea unei vegetatii luxuriante in Vheile Nerei.
Drumetii trebuie sa fie atenti insa la viperele cu corn din zona.
Parcul National Cheile Nerei-Beusnita este o zona protejata aflata in judetul Caras-Severin, in sudul Muntilor Aninei si nordul Muntilor Locvei. Cheile Nerei sunt situate intre localitatile Sasca Montana si Sopotu Nou si s-au format de-a lungul raului Nera.
Cheile Nerei au o lungime de aproximativ 22 km si reprezinta cele mai intinse chei din tara. Peretii acestora au inaltime de pana la 200 m. In Cheile Nerei s-au format lacuri, canioane, pesteri si cascade datorita actiunii apei in roca calcaroasa. 
Cheile Nerei pot fi parcurse cu piciorul.<br><br>
</p>

<b><font size=6>Cascada Bigăr de pe Valea Minișului</b></font><br><br>
<img src="galerie/cascada.jpg" width=60%><br>
<p>
Cascada Bigar, una dintre cele mai frumoase cascade din Romania, se afla pe Valea Minisului, in Muntii Aninei, judetul Caras Severin.
Cu patru kilometri inainte de varsarea raului Minis in Nera, in dreptul satului Bozovici, Cascada Bigar ofera o imagine spectaculoasa prin pravalirea apei pe o stanca rotunjita (o roca de tuf calcaros), acoperita de muschi.
Apa este imprastiata de aceasta stanca si de covorul de muschi verde in mii de firicele subtiri, formand o gratioasa perdea de apa. Doua sute de metri mai sus de cascada se afla Izbucul Bigar care izvoraste dintr-o pestera. <br><br>
</p>

<b><font size=6>Stațiunea Poiana Mărului</b></font><br><br>
<img src="galerie/mar.jpg" width=60%><br>
<p>
In Muntii Tarcu, intr-o zona depresionara, incadrata de paduri de conifere si  foioase, se afla Statiunea Poiana Marului, unul dintre cele mai frumoase locuri din Banat.
Statiunea Poiana Marului s-a dezvoltat treptat, de la o importanta exploatatie forestiera, cum era la inceput, la primele spatii de cazare, apartinand unor familii de italieni. Insa contributia majora la amenajarea si dezvoltarea statiunii a avut-o construirea barajului de la Maru, urmata de  formarea lacului de acumultare din Poiana Marului, de altfel principala atractie din statiune.  
Atunci cand veti ajunge in Statiuna Poiana Marului cu siguranta va veti bucura de formele geografice, reprezentate de masivele muntoase acoperite de paduri si de posibilitatea de a merge in drumetii. Un alt punct de interes, pentru pescari – amatori sau profesionisti, dar nu numai, este reprezentat de pastravaria amenajata in statiune.
Localizare: Statiunea Poiana Marului se afla la 45 de kilometri de Caransebes, in comuna Zavoi, judetul Caras-Severin; ajungeti aici pe DN58 Caransebes – Otelul Rosul – Zavoi, apoi pe DJ 683, spre Statiunea Poiana Marului<br><br>
</p>

<b><font size=6>“Semeringul Banatului” - Calea ferată Oravița–Anina</b></font><br><br>
<img src="galerie/semering.jpg" width=60%><br>
<p>
Calea ferata Oravita – Anina, prima cale ferata din zona montana de pe teritoriul Romaniei, a fost construita pentru a asigura transportul carbunelui din Anina spre Oravita, iar de aici, pe calea ferata Oravita – Buzias, spre Dunare. 
Linia ferata are o lungime de 34 km, trece prin 14 tuneluri si 10 viaducte, sepuind pe vaile Jitinului si Garlistei, si ofera astfel, o calatorie cu privelisti spectaculoase. 
Viaductul Jitin are 37 m si este cel mai inalt viaduct al cailor ferate, la care se adauga cel mai lung tunel, de 600 m, care se afla in Garliste, unde este si punctul de
maxima altitudine al liniei - 337,7 m. Pentru ca este o cale fereata intortocheata, curbe restranse, inclinare de 20 ‰ fata de celelalte cai ferate, care a o inclinare de 
14 ‰, a fost nevoie de locomotive si vagoane speciale. Si, pentru ca nu a fost niciodata cale electrificata, functionanad cu locomotive diesel, vagoanele au banci din 
lemn, iar pe timp de iarna incalzirea se realizeaza cu un godin  (soba din fier cilindrica folosita la incalzit), asezat in zona de mijloc. <br><br>
</p>

<b><font size=6>Catedrala Mitropolitană din Timișoara</b></font><br><br>
<img src="galerie/catedrala.jpg" width=60%><br>
<p>
Catedrala Mitropolitana din Timisoara a fost construita in perioada 1935 -1940 si este cel mai mare edificiu religios din Timisoara. Catedrala a Mitropoliei Banatului, Catedrala Mitropolitana are hramul “Trei Ierarhi” si a devenit un simbol al orasului.
Construirea catedralei a incepul pe 16 martie 1936, clopotele si curile bisericii au fost sfintite in 1938, iar in 1940 lucrarile au fost terminate. Pana in 1956 a fost pictat interiorul si exteriorul bisericii bisericii si au fost finalizate interioarele.
Inaugurarea catedralei a aut loc in anul 1946 in prezenta Regelui Mihai si a primulu- ministru Radu Groza. Catedrala Mitropolitana din Timisoara se remarca printr-un stil arhitectural unic, diferit fata de alte lacasuri de cult de dimensiuni mari. Acesta imbina traditioa religioasa romaneasca cu cea bizantina-moldoveneasca.
Catedrala imprumuta din stilul manastirilor mici, cum sunt Cozia sau Prislop, tipice secolului al XIV-lea. Peretii sunt ornamentati cu firide sub stresini, cu bolte instelate in interior si cu discuri lacuite intr-o multitudine de color. Temelia este construita pe o placa imensa de beton armat, care este sustinuta de 1000 de piloni. Catedrala are 9 turle mari si 4 mini-turle din care turnul principal are 83,7 metri.
Intreaga constructie are o lungime de 63 m si o latime de 32 m. Cele 7 clopote au o greutate totala de 8.000 kg si au fost confectionate dintr-un material adus din insulele Sumatra si Borneo.
Catedrala Mitropolitana adaposteste la subsol o bogata colectie de arta bisericeasca banateana veche si o valoroasa colectie de icoane. De asemenea aici se afla si moastele sfantului Iosif cel Nou de la Partos, protectorul ortodocsilor romani din Banat.<br><br>
</p>

<b><font size=6>Porțile de Fier 1(Hidrocentrala)</b></font><br><br>
<img src="galerie/hidro.jpg" width=60%><br>
<p>
Portile de fier 1 este numele unui defileu pe fluviul Dunare. Face parte din granita dintre Serbia si Romania. In sensul larg, reprezinta 134 km din cursul Dunarii, in sensul mai ingust doar barajul hidroelectric din apropierea orasului romanesc Orsova. La est de Portile de Fier, in apropiere de orasul Drobeta-Turnu Severin se afla podul lui Traian.
Defileul se afla intre Romania in nord si Serbia in sud.In acest punct, raul separa Muntii Carpati de Balcani.Un nume alternativ romanesc pentru ultima parte este Clisura Dunarii. In Serbia defileul este cunoscut sub numele de Đerdap fiind un parc national, ultima sectiune numindu-se Derdapska klisura. Defileul este uneori denumit "Defileul Dunarii", denumire gresita deoarece cursul fluviului mai are si alte defilee, ca de exemplu defileul de la Visegrad.
Dunarea se ingusteaza pentru prima oara dincolo de insula (romaneasca) Moldova Veche, cunoscuta sub numele de Defileul Golubac. Are 14,5 km lungime si 230 m latime in cel mai ingust punct. La inceputul defileului se afla un fort medieval la Golubac, pe malul sarbesc. Prin valea Ljupovska se ajunge la cel de-al doilea defileu, Gospodin Vir, care are 15 km lungime si se ingusteaza pana la 220 m. Culmile urca pana la 500 m si sunt cel mai greu de ajuns de pe pamant. Donji Milanovac, mai larga, face legatura intre Cazanele mari si Cazanele mici, care au o lungime de 19 km impreuna. Valea Orsova este ultima sectiune mai larga inainte ca fluviul sa ajunga la campiile Valahiei si la ultimul defileu, Defileul Sip.<br>
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