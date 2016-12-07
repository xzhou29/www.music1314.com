

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



					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Videos<span class="caret"></span></a>

						<ul class="dropdown-menu">

							<li><a href="http://www.music1314.com/Videos.html">Random Band</a></li>

						

						</ul>	

					</li>			



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

	<div align="center">

	    <p>

        <h3> File must be jpg and less than 10 MB </h3>

	    </p>



	    <form action="uploadPictures.php" method="POST" enctype="multipart/form-data">

	        <input type="file" name="file"><br><br>



	         <label>Rename your picture: <br> <input type="text" name="rename" size="36"> .jpg</label><br><br>



	        <input type="submit" value="submit">

	    </form>

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

 



<?php

$name = $_FILES['file']['name'];

//$extension = strtolower(end(explode('.', $name)));

$extension = strtolower(substr($name, strpos($name, '.') + 1));



$type = $_FILES['file']['type'];

$size = $_FILES['file']['size'];

$tmp_name = $_FILES['file']['tmp_name'];

$max_size = 10000000;

$rename = $_POST["rename"];



if (isset($name) && isset($rename)) {

    $fileSize = $size / 1024;

    echo $fileSize." kb "; 



    $fileName = $rename.".jpg";

    if(!empty($name)){

        if(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'JPG' || $extension == 'JPEG') && ($type == 'image/jpeg' || $type == 'image/jpg') && $size <= $max_size) {

            $location = 'uploadPictures/';

            if (move_uploaded_file($tmp_name, $location.$fileName)) {

          		echo "Uploaded";

                $write = fopen("uploadPictures.txt", "a+");

                fwrite($write, "

                    <div class='col-md-3'>

                        <div class='thumbnail'>

                            <a class='fancybox' rel='group' href='uploadPictures/$fileName'>       

                            <img src='uploadPictures/$fileName' alt='' style='width: 480px; height: 360px;'>

                            </a>                    

                        </div>

                        <p class='caption' align='center'>$rename</p> 

                    </div>");

                fclose($write);

                header("Location: http://music1314.com/Gallery.php/", true, 301); 

                exit;

            } 

            else {

                echo "There was an error!";

            }

        } 

        else {

            echo 'File must be jpg and must be less than 10 MB'; 

        }

    } 

    else{

        echo 'Please choose a file';

    }

}

?>