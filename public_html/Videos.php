<!DOCTYPE html>

<html lang = "en">

<head>

	<title> Random Community </title>	

	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="bootstrap.css" ">

	<!-- Optional theme <link rel="stylesheet" href="bootstrap-theme.min.css" > -->



</head>

<body class="bg-info">

	<nav class="navbar navbar-inverse">

		<div class="containers-fluid">

			<!-- Logo-->

			<div class="navbar-header">

				<a href="http://www.music1314.com" class="navbar-brand"> <strong><h1>Welcome to Random Community </h1></strong></a>			

			</div>

			<br><br><br>

			<div>

				<ul class="nav navbar-nav">
					<li> <a href="http://www.music1314.com"> Home</a></li>
					<li> <a href="http://www.music1314.com/Gallery.php">Gallery</a></li>
					<li> <a href="http://www.music1314.com/Videos.php">Videos(Upload)</a></li>
					<li><a href="http://www.music1314.com/Videos_youtube.html">Youtube Videos</a></li>
					<li><a href="http://www.music1314.com/OriginalMusic.html">Original Music</a></li>	

			

					<!-- Drop down menu 1-->

					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Games<span class="caret"></span></a>

						<ul class="dropdown-menu">

							
							<li><a href="Space_Shooter.html">Space Shooter(Unity Tutorial Extension)</a></li>

							<li><a href="http://www.music1314.com/PC_Games.html">Defenders of University(Tower Defense)</a></li>

						

						</ul>	

					</li>	

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales Report(School Project)<span class="caret"></span></a>
						<ul class="dropdown-menu">
							
							<li><a href="PurchaseHistory.php">Purchase History</a></li>

							<li><a href="ProductLineSales_Report.php">ProductLine Sales Report</a></li>

							<li><a href="TotalValueForProduct.php">Total Value For Product</a></li>
						
						</ul>	
					</li>				

				</ul>

			</div>

		</div>

	</nav>

		<h3 align="center">If you want to upload your video to this site, please click "Upload Videos":<li><a href="http://www.music1314.com/uploadVideos.php"> Upload Videos</a></li> </h3>

		<div align="center" class="row">

				<?php $read = fopen("uploadVideos.txt", "r+t");

			    while(!feof($read)) {

			        echo fread($read, 1024);

			    }

				fclose($read);

			?>	



		</div>

			

	<div class="footer">

		<p>Copyright &copy; 2015 - <script type="text/javascript">document.write((new Date()).getFullYear())</script> <strong>Random Community</strong></p>

	</div>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="bootstrap.min.js"></script>

</body>

</html>



