

<!DOCTYPE html>

<html lang = "en">

<head>

	<title>Random Community</title>

	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	

	<script   src="https://code.jquery.com/jquery-1.11.3.min.js"   integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="   crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="bootstrap.css" ">

	<!-- Optional theme <link rel="stylesheet" href="bootstrap-theme.min.css" > -->

	<style type="text/css">

		.thumbnail {

			width: 100%;

			overflow:hidden;

		}

		img: {

			-webkit-transition: all 0.5s ease;



		}

		img:hover {

			transform: scale(1.3);



		}

	</style>



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



	<div class="containter">

	<h3 align="center">If you want to upload your pictures to this Gallery, please click "Upload":<li><a href="http://www.music1314.com/uploadPictures.php"> Upload Pictures</a></li> </h3>

	

		<div class="row">

			<!-- <div class="col-md-3">

				<div class="thumbnail">

					<a class="fancybox" rel="group" href="Pictures/Random/7.jpg">		

					<img src="Pictures/Random/7.jpg" alt="" style="width: 480px; height: 480px;">

					</a>					

				</div>

				<p class="caption" align="center">7</p>	

			</div>-->

			<?php $read = fopen("uploadPictures.txt", "r+t");

			    while(!feof($read)) {

			        echo fread($read, 1024);

			    }

				fclose($read);

			?>		

		</div>

		



	</div>







	<div class="footer">

		<p>Copyright &copy; 2015 - <script type="text/javascript">document.write((new Date()).getFullYear())</script> <strong>Random Community</strong></p>

	</div>

	<script src="js/bootstrap.min.js"></script>

	<!-- Add jQuery library -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->

	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->

	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>



	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



	<script type="text/javascript">

		$(document).ready(function() {

			$(".fancybox").fancybox();

		});

	</script>

	



</body>

</html>





