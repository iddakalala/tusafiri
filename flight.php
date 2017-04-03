<?php 
require 'functions.php';
require'auth.php';
require'menu.php';
//receive submitted data

if(empty($_POST)==false)
{


$name= $_POST['kampuni'];   
$platenumber=$_POST['plateNo'];
$source=$_POST['source'];
$destination=$_POST['destination'];  
$cost=$_POST['cost'];
$via=$_POST['via'];
$jina= $_POST['jina'];  
$contact=$_POST['contact'];
$statuss=$_POST['status'];
$id=$_POST['ID'];


if(empty($name) or empty ($platenumber) or empty ($source) or empty ($destination)or empty ($cost)or empty ($contact)or empty ($statuss)or empty ($id)or empty ($via)or empty ($via))
{
    $status="Kamilisha Taarifa";

}
else {

    //all fields have been filled
    //PREPARE SQL COMMAND
   $query = "SELECT `customer_phonenumber`, `customer_id` FROM `register` WHERE `customer_phonenumber`='$contact' AND `customer_id` ='$id'";

  if($query_run= mysql_query($query))
  	
     {
     	$query_num_rows = mysql_num_rows($query_run);
     	if($query_num_rows==0)
     	{
     		$status= " tafadhali lipia kwanza upate id";
     	}else{
                 		$sql="INSERT INTO company(company_name,company_contact,company_id) VALUES ('$name','$contact','$id')";
                 		

     		$sql_command="INSERT INTO flight(flight_name,route_source,route_destination,route_via,flightnumber,route_cost,route_status,company_id) VALUES ('$jina','$source','$destination','$via','$platenumber','$cost','$statuss','$id')";
  			  

     		//SAVE TO DATABASE
             $savee=mysql_query($sql) or die (mysql_error());
 			$save=mysql_query($sql_command) or die (mysql_error());
 			
 			$status5 ="umefanikiwa kutuma taarifa zako, karibu";
     	}
     }
     	else{
           

 //test saving status
    /*if($save){  
    $status4="umefanikiwa kutuma taarifa zako, karibu"
    
    else{
   $status3= "tatizo kwenye kujiunga nasi";    
    }*/

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
	
	
	<div id="fh5co-page">
	<div class="fh5co-contact animate-box">
		<div class="container">
		 <p>karibu na ahsante kwa kuchangua website yetu kwa kujitangaza tumia Id  kujaza fomu<p>
			<div class="row">
				<div class="col-md-3">
			     <p><a href="" class="btn btn-primary">jaza taarifa Mpya</a></p>
			     <p><a href="updateflight.php" class="btn btn-primary">Badilisha taarifa Ulizojaza</a></p>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
						










                                   		<?php if(isset($status)) echo $status; ?>
										<?php if(isset($status3)) echo $status3; ?>		
	                         

								<h3>JAZA TAARIFA ZAKO</h3>
							
                                  <form action="" method="post">
	
					                	<table class="table table-condensed">
						            <tr>
							            <td>
							            <label for="kampuni">Jina la kampuni:</label>	
							            </td>
								            <td>
			                           <input type="text" name="kampuni" id="kampuni" required >	
			                           </td>
	                                    </tr>	
                      	                 <tr>
									    <td ><label for="ID" >ID ya kampuni:</label></td>
									    <td><input type="text" name="ID" id="ID" required></td> 
									    </tr>
									    <tr>
									    <td><label for="contact">Mawasiliano ya kampuni:</label></td>
									   <td> <input type="text" name="contact" id="contact" required></td>
									    </tr>
									    <tr>
										<td><label for="jina">Jina la Ndege:</label></td>
										<td><input type="text" name="jina" id="jina" required></td>
										</tr>
										<tr>
									    <td><label for="plateNo">Namba ya Ndege:</label></td>
									    <td><input type="text" name="plateNo" id="plateNo" required></td>
									    </tr>
									    <tr>
									    <td><label for="source">Kutoka:</label></td>
									    <td><input type="text" name="source" id="source" required></td>
									    </tr>
									    <tr>
									   <td><label for="destination">Kwenda:</label></td>
									    <td><input type="text" name="destination" id="destination" required></td>
									    </tr>
									    <tr>
									    <td><label for="via">Kupitia:</lable></td>
									    <td><input type="text" name="via" id="via" required></td>
									    </tr>
									    <tr>
									    <td><label for="cost">Nauli:</label></td>
									    <td><input type="text" name="cost" id="cost" required></td>
									    </tr>
									    <tr>
										<td><label for="status">Upatikanaji:</label></td>
										<td><input type="text" name="status" id="status" required></td>
										</tr>
										<tr>
										<td></td>
										<td>
										<input type="submit" class="btn btn-primary" value="Tuma" name="tuma">
										<a href="home.php" class="btn btn-primary">Rudi</a>
										</td>
										</tr>
	                                 </table>

									</form>


			</form>




						</div>
						



							</div>
						</div>

						</div>
					</div>
				</div>
			</div>
			</li>
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

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
