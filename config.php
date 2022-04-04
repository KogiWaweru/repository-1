
<?php 

$servername = "localhost";
$dbusername = "root";
$dbpass = "";

//Check if the connection was made

$conn = mysqli_connect($servername,$dbusername,$dbpass);
mysqli_select_db($conn,"project_3");
if(!$conn){
	die("Could not connect to database" . mysqli_error());
}

 ?>