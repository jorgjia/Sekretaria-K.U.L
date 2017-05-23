
<?php 
	session_start();
// bej te mundur lidhjene  databases
	$db = mysqli_connect("localhost", "root", "", "sekretaria");

	if (isset($_POST['register_btn'])) {

		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		
		$vendlindja = mysql_real_escape_string($_POST['vendlindja']);
		$dega = mysql_real_escape_string($_POST['dega']);
		$viti = mysql_real_escape_string($_POST['viti']);
		
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);

		if ($password == $password2) {
			// ckrijoj userin
			$password = md5($password); //ketu behet hashimi i passswordit
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "Mirserdhet";
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['vendlindja'] = $vendlindja;
			$_SESSION['dega'] = $dega;
			$_SESSION['viti'] = $viti;
			header("location: profili.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "fjalkalimet nuk jane te njejete";
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

 background-color: pink;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
  
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 510px;
}


.cancelbtn,.signupbtn {
    float: left;
    width: 600px;
}

/* Add padding to container elements */
.container {
   
    width:550px;
    margin-left: 390px;
}


	



.container {
    padding: 25px;

}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
	
	body{

background-image:url(http://i.telegraph.co.uk/multimedia/archive/02073/gr_2073908b.jpg);
background-repeat:no-repeat;
 background-size: cover;

    }
	
	
	</style>

</head>
<body >
	<h1   style="text-align:center;color:black;">  Mireserdhet ne Sekretarine Online Logos</h1>    			

<h2 style="text-align:center;">Rregjistrohu</h2>

<form method="post" action="register.php">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="fusni emrin" name="username" id="username"required>
    <label><b>Email</b></label>
    <input type="text" placeholder="email" name="email" id="email"required>
 <label><b>Vendlindja</b></label>
    <input type="text" placeholder="vendlindja" name="vendlindja" id="email"required>
 <label><b>Viti</b></label>
    <input type="text" placeholder="viti" name="viti" id="email"required>
     <label><b>Dega</b></label>
    <input type="text" placeholder="dega" name="dega" id="email"required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password2" id="password"required>
<label><b>REpaeat Password</b></label>
    <input type="password" placeholder="Perserit kodin" name="password" id="password"required>
   
    <input type="checkbox" checked="checked"> Remember me
    <p>Ose Logohu ketu <a href="login.php">ketu</a>.</p>

    <div class="clearfix">
   
      <button type="submit" name="register_btn">Register</button>
      <p id="msg"></p>
    </div>
  </div>
</form>
	<div class="row" style="background-color:#8E2727;height:70px;">
                    <div class="col-md-12">
                        <div class="footer-copyright">&2017 Design by Gjorgjia Metellari.</div>
                    </div>
                </div>
            </div>
	
	</body>
	</html>