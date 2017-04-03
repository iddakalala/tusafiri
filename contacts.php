<?php 
require 'functions.php';
//receive submitted data
if(isset($_POST['Tuma']))
{
$jina=$_POST['jina'];   
$email=$_POST['email'];
$message=$_POST['message']; 

if(empty($jina) or empty ($email) or empty ($message)) 
{
    $status="JAZA TAARIFA ZAKO";

}
else{
    //all fields have been filled
    //PREPARE SQL COMMAND
    $sql_command="INSERT INTO ujumbe (jina,message,email) VALUES ('$jina','$message','$email')";
  //SAVE TO DATABASE
 $save=mysql_query($sql_command) or die (mysql_error());
 //test saving status
    if($save){  
    //header("Location: contacts.php");
    $taarifa="ujumbe umetumwa";
    }
    else{
   $status3= "tatizo kwenye kutuma ujumbe";   
}
}
}


?>

<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Tusafiri | Nyumbani</title>




<!-- STYLE YA DROP DOWN-->
 <style>


.dropdown {
    position: relative;
    display: inline-block;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    margin-top: 15px
   
}

.dropdown-content a {
    color: black;
    padding: 30px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1    
}

.dropdown:hover .dropdown-content {
    display: block;

}

</style>
</head> 

  <!-- 
	//////////////////////////////////////////////////////

	IMETENGENEZWA NA SUZYMERRY ALEXANDER PAMOJA NA IDDA KALALA
		
	Website: 		www.tusafiri.com
	Email: 			info@tusafiri.com
	Twitter: 		http://twitter.com/tusafiri
	Facebook: 		https://www.facebook.com/tusafiri

	//////////////////////////////////////////////////////
	 -->

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<?php require'menu.php'; ?>
	<div id="fh5co-page">

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Tanzania, Dodoma-UDOM</li>
						<li><i class="icon-phone"></i>0658012465<br>0719642132<br>0769446861</li>
						<li><i class="icon-envelope"></i><a href="#">info@tusafiri.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.tusafiri.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
						<form action="" method="post">
							<div class="form-group">
								<input class="form-control" placeholder="Jina" type="text" name="jina">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Barua pepe" type="text" name="email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Andika Ujumbe"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Tuma" name="Tuma">
								<?php if (isset($taarifa)) echo $taarifa; ?>
								<?php if (isset($status3)) echo $status3; ?>
									
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>	
	</div>
   <?php include 'footer.php' ; ?> 
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

