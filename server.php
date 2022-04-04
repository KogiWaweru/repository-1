

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

<?php 


//Declare the global arrays to use in the file
$username = "";
$email = "";
$phone = "";
$county = "";
$address = "";
$fullnames = "";
$filename = "";
$errors = array();

//Take the form values when user clicks register button
if (isset($_POST['reg_user'])){
       	
       	if(isset($_POST['uploadfile'])){
       		$filename = $_FILES["uploadfile"]['name'];
       	$tempname = $_FILES["uploadfile"]["tmp_name"]; 
       	$folder = "photos/".$filename;
       	move_uploaded_file($tempname, $folder);
       	}

	//take the form values
	$fullnames = mysqli_real_escape_string($conn,$_POST['fullnames']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$county = mysqli_real_escape_string($conn,$_POST['county']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$password_1 = mysqli_real_escape_string($conn,md5($_POST['password_1']));
	$password_2 = mysqli_real_escape_string($conn,md5($_POST['password_2']));
	$photo = $filename;
	

   //Check if the form fileds are empty or have aany errors
	if(empty($fullnames)){
		array_push($errors, "name is required");
	}
	if(empty($username)){
		array_push($errors, "username is required");
	}
	if(empty($email)){
		array_push($errors, "email is required");
	}
	if(empty($phone)){
		array_push($errors, "phone is required");
	}
	if(empty($county)){
		array_push($errors, "county is required");
	}
	if(empty($address)){
		array_push($errors, "address is required");
	}
	if(empty($password_1)){
		array_push($errors, "password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords did not match");
	}



	//check if there exists such a user in the database by querying the database
	$query_1 = "SELECT * FROM users WHERE username = '$username' OR email = '$email'  LIMIT 1";
	$result = mysqli_query($conn, $query_1);
	$user = mysqli_fetch_assoc($result);
	if($user){
		if($user['username'] === $username){
			array_push($errors, "username already exists");
		}
		if ($user['email'] === $email) {
			array_push($errors, "Email already exists");
			}
	}

	//count if any errors occured
	if (count($errors) == 0) {
		//encrypt the password
		$pass_e = md5($password_1);
		//insert the values to the database
		$query_2 = "INSERT INTO users (fullnames,username,email,phone,address,county,password,profile) VALUES ('$fullnames','$username','$email','$phone','$address','$county','$pass_e','$filename')";
		$ress = mysqli_query($conn,$query_2);

		//the user has been registered in our database lets direct them to the login page
		header('Location:login.php');
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
	}else{
		array_push($errors,"Wrong password or username combination");
	}

}


// code for logging in the user
// check if the login_user button is clicked
if(isset($_POST['login_user'])){


	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);


	if(empty($username)){
		array_push($errors, "username is required");
	}
	if(empty($phone)){
		array_push($errors, "phone is required");
	}

	// header("Location: index.php");

	if(count($errors) == 0){
		$loginQuery = "SELECT * FROM users WHERE username = '$username' AND phone = '$phone' ";
	$login_result = mysqli_query($conn,$loginQuery);
   $rows = mysqli_num_rows($login_result);
	if ($rows) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header("Location: index.php");
	}else{
      array_push($errors, "Wrong username or username combination");
	}
		}
	}

	
	






?>