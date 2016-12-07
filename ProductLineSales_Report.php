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

<?php
$servername = "localhost";
$username = "xzhou29";
$password = "Xclzx0628";
$dbname = "COSC3380";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ProductLineName, P_Name, totalSale FROM ProductLineSales GROUP BY ProductLineName, P_Name;";
$result = $conn->query($sql);

?>  

     <div align="center"><h2>ProductLine Sales Report</h2> 

   <TABLE BORDER="1" BGCOLOR="CCFFFF" width='50%' cellspacing='1' cellpadding='0' bordercolor="black" border='1'>
            <TR>
             	<TH bgcolor='#DAA520'> <font size='2'/>Product Name </TH>
                <TH bgcolor='#DAA520'> <font size='2'/>Product_Line Name </TH>
                <TH bgcolor='#DAA520'><font size='2'/>Quantity</TH>
            
            </TR>
             <?php 
                if ($result->num_rows > 0) {
     // output data of each row
			     while($row = $result->fetch_assoc()) {
                 ?> 

            <TR>
             	<TD> <font size='2'/><center>
               <?php  echo "<br> ". $row["ProductLineName"] . "<br>"; ?>
                 </center></TD>

                <TD> <font size='2'/><center>
               <?php  echo "<br> ". $row["P_Name"] . "<br>"; ?>
                 </center></TD>

                <TD> <font size='2'/><center>
	 				<?php  echo "<br> ". $row["totalSale"] . "<br>"; ?>
                </center></TD>

            </TR>
            <?php
       			 }
       			}
	 		?>


        </TABLE>
        </div>
<?php 
$conn->close();
?>   

<div class="footer">
        <p>Copyright &copy; 2015 - <script type="text/javascript">document.write((new Date()).getFullYear())</script> <strong>Random Community</strong></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>