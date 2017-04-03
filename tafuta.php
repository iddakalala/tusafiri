<!DOCTYPE html>
<?php require'menu.php'; ?>
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
<div class="fh5co-contact animate-box" style="min-height:515px;">
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="row">
				<form class="form-horizontal" action="patausafiri.php" method="post">
					<div class="form-group">
						<label for="usafiri" class="label-horizontal col-sm-3">AINA YA USAFIRI:</label>
						<div class="col-sm-4">
							<select class="form-control" name="ainausafiri" id="usafiri" style="height:50px;">
							    
								<option value="bus">BASI</option>
								<option value="flight">NDEGE</option>
								<option value="bajaji">BAJAJI</option>
								<option value="boda">BODABODA</option>
								<option value="tax">TAXI</option>
							</select>
						</div>
					</div>
							<div class="form-group">
						<label for="kutoka" class="label-horizontal col-sm-3">KUTOKA:</label>
						<div class="col-sm-4">
					<input type="text" class="form-control" name="kutoka" id="kutoka" placeholder="kutoka" required>
						</div>
					</div>
							<div class="form-group">
						<label for="kwenda" class="label-horizontal col-sm-3">KWENDA:</label>
						<div class="col-sm-4">
					<input type="text" class="form-control" name="kwenda" id="kwenda" placeholder="kwenda" required>
						</div>
					</div>
					<div class="col-sm-offset-4 col-sm-10">
                   <input type="submit" name="submit" id="submit" value="TAFUTA" class="btn btn-primary" />
                   </div>
				</form>
	</div>
	</div>
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

