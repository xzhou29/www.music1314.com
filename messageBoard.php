<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>



	<form action="" method="post" >

	<label>Name: <br> <input type="text" name="name" size="36"></label><br><br>

	<label>Content:<br><textarea cols="35" rows="5" name="mes"> </textarea></label><br><br>

	<input type="submit" name="post" value="Post" class="texty">

	</form>



</body>

</html>



<?php

$name = $_POST["name"];

$text = $_POST["mes"];

$post = $_POST["post"];

$userName = "User： ";

$comment ="Comment: ";



date_default_timezone_set('America/Chicago');

$time = date('Y-m-d   h:i:s');



if($name !="" && $text !=""){

	if ($post) {

		$write = fopen("com.txt", "a+");

		fwrite($write, "<u><b> $time <br> $userName $name </b></u><br> $comment $text <br><br>");

		fclose($write);

		

		#display comments: 

		$read = fopen("com.txt", "r+t");

		echo "All comments:<br><br> ";

		

		while(!feof($read)) {

			echo fread($read, 1024);

		}

		fclose($read);

		$done = "set";

	}

	

	else{

		#display comments:

		$read = fopen("com.txt", "r+t");

		echo "All comments:<br><br>";

		while(!feof($read)) {

			echo fread($read, 1024);

		}

		fclose($read);

	}



}

else {

	echo "Pleasse write your name and message!!!<br>";

	#display comments:

		$read = fopen("com.txt", "r+t");

		echo "All comments:<br><br><br>";

		while(!feof($read)) {

			echo fread($read, 1024);

		}

		fclose($read);



}

if(isset($done)) {

	header('Location: http://www.music1314.com'); exit();

}

?>