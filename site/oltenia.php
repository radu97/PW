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
							<li><a href="http://www.turistinfo.ro/zona-oltenia/cazare-hoteluri-vile-pensiuni-zona-oltenia.html" target="blank">CAZARE</a></li>
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
<b><font size=6>Mănăstirea Hurezi sau Horezu</b></font><br><br>
<font size=4>
<img src="galerie/horezu.jpg" width=60%><br>
<p>
Cand, in 1660, Constantin Brancoveanu hotaraste ridicatea manastirii Horezu ca loc de inchinare si apoi de veci pentru el si alor sai, se afla doar in al doilea an de domnie si mai avea in fata-i, pana la jertfa care-l va trece intru ceata sfintilor, inca 23 de ani. Depresiunea Horezului, ce i-a atras inca de pe vremea cand detinea demnitatea de spatar, era, ca si astazi, o zona bogata in livezi incantatoare si paduri de fagi, protejata la nord de culmile Capatanii
iar la sud de Magura Slatioarei.
Toponimul de Horezi sau Hurezi este o varianta moldoveneasca pentru huhurezi, pasari care traiau in numar mare pe aceste meleaguri la acea data. Se povesteste chiar, ca pentru a nu atrage atentia turcilor asupra inaltarii unui nou edificiu crestin (care va arata in cele din urma ca o adevarata cetate cu turnuri si cu trainice ziduri de aparare), mesterii tocmiti de Brancoveanu isi sincronizau zilnic momentele de inceput si de incetare a lucrului la manastire cu primele si ultimele strigate ale acestor pasari nocturne.<br><br>
</p>

<b><font size=6>Mănăstirea Bistrița</b></font><br><br>
<img src="galerie/bistrita.jpg" width=60%><br>
<p>
Manastirea Bistrita, ctitorie a boierilor Craiovesti (Barbu, Banul Craiovei si fratii sai Parvu vornicul, Danciu armasul si Radu postelnicul), a fost zidita intre anii 1492-1494. Ea se afla in satul Bistrita apartinand de comuna Costesti din judetul Valcea, pe pitoreasca vale a raului cu acelasi nume.
Prima atestare documentara a Manastirii Bistrita este un act din 16 martie 1494 al lui Vlad Calugarul.
Manastirea a fost distrusa din temelii de catre Mihnea Voda la 1509. Un document al vremii specifica faptul ca Mihnea Voda, care lupta impotriva Craiovestilor, "si manastirea lor, carea o facuse ei pre raul Bistritii din temelie o au risipit".
A fost refacuta in timpul lui Neagoe Basarab intre 1515 - 1519 tot de catre boierii Craiovesti.<br><br>
</p>
<b><font size=6>Coloana Infinitului Brâncuși - Târgu Jiu</b></font><br><br>
<img src="galerie/infinit.jpg" width=60%><br>
<p>
Coloana Infinita este o sculptura a sculptorului roman Constantin Brancusi, parte a trilogiei Ansamblului Monumental din Targu Jiu, compus din Coloana Infinita, Poarta sarutului si Masa tacerii concepute si executate de acesta. Inaugurata la 27 octombrie 1938, coloana are o inaltime de 29,35 metri si este compusa din 16 moduli octaedrici suprapusi, respectiv avand la extremitatile inferioara si superioara cate o jumatate de modul. Modulii erau numiti "margele" de catre autorul lor, Brancusi.
Sculptura este o stilizare a coloanelor funerare specifice sudului Romaniei. Denumirea originala era "Coloana recunostintei fara sfarsit" si a fost dedicata soldatilor romani din Primul Razboi Mondial cazuti in 1916 in luptele de pe malul Jiului.
Coloana a fost turnata in fonta in septembrie 1937 la Atelierele Centrale din Petrosani (ACP). Seful proiectului a fost inginerul Stefan Georgescu-Gorjan, proiectul de executie si calculele au fost facute de inginerul Nicolae Hasnas, executia stalpului central a fost coordonata de maistrul-sef Ion Romosan iar executia modelului in lemn al margelelor a fost facuta de maistrul tamplar Carol Flisec in colaborare directa cu Brancusi, care sosise de la Paris special pentru a supraveghea turnarea coloanei.<br><br>
</p>
<b><font size=6>Cheile Oltețului</b></font><br><br>
<img src="galerie/oltet.jpg" width=60%><br>
<p>
Aria naturala se afla in Muntii Capatanii (grupa muntoasa a Muntilor Sureanu-Parang-Lotrului, apartinand lantului carpatic al Meridionalilor), in extremitatea nord-estica a judetului Gorj, pe teritoriul administrativ al comunei Polovragi.
Cheile Oltetului si Pestera Polovragi alcatuiesc o arie protejata de interes national, situata in Oltenia, pe teritoriului judetului Gorj.
La Chei si la Pestera Polovragi se poate ajunge de pe DN 67, care leaga orasul Ramnicu-Valcea de Targu-Jiu.
Comuna Polovragi se afla chiar la granita dintre judetele Valcea si Gorj. Dupa aproximativ doi kilometri, drumul se bifurca: catre Manastirea Polovragi, care se poate vedea cu usurinta in fata, si, in dreapta, catre Cheile Oltetului si Pestera Polovragi. Accesul se face pe un drum de macadam, care, in unele locuri, este cioplit in munte si, de aceea, exista senzatia ca blocul imens de piatra se pravale peste tine.<br><br>
</p>
<b><font size=6>Cheile Bistriței</b></font><br><br>
<img src="galerie/chei.jpg" width=60%><br>
<p>
Comuna Costesti din Valcea poate fi considerata de departe un colectionar de patrimoniu, pe teritoriul acesteia aflandu-se cele mai frumoase obiective turistice din estul judetului.
Cheile Bistritei (1200m lungime) se afla in apropierea localitatii Costesti si sunt cele mai inguste chei in calcare din Romania fiind declarate rezervatie naturala. Drumul forestier prin cheile Bistritei urca la izvoarele Bistritei in Muntii Capatanii sub varful Zmeuratului cu o inaltime de 1938 m.
Bistrita, rau prizonier al Muntilor Capatanii, s-a chinuit sa evadeze din stransoarea versantilor Buila-Vanturarita, iar reusita a fost unul dintre cele mai frumoase defilee din Romania - cascade, pietre sfaramate, pesteri, valtori.<br><br>
</p>
<b><font size=6>Peștera Polovragi</b></font><br><br>
<img src="galerie/pestera.jpg" width=60%><br>
<p>
Pestera Polovragi se gaseste in Muntii Parang, pe malul stang al Oltetului, la o altitudine de 670 m si la 20 m inaltime fata de talvegul raului, pe teritoriul comunei Polovragi intre localitatile Horezu si Baia de Fier, judetul Gorj,Oltenia, Romania.
Pornind de la Manastirea Polovragi, cea care strajuieste ca o bariera capatul strazii principale aferenta comunei, indraznim sa urcam in chei, initial de-a lungul Padurii Polovragi, arie naturala protejata pentru castanul comestibil si vegetatia de tip mediteranean. Iesind din dreptul padurii, malul abrupt din dreapta – Muntele Capatanii si strajerul din stanga-Muntele Parang, vestesc intrarea in Cheile Oltetului. Drumul forestier, de utilitate publica, urca lin, paralel cu raul Oltet, care, din abisul albiei sale, desparte cei doi munti frati, sapand inca veritabile chei, cu pereti verticali, pe lungimea totala de 3 kilometri.
Dupa 200-300 metri de urcus prin Cheile Oltetului, in dreapta, se deschide o poarta de dimensiuni impresionante, a carei amenajare ne indeamna sa intram. Recunoastem numele: acelasi Polovragi... Aflam ca, in constiinta localnicilor, se pastreaza vie o credinta conform careia, liderul spiritual al geto-dacilor, Zalmoxe, ar fi locuit in Pestera Polovragi. Tot aici, vracii prelucrau o planta rara, numita povraga, polvraga, sau polovraga, intrebuintata in popor ca remediu impotriva bolilor. Este posibil ca denumirea localitatii si implicit a pesterii si manastirii, sa fie de origine dacica, cuprinzand in sine o criptograma nedescifrata inca, despre vreo conceptie a stramosilor nostri referitoare la credinta lor religioasa sau la practicile medicale atat de raspandite in viata lor. Aceasta legenda este consemnata si de Alexandru Vlahuta in "Romania Pitoreasca", 1901, prin descrierea zeului protector Zamolxe care indemna poporul dac la lupta, pentru apararea gliei stramosesti impotriva cotropitorilor, iar "stropii ce se preling si picura si azi din steiurile acestea sunt lacrimile lui", care deplang soarta poporului dac cucerit de romani.<br><br>
</p>
<b><font size=6>Cheile Costeștiului</b></font><br><br>
<img src="galerie/costesti.jpg" width=60%><br>
<p>
Cheile raului Costesti la est de Arnota, pentru a putea admira trebuie urmat drumul forestier spre Prislop. Singurii care pot strabate cheile sunt pescarii sau curajosii echipati corespunzator. Cheile Costestiului ofera turistului urmatoarele puncte turistice:<br>
-biserica 44 de Izvoare <br>
-ecosistemul Carligelor Mici se patrunde pe o poteca ce porneste chiar de langa biserica <br>
-ecosistemul Sacii cu Lana,spre care se accede din drumul forestier la circa 1km de Carligele Mari,de unde se urca spre est spre fagii seculari spre stancile colturoase,privite dispre Costesti au aspectul unor saci.Spre deosebire de cheile Bistritei,cele ale Costestiului nu au pesteri,cu o singura exceptie in punctul La molizi,se afla o grota de dimensiuni mici unde s-au ascuns partizanii in 1949. Din zona cheilor se poate pleca pe trei trasee turistice: <br>
-spre muntele Scarisoara apoi spre schiturile Patrunsa si Pahomie <br>
-spre muntele Scarisoara apoi spre culmile Piatra Buila Vanturarita <br>
-spre obarsia Raului Costesti si apoi spre culmea muntilor Capatana Biserica parohiala Secaturi este situata in catunul cu acelasi nume <br>
Spre biserica se poate ajunge din Drumul Judetean 646 A, Costesti-Pietreni. A fost construita intre anii 1913-1919. Biserica parohiala Costesti este amplasata in centrul civic Costesti, este cel mai tanar lacas de cult de pe raza comunei succesoarea a doua biserici vechi cea din fostul catun Grusetu si cea de lemn a satului Varatici.<br>
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