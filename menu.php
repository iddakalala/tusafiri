<?php 
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
    margin-top: 20px;
   
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
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="header-inner">
					<h1><a href="">Tusafiri<span>.</span></a></h1>
					<nav role="navigation">
						<ul>
							<li class="cta"><a href="index.php">Nyumbani</a></a></li>
							<li class="cta"><a href="tujue.php">Tujue</a></li>
							<li class="cta"><a href="habari.php">Habari</a></li>
							<li class="cta"><a href="jisajili.php">Jisajili</a></li>
							<li class="cta"><a href="contacts.php">Tuwasiliane</a></li>
							<li class="cta"><a href="tafuta.php">Tafuta Usafiri</a></li>

							<div class="dropdown">

  							<li class="cta" ><a href="" >Aina za Usafiri</a></li> 


                              <div class="dropdown-content">
                                
                                   <a href="onamabasi.php"">usafiri wa bus</a>
                                   <a href="onaflight.php">Usafiri wa Ndege</a>
                                   <a href="onatax.php">Usafiri wa Tax</a>
                                   <a href="onaboda.php">Usafiri wa Bodaboda</a>
                                   <a href="onabajaj.php">Usafiri wa Bajaji</a>
                                  
                                 </div>
                              </div>
                            
							 
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	
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

