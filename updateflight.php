<?php 
require 'functions.php';
include'auth.php';
require'menu.php';
//receive submitted data
$kampuninumber="";
          $kampuni="";
          $contact="";
          $jina="";
          $plateNo="";
          $source="";
          $destination="";
          $via="";
          $cost="";
          $statusi="";
          $ujumbe="";
if(!empty($_POST))
{

if(isset($_POST['submit'])){
$plateNo=$_POST['bno'];	
}
 


 
if(empty ($plateNo) )
{
    $status="Andika namba ya Ndege";

}
else {

    //all fields have been filled
    //PREPARE SQL COMMAND
   $query = "SELECT `flightnumber` FROM `flight` WHERE `flightnumber`='$plateNo'";

  if($query_run= mysql_query($query))
  	
     {
     	$query_num_rows = mysql_num_rows($query_run);
     	if($query_num_rows==0)
     	{
     		$status= "<span style='color:red;'>namba ya ndege uliyoingiza si sahihi</span>";
     	}else{
                 		$sql="SELECT * from  flight,company WHERE (flight.company_id=company.company_id) AND `flightnumber`='$plateNo'";

         
                $result = mysql_query($sql);

            if (mysql_num_rows($result) > 0) {
           // output data of each row
           while($row =mysql_fetch_array($result)) {
          $kampuninumber=$row["company_id"];
          $kampuni=$row['company_name'];
          $contact=$row['company_contact'];
         $jina=$row["flight_name"];
          $plateNo=$row["flightnumber"];
          $source=$row["route_source"];
          $destination=$row["route_destination"];
          $via=$row["route_via"];
          $cost=$row["route_cost"];
          $statusi=$row["route_status"];
    }
} else {
   	$status5 ="badilisha taarifa zake kisha  utume tena";
}
        
                 		
 			
 		
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
 if(isset($_POST['tuma'])){
          $kampuninumber=$_POST['ID'];
          $kampuni=$_POST['kampuni'];
          $contact=$_POST['contact'];
         $jina=$_POST['jina'];
          $plateNo=$_POST['plateNo'];
          $source=$_POST['source'];
          $destination=$_POST['destination'];
          $via=$_POST['via'];
          $cost=$_POST['cost'];
          $statusi=$_POST['status'];

 $query="UPDATE flight,company SET flight_name='$jina',flightnumber='$plateNo',route_source='$source',route_destination='$destination',route_via='$via',route_cost='$cost',route_status='$statusi',company.company_id='$kampuninumber',company.company_name='$kampuni',company.company_contact='$contact' WHERE (flight.company_id=company.company_id) AND flightnumber='$plateNo'";
  $query_run=mysql_query($query) or die(mysql_error());
  $status="";
           $kampuninumber="";
         $kampuni="";
          $contact="";
          $jina="";
          $plateNo="";
          $source="";
          $destination="";
          $via="";
          $cost="";
          $statusi="";
          $ujumbe='<span style="color:blue;">Hongera umefanikiwa kubadilisha taarifa.....</span>';
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
		 
			<div class="row">
				<div class="col-md-3">
                 
			     

				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-8">
						








<form action="updateflight.php" method="post">

<div id="search" style="margin:20px;">
	<label for="bno">Namba ya Ndege:</label>
	<input type="text" name="bno" id="bno">
	<button type="submit" class="btn btn-primary" name="submit">TAFUTA</button>
	<?php if(isset($status)) echo $status; ?>
	<?php if(isset($status3)) echo $status3; ?>
</div>	

</form>


   <form action="" method="post" >
	            <table class="table table-condensed">
						            <tr>
							            <td>
							            <label for="kampuni">Jina la kampuni:</label>	
							            </td>
								            <td>
			                           <input type="text" name="kampuni" id="kampuni" value="<?php echo $kampuni; ?>" required >	
			                           </td>
	                                    </tr>	
                      	                 <tr>
									    <td ><label for="ID" >ID ya kampuni:</label></td>
									    <td><input type="text" name="ID" id="ID" value="<?php echo $kampuninumber; ?>"readonly="readonly" required></td> 
									    </tr>
									    <tr>
									    <td><label for="contact">Mawasiliano ya kampuni:</label></td>
									   <td> <input type="text" name="contact" id="contact"  value="<?php echo $contact; ?>" required></td>
									    </tr>
									    <tr>
										<td><label for="jina">Jina la Ndege:</label></td>
										<td><input type="text" name="jina" id="jina" value="<?php echo $jina; ?>" required></td>
										</tr>
										<tr>
									    <td><label for="plateNo">Namba ya Ndege:</label></td>
									    <td><input type="text" name="plateNo" id="plateNo"  value="<?php echo $plateNo; ?>" required></td>
									    </tr>
									    <tr>
									    <td><label for="source">Kutoka:</label></td>
									    <td><input type="text" name="source" id="source"  value="<?php echo $source; ?>" required></td>
									    </tr>
									    <tr>
									   <td><label for="destination">Kwenda:</label></td>
									    <td><input type="text" name="destination" id="destination"  value="<?php echo $destination; ?>" required></td>
									    </tr>
									    <tr>
									    <td><label for="via">Kupitia:</lable></td>
									    <td><input type="text" name="via" id="via"  value="<?php echo $via; ?>" required></td>
									    </tr>
									    <tr>
									    <td><label for="cost">Nauli:</label></td>
									    <td><input type="text" name="cost" id="cost"  value="<?php echo $cost; ?>" required></td>
									    </tr>
									    <tr>
										<td><label for="status">Upatikanaji:</label></td>
										<td><input type="text" name="status" id="status"  value="<?php echo $statusi; ?>" required></td>
										</tr>
										<tr>
										<td></td>
										<td>
										<?php echo $ujumbe; ?>
										<input type="submit" class="btn btn-primary" value="Tuma" name="tuma">
										<a href="flight.php" class="btn btn-primary">Rudi</a>
										</td>
										</tr>
	            </table>

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