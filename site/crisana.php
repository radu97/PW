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
							<li><a href="http://www.turistinfo.ro/zona-crisana/cazare-hoteluri-vile-pensiuni-zona-crisana.html" target="blank">CAZARE</a></li>
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
<b><font size=6>Arad</b></font><br><br>
<font size=4>
<img src="galerie/arad.jpg" width=60%><br>
<p>
Arad este resedinta si cel mai mare oras al judetului Arad, situat pe cursul inferior al raului Mures, vestul Romaniei. Municipiul se afla la limita regiunilor istorice Crisana si Banat. La recensamantul din anul 2011 Aradul avea o populatie de 159.074 locuitori, fiind al doisprezecelea cel mai mare centru urban al Romaniei din punct de vedere demografic. Municipiul Arad constituie pentru vestul Romaniei un punct important in ceea ce priveste industria, si este de asemenea un nod important in transporturile feroviare, rutiere, avand si aeroport.<br><br>
</p>
<b><font size=6>Băile Felix</b></font><br><br>
<img src="galerie/felix.jpg" width=60%><br>
<p>
Baile Felix - statiune balneo-climaterica, printre cele mai renumite, situata la 8 km. sud de Oradea, in Campia Crisurilor, la o altitudine de 140 m. Statiunea Baile Felix dispune de o bogata baza de tratament formata din instalatii pentru bai la cada, impachetari calde cu namol si parafina, bazine cu apa minerala termala, aparatura pentru kineoterapie, hidroterapie, piscine cu apa termala acoperite si in aer liber, sali pentru gimnastica medicala,cabinete medicale.
Relieful statiunii este unul complex, dispus in trepte, de la est, Muntii Bihorului cu vf. Curcubata Mare de 1.849 m, Muntii Vladeasa, Codru Moma, Padurea Craiului, Plopis, despartiti de depresiunile Beius si Vad-Borod, spre vest, 90 m in Campia joasa a Crisurilor. Predominanta calcarului a favorizat aparitia unui pitoresc relief carstic-platoul Padis presarat cu tuneluri, cascade subterane, lacuri ascunse de lumina zilei, paduri, canioane si ghetari.<br><br>
</p>
<b><font size=6>Peștera Urșilor</b></font><br><br>
<img src="galerie/ursi.jpg" width=60%><br>
<p>
In anul 1975, cu ocazia unor dinamitari efectuate la o cariera de marmura din zona Muntilor Apuseni, aflandu-se in judetul Bihor in apropierea localitatii Chiscau, comuna Pietroasa, a fost descoperita Pestera Ursilor. Pestera a fost un loc de adapost pentru ursii de caverna (Ursus Spelaeus), fiind o specie de urs raspandita in Europa in timpul Pleistocenului(prima partea a Cuaternarului) ajungand la disparitie la sfarsitul ultimei ere glaciare, in urma cu aproximativ 20.000 de ani, dovada fiind numeroasele urme si fosile gasite in interiorul pesterii, de unde provine si numele de "Pestera Ursilor". Dupa 5 ani de amenajari, la 14 iulie 1980, pestera a fost deschisa vizitatorilor. Anual pestera este vizitata de peste 200.000 de vizitatori. Datorate formatiunilor de stalactite si stalagmite, se remarca diferitele zone care se aseamana cu: (Palatele fermecate); (Lacul cu nuferi); (Mastodontul si Casuta Piticilor); (Draperiile din galeria ursilor); (Portalul); (Pagodele) si ultima sala, (Sfatul Batranilor), iluminata cu (Lumanari). Temperatura in pestera este constanta pe tot parcursul anului fiind de 10 grade Celsius, iar umiditatea se mentine la 97%. La intrarea in pestera se afla un pavilion, compus dintr-o sala de asteptare, casa de bilete, un bar, un mic muzeu speologic si un stand cu suveniruri si obiecte artizanale specifice zonei.<br><br>
</p>
<b><font size=6>Grădina Zoologică din Oradea</b></font><br><br>
<img src="galerie/zoo.jpg" width=60%><br>
<p>
Gradina Zoologica din Oradea dateaza din anul 1960, an in care au fost aduse aici primele animale, dar pentru publicul larg a fost deschisa abia in 1962. Se intinde pe o suprafata de 3,2 hectare si are peste 700 de specii de animale si pasari.Ca marime, este una dintre cele mai mici Gradini Zoologice din tara, desi numarul de animale pare destul de mare. Are un habitat dintre cele mai propice, fiind situata sub un pod vegetal, format din peste 40 de specii de pomi. Arborii seculari reprezinta 20 % din flora de aici.
Gradina Zoologica ii invita si pe bunici si pe cei mici la cateva clipe de relaxare si distractie in compania necuvantatoarelor.<br><br>
</p>
<b><font size=6>Palatul Vulturul Negru</b></font><br><br>
<img src="galerie/palat.jpg" width=60%><br>
<p>
Palatul Vulturul Negru, hotelul de odinioara, a fost construit intre anii 1907-1909 pe amplasamentul vechiului han Vulturul. Ansablul dotat cu un pasaj acoperit cu sticla, facand legatura intre trei strazi a devenit cea mai importanta realizare a cuplului de arhitecti Komor Marcell si Jakab Dezso. Vitraliul cu vulturul negru, emblema ansamblului, a fost executat in anul 1909 in atelierul oradean Neumann K.<br><br>
</p>
<b><font size=6>Băile 1 Mai</b></font><br><br>
<img src="galerie/bai.jpg" width=60%><br>
<p>
Statiunea Baile 1 Mai este situata in judetul Bihor, la numai 2 km de Baile Felix si 4 km de Oradea, intre satele Rontau si Haieu. Cunoscuta de-a lungul timpului si sub numele de Baile Episcopiei (sec. XV-XVII), statiunea s-a facut remarcata mai ales datorita apelor minerale si a namolului sapropelic extras din lacul aflat in localitate, utilizate in tratarea unor afectiuni reumatismale, afectiuni ale sistemului nervos central si periferic si afectiuni ginecologice.
Statiunea se bucura de un climat de tip continental moderat de ses, temperatura medie anuala fiind de 10,5 C, iar cea din perioada estivala, de 21,3 C. Presiunea atmosferica medie este de 770 mm coloana de mercur.
Baza de tratament din Baile 1 Mai va pune la dispozitie personal calificat si servicii de care puteti beneficia in timpul vacantelor petrecute aici.
Efectul benefic al apelor termale din statiune a fost descoperit cu foarte multi ani in urma. Primele tratamente care se faceau erau cu namolul extras de pe fundul albiei paraului Peta si din jurul izvoarelor termale. Acesta era aplicat direct pe partile dureroase ale corpului si asa s-a descoperit efectul de vindecare si ameliorare a bolilor reumatice.<br><br>
</p>

<b><font size=6>Moneasa</b></font><br><br>
<img src="galerie/moneasa.jpg" width=60%><br>
<p>
<b>1.Așezare<br></b>
Localitatea Moneasa se afla situata la poalele Muntilor Codru-Moma, la o altitudine de 280 m Google Earth, la o distanta de 102 km. fata de municipiul Arad si 20 de km. fata de orasul Sebis si este strabatuta de cursul superior al raului Moneasa.<br>

<b>2.Istoric<br></b>
Urmele locuirii pe aceste meleaguri dateaza din paleolitic si neolitic si au fost descoperite in complexul de pesteri "Hoanca" si "Izoi". Prima atestare documentara a localitatii Moneasa dateaza din anul 1597.<br>

<b>3.Economie<br></b>
Un rol important in economia localitatii Moneasa il au exploatarile de marmurura neagra si rosie, exploatarea si prelucrarea lemnului, turismul, precum si izvoarele minerale bicarbonatate, calcice, sodice, oligominerale si mezotermale, valorificate inca din anul 1866.
Statiunea are ca profil, cura si tratamentul pentru afectiuni ale sistemului nervos central si periferic, ale sistemului locomotor, unele afectiuni ginecologice, nevroza astenica, reumatologie si boli asociate-nutritie, metabolice (diabet mellitus, obezitate).
Factorii naturali de cura sunt climatul, ce are un efect calmant asupra organismului uman in general si asupra sistemului nervos central in mod particular, si apele minerale oligoterme. Apele termale au temperatura de 25-32 C si sunt ape bicarbonatate, calcice, magnezice, sodice, hipotone.<br><br>

<b><font size=6>Cascada Bohodei</b></font><br><br>
<img src="galerie/bohodei.jpg"><br>
<p>
Cascada Bohodei se afla la circa 1350m altitudine, sub varful Bohodei (1653.8m), afluent de partea stanga al raului Aleu. Are o inaltime de 80 m. Caderea apei nu este verticala, se prelinge pe stanca inclinata si are mai multe trepte.
Desi ofera privelisti deosebit de frumoase este un traseu dificil, foarte abrupt pe portiunea de circuit efectiv, nerecomandat decat turistilor bine pregatiti fizic. Presupune parcurgerea a trei portiuni de stancarii abrupte echipate cu lanturi. Recomandarea SPJ Salvamont-Salvaspeo Bihor este ca acest traseu sa fie evitat pe vreme ploioasa, crescand mult pericolul de alunecare. Incaltamintea cu aderenta mare este obligatorie. Indiferent de calea de acces aleasa (Vl. Aleului sau Stana de Vale) traseul se parcurge numai in directia descrisa, interzis in sens invers. Traseu interzis iarna.<br>

<b><font size=6>Mănăstirea Sfintei Cruci</b></font><br><br>
<img src="galerie/manastire.jpg" width=60%><br>
<p>
Manastirea Sfintei Cruci a luat fiinta in anul 1992, amplasata la doi km distanta de orasul Oradea, intr-un loc unde inainte de aceasta data nu exista nici o asezare, in scurt timp s-a ridicat un adevarat complex monahal.
Prima biserica a manastirii a fost o bisericuta de lemn, datand de la inceputul secolului al XVIII-lea, monument istoric. A fost adusa din satul Corbesti, judetul Bihor intr-o stare de degradare avansata, insa s-a reusit reconstituirea ei astfel ca si-a redobandit stralucirea de altadata.
In anul 1994, s-a pus piatra de temelie a bisericii de zid, care practic constituie centrul complexului monahal. Biserica, construita in plan triconc, prezinta fresca atat interior cat si exterior, cu pictura bizantina, culorile folosite fiind in cea mai mare parte culori naturale. Prezenta picturii exterioare, care acopera in intregime edificiul, ii confera unicitate in Transilvania, realizeaza un arc in timp si spatiu intre viata monahala actuala din aceasta parte a tarii si cea de odinioara, din spatiul moldav, considerat ca o adevarata pepiniera a vietii monahale romanesti.<br>
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