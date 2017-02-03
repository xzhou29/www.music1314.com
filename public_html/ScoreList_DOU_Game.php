	<?php
		$servername = "166.62.10.185";
		$username = "xzhou29";
		$password = "Xclzx0628";
		$dbName = "ScoreList_DOU_Game";
		$conn = new mysqli($servername, $username, $password, $dbName);

		if(!$conn){
			die("Connection failed." . mysqli_connect_error());
		}

		$sql = "SELECT ID, Name, Score FROM ScoreList ORDER BY Score DESC";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "ID: ".$row['ID']."|"."Name: ".$row['Name']."|"."Score: ".$row['Score'].";"."<br>";
			}
		}

	?>
