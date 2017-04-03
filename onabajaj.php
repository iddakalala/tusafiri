<?php require'menu.php';
require 'functions.php';
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
	<body>	<body>
<div class="fh5co-contact animate-box" style="min-height:515px;">
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="row">
						<table class="table table-condensed" border="1">
						<thead style="background-color:#C4C4C4;color:black">
						                <th>No</th>
					                    <th><strong>JINA</strong></th>
										<th><strong>NAMBA</strong></th>
										<th><strong>KUTOKA</strong></th>
										<th><strong>KWENDA</strong></th>
										<th><strong>MAWASILIANO</strong></th>
										<th><strong>NAULI</strong></th>
										<th><strong>UPATIKANAJI</strong></th>	
						</thead>
						<tbody>
							<?php 
                             $query="SELECT bajaji_name,plate_number,route_source,route_destination,bajaji_contact,route_cost,route_status FROM bajaji";
                             $qrun=mysql_query($query) or die(mysql_error());
                              $index=1;
                              while($row=mysql_fetch_array(($qrun))){
                              	echo '<tr>';
                              	echo '<td>'.$index.'</td>';
                              	 	echo '<td>'.$row['bajaji_name'].'</td>';
                              	 	echo '<td>'.$row['plate_number'].'</td>';
                              	 		echo '<td>'.$row['route_source'].'</td>';
                              	 			echo '<td>'.$row['route_destination'].'</td>';
                              	 				echo '<td>'.$row['bajaji_contact'].'</td>';
                              	 					echo '<td>'.$row['route_cost'].'</td>';
                              	 						echo '<td>'.$row['route_status'].'</td>';
                              	echo '</tr>';
                              	++$index;
                              }
							?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<?php include 'footer.php' ; ?>

		
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
</html>
