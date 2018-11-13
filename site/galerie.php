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
							<li class="active"><a href="galerie.php">GALERIE</a></li>
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
				
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						<li data-target="#carousel-example-generic" data-slide-to="6"></li>
						<li data-target="#carousel-example-generic" data-slide-to="7"></li>
						<li data-target="#carousel-example-generic" data-slide-to="8"></li>
						<li data-target="#carousel-example-generic" data-slide-to="9"></li>
						<li data-target="#carousel-example-generic" data-slide-to="10"></li>
						<li data-target="#carousel-example-generic" data-slide-to="11"></li>
						<li data-target="#carousel-example-generic" data-slide-to="12"></li>
						<li data-target="#carousel-example-generic" data-slide-to="13"></li>
						<li data-target="#carousel-example-generic" data-slide-to="14"></li>
						<li data-target="#carousel-example-generic" data-slide-to="15"></li>
						<li data-target="#carousel-example-generic" data-slide-to="16"></li>
						<li data-target="#carousel-example-generic" data-slide-to="17"></li>
						<li data-target="#carousel-example-generic" data-slide-to="18"></li>
						<li data-target="#carousel-example-generic" data-slide-to="19"></li>
						<li data-target="#carousel-example-generic" data-slide-to="20"></li>
						<li data-target="#carousel-example-generic" data-slide-to="21"></li>
						<li data-target="#carousel-example-generic" data-slide-to="22"></li>
						<li data-target="#carousel-example-generic" data-slide-to="23"></li>
						<li data-target="#carousel-example-generic" data-slide-to="24"></li>
						<li data-target="#carousel-example-generic" data-slide-to="25"></li>
						<li data-target="#carousel-example-generic" data-slide-to="26"></li>
						<li data-target="#carousel-example-generic" data-slide-to="27"></li>
						<li data-target="#carousel-example-generic" data-slide-to="28"></li>
						<li data-target="#carousel-example-generic" data-slide-to="29"></li>
						<li data-target="#carousel-example-generic" data-slide-to="30"></li>
						<li data-target="#carousel-example-generic" data-slide-to="31"></li>
						<li data-target="#carousel-example-generic" data-slide-to="32"></li>
						<li data-target="#carousel-example-generic" data-slide-to="33"></li>
						<li data-target="#carousel-example-generic" data-slide-to="34"></li>
						<li data-target="#carousel-example-generic" data-slide-to="35"></li>
						<li data-target="#carousel-example-generic" data-slide-to="36"></li>
						<li data-target="#carousel-example-generic" data-slide-to="37"></li>
						<li data-target="#carousel-example-generic" data-slide-to="38"></li>
						<li data-target="#carousel-example-generic" data-slide-to="39"></li>
						<li data-target="#carousel-example-generic" data-slide-to="40"></li>
						<li data-target="#carousel-example-generic" data-slide-to="51"></li>
						<li data-target="#carousel-example-generic" data-slide-to="52"></li>
						<li data-target="#carousel-example-generic" data-slide-to="53"></li>
						<li data-target="#carousel-example-generic" data-slide-to="54"></li>
						<li data-target="#carousel-example-generic" data-slide-to="55"></li>
						<li data-target="#carousel-example-generic" data-slide-to="56"></li>
						<li data-target="#carousel-example-generic" data-slide-to="57"></li>
						<li data-target="#carousel-example-generic" data-slide-to="58"></li>
						<li data-target="#carousel-example-generic" data-slide-to="59"></li>
						<li data-target="#carousel-example-generic" data-slide-to="60"></li>
						<li data-target="#carousel-example-generic" data-slide-to="61"></li>
						<li data-target="#carousel-example-generic" data-slide-to="62"></li>
						<li data-target="#carousel-example-generic" data-slide-to="63"></li>
						<li data-target="#carousel-example-generic" data-slide-to="64"></li>
						<li data-target="#carousel-example-generic" data-slide-to="65"></li>
						<li data-target="#carousel-example-generic" data-slide-to="66"></li>
						<li data-target="#carousel-example-generic" data-slide-to="67"></li>
						<li data-target="#carousel-example-generic" data-slide-to="68"></li>
						<li data-target="#carousel-example-generic" data-slide-to="69"></li>
						<li data-target="#carousel-example-generic" data-slide-to="70"></li>
						<li data-target="#carousel-example-generic" data-slide-to="71"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="galerie/beusnita.jpg" alt="poza_1">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cheilecarsului2.jpg" alt="poza_2">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/susara.jpg" alt="poza_3">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cheilenerei.jpg" alt="poza_4">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cascada.jpg" alt="poza_5">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/mar.jpg" alt="poza_6">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/semering.jpg" alt="poza_7">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/catedrala.jpg" alt="poza_8">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/hidro.jpg" alt="poza_9">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/arad.jpg" alt="poza_10">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/felix.jpg" alt="poza_11">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/ursi.jpg" alt="poza_12">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/zoo.jpg" alt="poza_13">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/palat.jpg" alt="poza_14">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/bai.jpg" alt="poza_15">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/moneasa.jpg" alt="poza_16">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/bohodei.jpg" alt="poza_17">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/manastire.jpg" alt="poza_18">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/mamaia.jpg" alt="poza_19">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/delta.jpg" alt="poza_20">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/techirghiol.jpg" alt="poza_21">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/eforiesud.jpg" alt="poza_22">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/maria.jpg" alt="poza_23">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/muzeu.jpg" alt="poza_24">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/macin.jpg" alt="poza_25">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/salina.jpg" alt="poza_26">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/rodnei.jpg" alt="poza_27">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/lac.jpg" alt="poza_28">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/coco.jpg" alt="poza_29">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/sighet.jpg" alt="poza_30">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/tatar.jpg" alt="poza_31">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/ana.jpg" alt="poza_32">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/borsa.jpg" alt="poza_33">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/neamt.jpg" alt="poza_34">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/bicaz.jpg" alt="poza_35">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/moldovita.jpg" alt="poza_36">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/sucevita.jpg" alt="poza_37">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cetate.jpg" alt="poza_38">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/duru.jpg" alt="poza_39">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/putna.jpg" alt="poza_40">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/mceahlau.jpg" alt="poza_41">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/slanic.jpg" alt="poza_42">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/arges.jpg" alt="poza_43">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/peles.jpg" alt="poza_44">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/babele.jpg" alt="poza_45">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cotroceni.jpg" alt="poza_46">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/horezu.jpg" alt="poza_47">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/bistrita.jpg" alt="poza_48">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/infinit.jpg" alt="poza_49">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/oltet.jpg" alt="poza_50">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/chei.jpg" alt="poza_51">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/corvin.jpg" alt="poza_52">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/creasta.jpg" alt="poza_53">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/padure.jpg" alt="poza_54">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/sibiu.jpg" alt="poza_55">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/trans.jpg" alt="poza_56">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/viscri.jpg" alt="poza_57">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/tran.jpg" alt="poza_58">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/tihuta.jpg" alt="poza_59">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/sfinx.jpg" alt="poza_60">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/pestera.jpg" alt="poza_61">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/parlament.jpg" alt="poza_62">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/imag2.jpg" alt="poza_63">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/imag1.jpg" alt="poza_64">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/histria.jpg" alt="poza_65">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/domneasca.jpg" alt="poza_66">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/costesti.jpg" alt="poza_67">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/cheilecarasului.jpg" alt="poza_68">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/calugara.jpg" alt="poza_69">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/bran.jpg" alt="poza_70">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/ateneu.jpg" alt="poza_71">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
						<div class="item">
							<img src="galerie/arc.jpg" alt="poza_72">
							<div class="carousel-caption">
								<h3>...</h3>
								<p>...</p>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				
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