<?php 
 require 'functions.php';
 require_once 'session.php';
 require'menu.php';
 if(isset($_POST) && !empty($_POST['customer_phonenumber']) && !empty($_POST['password']))
{
	 //get the values
	$phonenumber = $_POST['customer_phonenumber'];
	$password = $_POST['password'];
    $hash_passwd=md5($password);
	 // validate that against  the records 

     if(!empty($phonenumber)&& !empty($password))
     {
     	if($_POST['choice']=="Admin"){
     $query = "SELECT * FROM `Adminstrator` WHERE `phonenumber`='$phonenumber' AND `password` ='$hash_passwd'";
          if($query_run= mysql_query($query))
     {
     	$query_num_rows = mysql_num_rows($query_run);
     	if($query_num_rows==0)
     	{
     		$status= " namba ya simu au neno la siri si sahihi";

     	}



     	else 
     	{
			$result=mysql_fetch_array($query_run);
			$_SESSION['firstname']=$result['firstname'];
			$_SESSION['middlename']=$result['middlename'];
			$_SESSION['lastname']=$result['lastname'];
			$_SESSION['Adminlogin']=true;
     		header('Location: Admin/index.php');
     	}




     }
	}else{
$query = "SELECT * FROM `register` WHERE `customer_phonenumber`='$phonenumber' AND `user_password` ='$hash_passwd'";
     	
     	//echo $query; die(exit);
     if($query_run= mysql_query($query))
     {
     	$query_num_rows = mysql_num_rows($query_run);
     	if($query_num_rows==0)
     	{
     		$status= " namba ya simu au neno la siri si sahihi";

     	}



     	else 
     	{
     	    $_SESSION['login'] =true;
     		header('Location: home.php');
     	}




     }
     }
     }
     else
     {
     	$status2= "ingiza Namba ya simu na Neno la siri";

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
	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slider_5.jpg);">
		   		<div class="container">
		   			<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
		   				<div class="fh5co-property-brief-inner">
		   					<div class="fh5co-box">
		   						
		   						<h3>Ingia</h3>
	                        <p ><form action="" method="post"></p>

	                       <h4>Weka Namba Ya Simu</h4><p><input type="text" name="customer_phonenumber" id="customer_phonenumber" class="form-control" >
                        		
                        	</p>
                        	<h4>Weka neno la Siri</h4><p> <input type="password" name="password" id="NenolaSiri" class="form-control" >
                        		
                        	</p>
                             <h4>Ingia kwa akaunti nyingine</h4><p>
                             <select name="choice" id="choice" class="form-control">
                             	<option value="mteja">Mteja</option>
                             	<option value="Admin">Adminstrator</option>
                             </select>	
                        	</p>
	                        <p><input type="submit" value="Tuma" class="btn btn-primary"></p>
							
							<?php if(isset($status)) echo $status; ?>
							<?php if(isset($status2)) echo $status2; ?>		
	                        
	   						</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>

	
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


	
	
<!--
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
            <h3>LOGIN FORM</h3>
			<form action="" method="post">
				
				<ul>
				<li>
					<label for="Jina">Jina</label>
					<input type="text" name="jina" id="Jina">
				</li>

				<li>
					<label for="Neno la Siri">Neno la Siri</label>
					<input type="password" name="password" id="NenolaSiri">
				</li>	
				<li>
					
					<input type="submit" value="Tuma">
				</li>		

				</ul>
			</form>

			-->
				