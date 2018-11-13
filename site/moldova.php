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
							<li><a href="http://www.turistinfo.ro/zona-moldova/cazare-hoteluri-vile-pensiuni-zona-moldova.html" target="blank">CAZARE</a></li>
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
<b><font size=6>Mănăstirea Neamț</b></font><br><br>
<font size=4>
<img src="galerie/neamt.jpg" width=60%><br>
<p>
Manastirea Neamt este cunoscuta in lume ca una dintre cele mai remarcabile opere de arhitectura feudala romaneasca.
Marimii sale unicat (40,5 m lungime si 23 m inaltime) i se adauga rolul deosebit de benefic pe care l-a avut accasta manastire de-a lungul secolelor in promovarea culturii, a artelor si a invatamantului romanesc.
Arzatorea credinta cu care Stefan a inchinat lui Dumnezeu aceasta manastire: "Doamne Iisuse Hristoase, primeste acest hram, care s-a zidit cu ajutorul Tau intru slava Sfintei si slavitei de la pamant la cer Inaltarea Ta si Tu Stapane acopera-ne cu mila Ta de acum si pana in veac...", a fost astfel rasplatita din plin.
Inaugurarea (sfintirea) locasului a ordonat-o Stefan cel Mare si Sfant dupa stralucita victorie pe care o repurtase in Codrii Cosminului asupra hulpavului rege polon Ian Olbracht.
Se stie insa ca Stefan multumea lui Dumnezeu nu numai urmare unor victorii ci si a infrangerii suferite spre smerenia sa.
La 11 noiembrie 1997, Neamtul a sarbatorit de la existenta sa, o jumatate de mileniu. Daca este sa deosebim din noianul momentelor de glorie ale acestei insorite manastiri, doar doua momente, acestea ar putea fi situate, unul in sec. XVI si celalalt in sec. XVIII: secolul XVI face epoca in aceasta.manastire prin prezenta cronicarilor Macarie si Eftimie, incepatori ai istoriografiei romane.<br><br>
</p>
<b><font size=6>Pasul Tihuța</b></font><br><br>
<img src="galerie/tihuta.jpg" width=60%><br>
<p>
Pasul Tihuta (denumit si Pasul Bargau) este localizat in sud-estul Muntilor Bargau, la o altitudine de 1227 m. Este strabatut de Drumul european E58 / drumul national DN17, principala cale de legatura dintre Transilvania si Moldova, care asigura legatura intre Bistrita si Vatra Dornei.
In pasul Tihuta se gaseste statiunea turistica Piatra Fantanele (1201 m). Aici se afla Complexul Dracula.<br><br>
</p>

<b><font size=6>Cheile Bicazului</b></font><br><br>
<img src="galerie/bicaz.jpg" width=60%><br>
<p>
Drumul care leaga Transilvania de Moldova, nu este un drum oarecare ci este o minunatie a naturii ce se numeste: Cheile Bicazului! Cel mai apropiat oras fiind Bicazul, care se afla la aproximativ 20 km de defileu, situata in partea centrala a muntilor Hasmas, Cheile Bicazului reprezinta una dintre cele mai atragatoare zone turistice ale Romaniei. Apartinand Carpatilor Orientali fac legatura intre judetele Harghita si Neamt. Cheile Bicazului fac parte din Parcul National "Cheile Bicazului - Hasmas", in cadrul careia putem aminti si ariile protejate: Lacul Rosu, Cheile Sugaului, Hasmasu Mare - Piatra Singuratica si Hasmasu Negru.<br><br>
</p>
<b><font size=6>Mănăstirea Moldovița</b></font><br><br>
<img src="galerie/moldovita.jpg" width=60%><br>
<p>
Manastirea Moldovita este una din vechile asezari calugaresti, cu un important si glorios trecut istoric, strajuitoare de veacuri la hotarul Moldovei de nord, situata in comuna Vatra Moldovitei la o distanta de circa 15 km de comuna Vama.
Biserica pictata a manastirii este inscrisa pe lista patrimoniului cultural mondial UNESCO.
Arhitectura bisericii cu hramul "Buna Vestire" de la Manastirea Moldovita imbina elemente de arta bizantina si gotica. Ea continua stilul arhitectonic al manastirilor moldovenesti, stil cristalizat in epoca lui Stefan cel Mare. Ctitoria lui Petru Rares aduce in plus dimensiunile mai mari, tendinta de inaltare si de zveltete. Elemente tipice goticului tarziu transilvanean, care pot fi sesizate aici, dovedesc ca la constructie au participat si mesteri pietrari din Ardeal.<br><br>
</p>
<b><font size=6>Mănăstirea Sucevița</b></font><br><br>
<img src="galerie/sucevita.jpg" width=60%><br>
<p>
Manastirea Sucevita este o manastire din Romania, situata la 18 km de Radauti (judetul Suceava). Traditia aseaza pe valea raului Sucevita, intre dealuri, o biserica din lemn si o schivnicie de pe la inceputul veacului al XVI-lea.
Legenda spune ca, mai tarziu, pentru rascumpararea a cine stie caror pacate, o femeie a adus cu carul ei tras de bivoli, timp de treizeci de ani, piatra necesara actualei constructii. Documentar, manastirea este atestata la 1582, in vremea domnitorului Petru Schiopul.
Monumentul este in realitate ctitorie comuna a familiilor Movilestilor (mari boieri, carturari si chiar domnitori ai Moldovei si Tarii Romanesti, sec. XVI-XVII). Construit in stilul arhitecturii moldovenesti - imbinare de elemente de arta bizantina si gotica, la care se adauga elemente de arhitectura ale vechilor biserici de lemn din Moldova, edificiul, de mari proportii, pastreaza planul trilobat si stilul statornicit in epoca lui Stefan cel Mare, cu pridvorul inchis. Nota aparte fac celelalte doua mici pridvoare deschise (stalpi legati prin arcuri in acolada) plasati mai tarziu pe laturile de sud si de nord; prin excelenta "muntenesti", ele constituie un evident ecou al arhitecturii din Tara Romaneasca. Se mentin firidele absidelor, chenarele gotice din piatra si ocnitele numai la turla, inclusiv pe baza ei stelata. Incinta este un patrulater (100x104 m) de ziduri inalte (6 m) si groase (3 m) prevazute cu contraforturi, metereze, drum de straja, patru turnuri de colt si unul cu paraclis peste gangul intrarii (stema Moldovei); se mai afla incaperi ale vechii case domnesti si beciuri.<br><br>
</p>
<b><font size=6>Cetatea Neamțului</b></font><br><br>
<img src="galerie/cetate.jpg" width=60%><br>
<p>
Este o cetate medievala din Moldova, aflata la marginea de nord-vest a orasului Targu Neamt (in nord-estul Romaniei). Ea se afla localizata pe stanca Timus de pe Culmii Plesului (numita si Dealul Cetatii), la o altitudine de 480 m si la o inaltime de 80 m fata de nivelul apei Neamtului. De aici, strajuia valea Moldovei si a Siretului, ca si drumul care trecea peste munte in Transilvania.
Cetatea Neamt facea parte din sistemul de fortificatii construit in Moldova la sfarsitul secolului al XIV-lea, in momentul aparitiei pericolului otoman. Sistemul de fortificatii medievale cuprindea asezari fortificate (curti domnesti, manastiri cu ziduri inalte, precum si cetati de importanta strategica) in scop de aparare, intarite cu ziduri de piatra, valuri de pamant sau avand santuri adanci.
Cetatea a fost construita la sfarsitul secolului al XIV-lea de Petru I Musat, a fost fortificata in secolul al XV-lea de Stefan cel Mare si distrusa in secolul al XVIII-lea (1718) din ordinul domnitorului Mihai Racovita.<br><br>
</p>

<b><font size=6>Izvorul Muntelui</b></font><br><br>
<img src="galerie/lac.jpg" width=60%><br>
<p>
Lacul de acumulare "Izvorul Muntelui", cunoscut si sub numele de "Lacul Bicaz", este cel mai mare lac artificial (antropic) amenajat pe raurile interioare din Romania. Situat pe cursul superior al raului Bistrita, lacul s-a format ca urmare a construirii barajului hidroenergetic cu acelasi nume. Din el se alimenteaza centrala hidroelectrica Bicaz-Stejaru, echipata cu sase generatoare.
Priza de apa pentru tunelul de aductiune se afla la 1,5 km departare de baraj, galeria de aductiune strabatand muntele Botosanu asigurand transportul apei spre centrala electrica "V.I. Lenin" de la Stejaru, astazi "Dimitrie Leonida". Castelul de echilibru, amplasat pe axul tunelului de aductiune, are o inaltime de 86 m.
Barajul nu este monobloc, ci este format din 30 de ploturi separate prin rosturi etansate amonte cu pene de beton armat si tole de cupru. Corpul acestuia este strabatut de kilometri de galerii, puturi de aerisire, nise de vizitare. Incaperi special amenajate adapostesc instalatii de actionare si comanda, echipamente de urmarire, monitorizare seismica si comportare a fiecarui element.
Suprafata lacului variaza functie de regimul de exploatare, fiind maxima cand panza de apa se ridica pana la cota maxima a barajului, situata la 516 m altitudine si minima (cca. 17 kmp) cand aceasta coboara pana la nivelul gurii de intrare a apei in canalul de aductiune, situat la 434 m altitudine.
Perimetrul mediu al lacului este de aproximativ 71 km.<br><br>
</p>
<b><font size=6>Cascada Duruitoarea</b></font><br><br>
<img src="galerie/duru.jpg" width=60%><br>
<p>
Situata in Masivul Ceahlau, in punctul numit Duruitoarea aflat la o altitudine de 1.270 m, Cascada Duruitoarea este formata pe Paraul Rupturii care izvoraste din golul alpin si se varsa in Valea Schitului si apoi in Lacul Bicaz. Cascada Duruitoarea are o cadere impresionanta de apa de 25-30 m inaltime pe fiecare cadere de apa.
Una dintre cele mai vizitate atractii turistice din Parcul National Ceahlau, Cascada Duruitoarea este accesibila pe traseul cu cruce rosie care coboara de la cabana Dochia spre statiunea Durau, traseu cu o lungime de 7,5 km, diferenta de nivel de 950m, durata de parcurgere de 4h 30min - 5h si grad mediu de dificultate.
Datorita debitului de apa asigurat de Paraul Rupturii impreuna cu afluentii lui si datorita caderii apei de la o inaltime de aproximativ 100m, vuietul asurzitor produs de cascada se aude de la mare departare si poate de aici provine numele de Cascada Duruitoarea. Zgomotul este cel mai puternic pe vreme ploiasa, cand debitul paraului Rupturii este crescut.
La baza cascadei este construita o scara de lemn pe care se poate urca aproximativ 30m pana pe o platforma care fragmenteaza cascada in doua coloane diferite de apa.
In primul prag al cascadei apele paraului au sapat prin eroziune marmite fluviale, iar a doua portiune rasfira apa ca un evantai peste stinca, de la o inaltime de 5 m.
Pentru pasionatii de alpinism si nu numai, Cascada Duruitoarea este una dintre cele mai frumoase si mai zgomotoase creatii ale naturii.<br><br>
</p>
<b><font size=6>Mănăstirea Putna</b></font><br><br>
<img src="galerie/putna.jpg" width=60%><br>
<p>
Manastirea Putna este un lacas monahal ortodox, unul din cele mai importante centre culturale, religioase si artistice romanesti. A fost supranumita "Ierusalimul Neamului Romanesc" (M.Eminescu).
Manastirea se afla la 33 km de orasul Radauti, in nordul Moldovei.
Manastirea a fost un important centru cultural; aici s-au copiat manuscrise si au fost realizate miniaturi pretioase. Lacasul detine un bogat muzeu manastiresc, cu broderii, manuscrise, obiecte de cult, icoane etc.
Aici este inmormantat Stefan cel Mare si Sfant (1457-1504).<br><br>
</p>
<b><font size=6>Munții Ceahlău</b></font><br><br>
<img src="galerie/mceahlau.jpg" width=60%><br>
<p>
Masivul Ceahlau este cel mai inalt din Muntii Bistritei din grupa Carpatilor Moldo-Transilvani, Carpatii Orientali. Este situat in extremitatea sudica a Muntilor Bistritei si este strabatut de paralela 47 latitudine nordica si de meridianul 25 longitudine estica. Ceahlaul este inconjurat de vai adanci in toate directiile: la N de Valea Bistricioarei, la E de Lacul Izvorul muntelui de acumulare, la S de Valea Bicazului si la V de vaile Bistrelor si a Pinticului. Altitudinea maxima din Ceahlau este atinsa de Vf. Ocolasu Mare, 1907m, al doilea vf. si cel mai important fiind Vf. Toaca, 1900m. Toti muntii din jurul Masivului Ceahlau nu depasesc 1500m alt., de aceea are caracterul de masiv.
Masivul Ceahlau este alcatuit din culmi laterale care nu depasesc 1600m alt.: pe versantul estic culmea Rachitis, la NE culmea Fantanele, iar la V culmea Picioru Schiop. Intre 1350m si 1700m alt. sunt pereti de stanca de max. 350m inaltime si sisteme stancoase, cum ar fi Zidul Ocolasului Mic la SE si S, cu alt. maxima de 1728m(Vf. Vanturis), stancaria Piatra Ciobanului si stancaria de sub Vf. Toaca, cu alt. maxima de 1790m(Piatra Ciobanului) si Stanilele Mici si Mari pe versantul de SV, sub Zidul Ocolasului Mare, cel mai inalt sistem stancos. Intre Ocolasul Mic si Ocolasul Mare exista un platou inferior, de max. 1 km lungime si 500m latime, de asemenea existand o treapta, stanca Coloana Dorica. Intre Vf. Ocolasul Mare si Vf. Toaca, cu o orientare S-N, se intinde platoul superior al Ceahlaului, avand o lungime de 6 km si o latime de max. 2 km. Pe acest platou superior se remarca 2 delusoare: Batca Ghedeonului(1845m alt.) si Vf. Lespezi(1805m alt.) Asadar Masivul Ceahlau are infatisarea unei mari cetati, cu ziduri si metereze, iar deasupra cele 2 varfuri.<br><br>
</p>
<b><font size=6>Slănic Moldova</b></font><br><br>
<img src="galerie/slanic.jpg" width=60%><br>
<p>
Statiunea Slanic Moldova, supranumita Perla Moldovei, este amplasata pe versantul estic al Carpatilor Orientali, intr-o depresiune strabatuta de raul Slanic. Are un climat de tranzitie, intre climatul dealului si cel subalpin, cu veri racoroase si ierni blande.
Acesta este tiparul folosit de majoritatea celor care promoveaza statiunea Slanic Moldova. Nu este de mirare ca mult timp turistii au intarziat sa apara. Lipsa unui marketing adecvat si aparitia in presa a unor articole voit nefavorabile (nedocumentate si neadevarate) au facut ca o buna perioada de timp Slanic Moldova sa intre intr-un con de umbra. Din pacate nu se poate da vina doar pe factorii externi. Au fost momente cand intr-adevar statiunea a intrat parca intr-o pasa neagra. Spatiile de cazare erau vandute, revandute, retrocedate, lasate in paragina, managament defectuos, orgolii si interese politice, fonduri blocate, etc.
Statiunea a depasit toate aceste probleme! Prea putin conteaza care au fost cauzele! Ceea ce conteaza sunt politicile si strategiile prin care Slanic Molodova va reusi sa devina un punct de atractie turistica nu numai pentru Romania, ci si o statiune de referinta pentru intreaga Europa.
In momentul de fata Slanic Moldova este mult mai mult decat o simpla statiune balneoclimaterica. Micii intreprinzatori care acum 10 ani au indraznit sa investeasca in Slanic Moldova fara nici un fel de garantii au devenit in timp adevarati manageri constienti de importanta calitatii serviciilor prestate. Astfel pe langa vechile hoteluri si vile s-au ridicat numeroase pensiuni agroturistice, care vin sa suplineasca oferta turistica a statiunii.<br>
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