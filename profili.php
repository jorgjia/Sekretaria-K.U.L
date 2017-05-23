<?php 
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	table {
    border-collapse: collapse;
    width: 500px;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #8E2727}

th {
    background-color: #4CAF50;
    color: white;
}
	</style>

</head>
 <nav  id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/imageedit_7_6000938817.png" ></a>
	  <br>
	 
	 <div class="container">
  
  <div class="dropdown" style="width:200px;margin-left:550px;">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Zgjidh Degen
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header"id="dropdown">Fakulteti i Shkencave te Aplikuara</li>
      <li><a href="informatike.html">Informatike e Zbatuar</a>
	  <a href="viti1" >Vit i Parë</a>
	    <a href="viti1" >Vit i Dytë</a> 
		<a href="viti1" >Vit i Tretë</a>
	  
	  
	  </li>
	  <hr>
      <li><a href="laborant.html">Teknike i lartë laborator <li>
	  
	    <a href="viti1" ><p style="  color: blue;">Viti i Parë</p></a>
	    <a href="viti1" >Viti i Dytë</a> 
		<a href="viti1" >Viti i Tretë</a></li>
		<hr>
      <li class="divider"></li>
      <li class="dropdown-header">Fakulteti Ekonomik</li>
      <li><a href="finance">Finance Kontabilitet</a></li>
	   <li><a href="biznes">Menaxhim Biznesi</a></li>
	   <li><a href="turizem">Menaxhim Turizmi</a></li>
    </ul>
  </div>
  
   <div style="margin-left:1200px;"><a href="logout.php">
  <span class="glyphicon glyphicon-user"></span>
    Logout</a></div>
</div>
    </div>
	<br>
  	<br>

     
        
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(https://ak6.picdn.net/shutterstock/videos/5205929/thumb/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"style="color:#8E2727"> Mireserdhet! </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
        </div><!--/.carousel-->
        
    </section><!--/#main-slider-->
		<div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>

<div style="margin-left:400px;">
<h1>Welcome:<?php echo $_SESSION['username'];  ?> </h1>
<table>
<tr>
<td><b>Username:</b><?php echo $_SESSION['username'];  ?> </td>
</tr>
<br>
<td><b>Email</b>:<?php echo $_SESSION['email'];  ?> </td><br>
</tr>
<br>
<td><b>Vendlindja</b>:<?php echo $_SESSION['vendlindja'];  ?> </td><br>
</tr>
<br>
<td><b>Dega</b>:<?php echo $_SESSION['dega'];  ?> </td><br>
</tr>
<br>
<td><b>Viti</b>:<?php echo $_SESSION['viti'];  ?> </td><br>
</tr>
</table>
</div><br><br><br>
	
	<div class="row" style="background-color:#8E2727;height:70px;width:1200px;">
                   
                        <div class="footer-copyright">&2017 Design by Gjorgjia Metellari.</div>
                   
                </div>
       
</body>
</html>