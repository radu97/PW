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
							<li><a href="http://www.turistinfo.ro/zona-muntenia/cazare-hoteluri-vile-pensiuni-zona-muntenia.html" target="blank">CAZARE</a></li>
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
<b><font size=6>Mănăstirea Curtea de Argeș</b></font><br><br>
<font size=4>
<img src="galerie/arges.jpg" width=60%><br>
<p>
Manastirea a fost construita de Neagoe Basarab (1512 - 1517) pe locul vechii mitropolii (1359). Pictura interioara, realizata de zugravul Dobromir, a fost terminata in anul 1526, in timpul domniei lui Radu de la Afumati. Ea este pastrata fragmentar in Muzeul National de Arta din Bucuresti. Reparata de cateva ori, biserica a fost restaurata (1875 - 1886) de arhitectul francez Andre Lecomte du Nouy, discipol al lui Eugene Viollet-le-Duc, care i-a adus si unele modificari care au diminuat valoarea istorica a monumentului. Construita din piatra fatuita si profilata, biserica are un plan triconc, inspirat din planimetria bisericii Vodita II, reluat ulterior si in alte constructii (mitropolia din Bucuresti, biserica fostei manastiri Cotroceni, manastirea Tismana etc.).
Printre cele mai vechi asezari de care vorbeste istoria noastra se numara si Curtea de Arges cu imprejurimile ei. In veacul al XIII-lea, inalta cetate a Poenarilor, cu fortificatiile sale de piatra si putul care o lega direct cu albia raului de jos, facuse sa ajunga, pana departe, faima acestor locuri; iar pe la jumatatea secolului urmator, curtea Basarabilor si biserica "Sfantul Nicolae Domnesc" rasfrang aceasta faima asupra intregii asezari adunata cu timpul in preajma lor: Curtea de Arges de mai tarziu.<br><br>
</p>
<b><font size=6>Castelul Peleș</b></font><br><br>
<img src="galerie/peles.jpg" width=60%><br>
<p>
Castelul Peles, resedinta de vara a primului cuplu regal al Romaniei, regele Carol I ( 1866-1914) si regina Elisabeta, a fost construit intre 1873 si 1914, la dorinta suveranului, dupa planurile arhitectilor Johannes Schultz si Karel Liman. Edificiul a fost decorat de celebrii creatori, J. D. Heymann din Hamburg, August Bembe din Mainz si Bernhard Ludwig din Viena. Castelul Peles este considerat cel mai important ansamblu arhitectonic de tip istorist din Romania, avand caracter de unicat si prin valoarea sa istorica si artistica, ramane unul dintre cele mai importante si frumoase monumente din Europa.<br><br>
</p>
<b><font size=6>Biserica Domnească</b></font><br><br>
<img src="galerie/domneasca.jpg" width=60%><br>
<p>
Biserica Domneasca Sf. Nicolae din secolul XIII, a fost inlocuita in 1352 de o ctitorie a lui Basarab I, pastrat pana-n zilele noastre. Pronaosul este ingust si boltit, are in mijloc o cupola, iar naosul patrat boltit are dimensiuni foarte mari. Boltirea este sustinuta de patru stalpi peste care se inalta turla.
Pictura murala care acopera intreaga biserica este de pe vremea lui Vlaicu Voda (1364-1366), dar s-au pastrat si fragmente de fresca din secolul XVIII. In total sunt cca. 130 de fresce foarte bine pastrate. Aspectul exterior este determinat de zidaria din randuri de piatra de rau ce aleterneaza cu randuri de caramida.
Biserica a fost timp indelungat necropola domnitorilor munteni, aici este si mormantul lui Vlaicu Voda, in care sau gasit numeroase marturii arheologice ale secolului XIV, printre care si "paftaua de la Arges".
In 1992, cu ocazia lucrarilor de restaurare a Curtii Domnesti de la Curtea de Arges, s-a descoperit un Grafit care precizeaza ca in 6860 (adica 1352) la Campulung a murit marele Basarab Voievod, adica Basarab I, care a domnit intre anii 1310 si 1352, si a intemeiat statul feudal independent Tara Romaneasca.
In biserica se pastreaza mormantul lui Radu I Basarab expus sub sticla, aici putand fi vazute cateva resturi din vesmantul feudal cu ornamente de aur si pietre pretioase.<br><br>
</p>
<b><font size=6>Babele</b></font><br><br>
<img src="galerie/babele.jpg" width=60%><br>
<p>
Babele sunt formatiuni stancoase din Masivul Bucegi, formate prin erodarea eoliana diferentiata a diferitelor strate geologice in care sunt sculptate (conglomerate cretacice) si se gasesc in imediata vecinatate a cabanei cu acelasi nume.<br><br>
</p>
<b><font size=6>Sfinxul din Bucegi</b></font><br><br>
<img src="galerie/sfinx.jpg" width=60%><br>
<p>
Sfinxul din Muntii Bucegi este un megalit antropomorf aflat la 2.216 m altitudine. Originea numelui Sfinxului este datorata asemanarii sale cu un cap uman, mai exact cu asemanarea Sfinxului Egiptean, formarea lui fiind datorata eroziunii eoliene. Format dintr-un bloc mare de piatra ce a capatat forma de astazi intr-un timp foarte indelungat, Sfinxul din Bucegi, aflat pe platoul Bucegi masoara 8 metri in inaltime si 12 metri in latime.<br><br>
</p>
<b><font size=6>Ateneul Român</b></font><br><br>
<img src="galerie/ateneu.jpg" width=60%><br>
<p>
Ateneul Roman este o sala de concerte din Bucuresti, ce adaposteste si sediul Filarmonicii George Enescu.
Cladirea, care este realizata intr-o combinatie de stil neoclasic cu stil eclectic, a fost construita intre 1886 si 1888, dupa planurile arhitectului francez Albert Galleron.
Circular, dominat de o mare cupola, cu fatada principala in stil neoclasic, Ateneul are aspectul unui templu ionic, cu sase coloane frontale si doua laterale. La intrarea principala, cele opt coloane ionice au proportii similare coloanelor templului Erechteion de pe Acropole. Imprejurul marii cupole a edificiului se pot vedea, sapate in zid, numele unor invatati cunoscuti. Printre ele, cel al lui Miron Costin, Gheorghe Sincai, Dimitrie Cantemir, Ion Heliade Radulescu, Timotei Cipariu.
Fatada este un peristil cu latimea de 48 m. Sub peristil se afla cinci medalioane in mozaic care ii reprezinta pe cinci mari domnitori ai tarii: Neagoe Basarab, Alexandru cel Bun, regele Carol I al Romaniei, Vasile Lupu si Matei Basarab. Inaltimea totala a cladirii pana in varful cupolei este de 41 m.
In interior, sala de concerte, cu un diametru de 28,50 m, si o inaltime de 16 m, are 600 de locuri la partere si 52 de loji (in total aproximativ 794 de locuri).<br><br>
</p>
<b><font size=6>Palatul Cotroceni</b></font><br><br>
<img src="galerie/cotroceni.jpg" width=60%><br>
<p>
Palatul Cotroceni este sediul Presedintiei Romaniei. O parte a palatului este deschisa vizitelor publicului din 27 decembrie 1991, cand a fost inaugurat Muzeul National Cotroceni.
In 1862 Alexandru Ioan Cuza a hotarat sa utilizeze Manastirea Cotroceni ca resedinta domneasca de vara.
La inceputul domniei, Principele Carol I al Romaniei primeste ca resedinta de vara vechile case domnesti de la Cotroceni. Carol I hotaraste sa construiasca in incinta manastirii un palat, in folosinta mostenitorilor Coroanei, care sa-i serveasca drept resedinta oficiala in Bucuresti. Planurile edificiului au fost realizate de arhitectul Paul Gottereau in stil clasic venetian.
In mai 1883 se deschide Guvernului un credit de 1 700 000 de lei pentru daramarea vechilor case domnesti si construirea palatului de la Cotroceni. Constructia a inceput in anul 1888. Mai tarziu, arhitectul roman Grigore Cerchez a reconceput aripa nordica in stil national romantic, adaugand o sala mare, cu o terasa deasupra si doua foisoare cu coloane, dintre care unul era replica faimosului foisor de la Manastirea Hurezi. Principesa Maria si Principele Ferdinand s-au mutat la Cotroceni in martie 1896.
Intre anii 1949 - 1976, Palatul Cotroceni a devenit Palatul Pionierilor. Avariat in timpul cutremurului din 1977, lucrarile de restaurare au durat aproximativ 10 ani, fiind coordonate de arhitectul Nicolae Vladescu.
In anul 1984, la ordinul presedintelui Nicolae Ceausescu a fost demolata biserica manastirii, ridicata de Serban Cantacuzino.
Palatul Cotroceni a devenit dupa Revolutia romana din 1989 resedinta oficiala a Presedintelui Romaniei.<br><br>
</p>
<b><font size=6>Palatul Parlamentului</b></font><br><br>
<img src="galerie/parlament.jpg" width=60%><br>
<p>
Palatul Parlamentului din Bucuresti, (cunoscut inainte de revolutie sub numele de Casa Republicii sau Casa Poporului), masoara 270 m pe 240 m, 86 m inaltime, si 92 m sub pamant. Are 9 nivele la suprafata si alte 9 subterane. Conform World Records Academy, Palatul Parlamentului este cea mai mare cladire administrativa pentru uz civil ca suprafata din lume, cea mai scumpa cladire administrativa din lume si cea mai grea cladire din lume.
Cladirea a fost finalizata in 1997. In 1989 costurile clädirii erau estimate la 1.75 miliarde dolari SUA, iar in 2006 la 3 miliarde Euro.
Din 1994 in cladire functioneaza Camera Deputatilor, dupa ce sediul initial al institutiei, Palatul Camerei Deputatilor, a fost donat de stat Bisericii Ortodoxe Romane. Incepand din 2004 aici se afla si Senatul Romaniei, initial fiind gazduit in fosta cladire a Comitetului Central al Partidului Comunist Roman. De asemenea, Palatul Parlamentului gazduieste in numeroasele sale sali si saloane, o intreaga varietate de evenimente, expozitii sau intalniri.<br><br>
</p>
<b><font size=6>Arcul de Triumf</b></font><br><br>
<img src="galerie/arc.jpg" width=60%><br>
<p>
Arcul de Triumf este un monument ce comemoreaza victoria Romaniei in Primul Razboi Mondial. Monumentul, proiectat de Petre Antonescu, a fost construit in perioada 1921-1922, renovat in perioada 1935-1936, si din nou renovat in perioada 2014-2015.
Arcul de Triumf are 27 m inaltime, cu o singura deschidere si este de forma paralelipipedica. Machetele au fost executate de artisti plastici, iar pentru cioplirea marmurei de Ruschita, pe langa sculptorii autohtoni, s-a apelat si la un numar de zece sculptori din Italia.
Arcul de Triumf adaposteste un mic muzeu, care poate fi vizitat doar cu anumite ocazii speciale. Vizitatorii pot vedea patru expozitii: Marele Razboi al Reintregirii Neamului (fotografie si film), Heraldica Marilor Familii Boieresti (efigii din bronz, fotografii), Arcul de Triumf in Imagini (fotografii, machete), Marea Unire de la 1918 (unde se gasesc si coroanele si sceptrul regal reproduse 1:1, fotografii) si pot urca pe terasa superioara.<br>
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