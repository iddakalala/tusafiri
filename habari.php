
<?php
 require 'functions.php';
 require'menu.php';
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
<?php
$query="SELECT * FROM news";
$qrun=mysql_query($query) or die(mysql_error());
 ?>
	
	<div id="fh5co-page">
<div class="col-sm-12">
	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
			<?php while($row=mysql_fetch_array($qrun)){ ?>

		   	<li style="background-image: url(Admin/uploads/<?php echo $row['image']; ?>.jpg")>
		   		<div class="container">
		   			<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
		   				<div class="fh5co-property-brief-inner">
		   			  	<div class="fh5co-box">
		   						
		   						<h3>HABARI ZA LEO</h3>
	                        <p class="fh5co-property-specification">
                        	<?php
                              echo '<strong>'.$row['title'].'</strong>';
                        	 ?>
                        	</p>
                               <p>
                        	<?php
                              echo $row['contents'];
                        	 ?>
                        	</p>
	                        <p><a href="habari.php" class="btn btn-primary">Nyingine>>></a></p>
									
	                        
	   						</div>
		   			</div>
		   		</div>
		   	</li>
		   	<?php } ?>
		  	</ul>
	  	</div>
	</aside>	
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

