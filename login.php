<?php 
	session_start();

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "sekretaria");

	if (isset($_POST['login_btn'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		$password = md5($password); // hashim
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['vendlindja'] = $vendlindja;
			$_SESSION['dega'] = $dega;
			$_SESSION['viti'] = $viti;
			header("location: profili.php"); //shkon tek rprofili
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sekretaria online</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style>
	body{


	background-image:url(http://i.telegraph.co.uk/multimedia/archive/02073/gr_2073908b.jpg);
background-repeat:no-repeat;
 background-size: cover;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 520px;
}


button:hover {
    opacity: 0.8;
}




.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 15%;
    border-radius: 50%;
}


.container {
    padding: 16px;
    width:550px;
      margin-left: 390px;
}


span.psw {
    float: right;
    padding-top: 16px;
}
	
	</style>

</head>
 
	  <?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?><body>
	<form method="post" action="login.php">
  <div class="imgcontainer">
    <img src="https://www.introducertoday.co.uk/profiles/094437.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

     <button type="submit" name="login_btn" value="login">login</button>
    <input type="checkbox" checked="checked"> Remember me<p id="mesazhi"></p>
  </div>

  
   
    
  
</form>
   
			
								</body>
								</html>