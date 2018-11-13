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
				<nav class="navbar navbar-inverse">
					
				<?php
				//LOGAT
				include 'forum/connect.php';
				//$_SESSION['signed_in']=false;
				if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
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
							<li class="active"><a href="harta.html">HARTĂ</a></li>
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
					
					<img id="harta" src="harta.jpg" class="img-responsive center-block" alt="Responsive image" usemap="#map" />
					<map name="map">
						<area shape="poly" coords="43,251,43,251,49,237,60,236,74,241,88,225,103,194,183,60,210,62,235,102,271,112,252,149,228,160,215,156,212,162,216,170,211,178,219,206,208,230,226,236,241,258,216,267,207,262,188,262,182,277,149,265,89,253,59,260,46,249,139,215"  href="crisana.php" />
						<area shape="poly" coords="150,265,150,265,136,263,145,262,134,263,123,263,112,258,102,255,92,253,77,252,69,253,62,258,67,255,55,260,55,260,47,250,38,251,38,251,26,246,21,249,13,247,8,250,13,261,25,277,37,292,42,297,49,295,47,304,47,317,50,324,47,330,52,334,74,355,76,355,85,360,102,369,105,374,100,385,94,390,106,403,94,411,99,419,109,419,111,430,147,440,156,456,173,437,181,429,182,416,200,385,194,378,199,365,203,350,193,340,189,326,186,315,194,307,181,289,179,278,160,274,160,274,137,300,161,275,161,275,163,275,163,275,183,280,183,280,148,333,142,305"  href="banat.php" />
						<area shape="poly" coords="240,261,226,266,211,266,198,262,186,268,181,279,185,284,188,297,192,305,185,312,188,322,191,330,197,340,204,351,198,363,206,363,217,362,229,362,239,362,250,360,262,358,271,357,282,349,292,344,297,337,312,336,354,330,361,329,388,328,402,329,430,348,468,340,483,338,498,331,511,321,518,296,526,282,521,265,510,250,505,239,494,228,490,204,484,194,483,185,477,173,469,163,457,155,453,149,434,138,420,135,413,134,409,122,405,99,393,89,377,89,369,89,356,88,338,90,330,90,315,84,303,93,293,100,282,106,272,114,266,121,263,132,261,139,256,146,241,154,233,158,219,156,212,163,212,184,217,207,209,217,210,227,217,230,224,236,235,239,234,249,239,253"  href="transilvania.php" />
						<area shape="poly" coords="561,309,615,338,648,346,670,339,660,244,668,218,657,175,652,152,619,117,604,102,583,69,557,16,540,6,516,13,507,17,501,31,495,39,465,43,420,50,409,66,398,73,407,91,405,108,410,131,433,140,453,148,477,168,494,201,500,228,511,250,525,286,522,306,537,321,555,308,566,220"  href="moldova.php" />
						<area shape="poly" coords="395,73,376,57,368,42,346,47,325,41,306,39,280,36,269,36,254,25,247,36,232,35,218,58,214,62,233,103,253,104,271,114,300,100,315,80,322,78,332,92,351,90,376,87,398,91,407,90,339,72"  href="maramures.php" />
						<area shape="poly" coords="338,331,346,389,335,415,342,443,337,464,382,549,362,547,332,556,269,534,239,539,220,535,219,520,233,507,202,491,200,481,184,463,191,452,212,451,203,440,182,431,204,383,195,370,212,362,262,354,281,350,308,336,338,333,271,419"  href="oltenia.php" />
						<area shape="poly" coords="593,501,544,507,510,517,484,533,466,550,433,559,408,557,387,551,364,516,337,464,345,445,336,413,348,383,343,365,339,352,341,334,374,326,413,331,428,351,465,341,510,323,521,305,540,320,563,308,619,341,653,348,668,373,663,416,648,425,660,445,666,461,659,476,636,491,504,389"  href="muntenia.php" />
						<area shape="poly" coords="711,543,711,482,746,420,789,406,795,365,791,348,781,338,770,333,756,337,739,348,724,351,715,361,684,353,674,340,658,342,652,358,670,377,660,415,649,418,660,456,656,481,640,486,609,495,594,499,625,512,653,514,665,537,701,542,693,457"  href="dobrogea.php" />
					</map>
					
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