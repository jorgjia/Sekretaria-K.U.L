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
	input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}



/* Add padding to container elements */
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
	#menu{
	margin-left:530px;
	font-size:18px;
	margin-bottom:19px;
	}
	#nav{
	background-color:
	white;
	height:50px;
	}
	
	</style>

</head>
 <nav  id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/imageedit_7_6000938817.png" ></a>
	  <?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>
	
    </div>
	
    <ul class="nav navbar-nav" id ="menu">
	<br>

      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Sherbimet</a></li>
      <li><a href="#">Deget</a></li>
      <li><a href="#">Ambjentet</a></li>
    </ul>
  </div>
</nav>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slide-bkg-date.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"style="color:#8E2727;margin-left:140px;"> Ju lutem logohuni! </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
		<div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<h2>Login</h2>

						<form method="post" action="login.php" style="border:1px solid #ccc;width:1180px;">
						  <div class="container">
						  <label><b>Username</b></label>
							<input type="text" placeholder="Enter username" name="username" required>
							 <label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>
								<div class="clearfix">
									 
									  <button type="submit" name="login_btn" value="login">login</button>
									</div>
								  </div>
								</form>
								
								
		    	</div>
		    </div>
		    	</div>	
				<div class="row" style="background-color:#8E2727;height:70px;width:1400px;">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&2017 Design by Gjorgjia Metellari.</div>
		    		</div>
		    	</div>
		    </div>
				
		    
			
								</body>
								</html>