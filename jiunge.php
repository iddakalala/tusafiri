<?php 
require 'functions.php';
require'menu.php';
//receive submitted data
if(isset($_POST['Jisajili']))
{
$username=$_POST['username'];   
$customerphone=$_POST['customer_phonenumber'];
$password=$_POST['user_password'];
$confirmpassword=$_POST['confirm_password'];  
if(empty($username) or empty ($customerphone) or empty ($password) or empty ($confirmpassword))
{
    $status="JAZA TAARIFA ZAKO";

}
else if($password ==$confirmpassword){
    //all fields have been filled
    //PREPARE SQL COMMAND
    $hash_passwd=md5($password);
    $sql_command="INSERT INTO register (username,customer_phonenumber,user_password) VALUES ('$username','$customerphone','$hash_passwd')";
  //SAVE TO DATABASE
 $save=mysql_query($sql_command) or die (mysql_error());
 //test saving status
    if($save){  
    header("Location: login.php");
    }
    else{
   $status3= "tatizo kwenye kujiunga nasi";    
    }
}else{
    $status4="tafadhari hakiki neno la siri";
}   
}else{
    
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
        
    Website:        www.tusafiri.com
    Email:          info@tusafiri.com
    Twitter:        http://twitter.com/tusafiri
    Facebook:       https://www.facebook.com/tusafiri

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


<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text floatright">
                        <div class="fh5co-property-brief-inner">

                           <div class="fh5co-box">
                        
                
                            
                                  <form action="" method="post">
                                        <table class="table table-condensed" align="center">
                                        <caption align="center"> <h2> JISAJILI</h2></caption>
                        
                                

                                        <tr>
                                        <td><label for="username">JINA LA MTEJA:</label></td>
                                        <td><input type="text" name="username" id="username" required></td>
                                        </tr>
                                        <tr>
                                        <td><label for="customer_phonenumber">NAMBA YA SIMU YA BIASHARA:</label></td>
                                        <td><input type="text" name="customer_phonenumber" id="customer_phonenumber" required></td>
                                        </tr>
                                        <tr>
                                        <td><label for="user_password">NENO LA SIRI:</label></td>
                                        <td><input type="password" name="user_password" id="user_password" required></td>
                                        </tr>
                                        <tr>
                                        <td><label for="confirm_password">HAKIKI NENO LA SIRI:</label></td>
                                        <td><input type="password" name="confirm_password" id="confirm_password" required></td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td>
                                        <input type="submit" class="btn btn-primary" value="Jisajili" name="Jisajili">
                                        </td>
                                        </tr>
                              </table>
                                    </form>


    


       <?php if (isset($status)) echo  $status; ?>
        <?php if (isset($status2)) echo $status2; ?>
         <?php if (isset($status3)) echo $status3; ?>
          <?php if (isset($status4)) echo $status4; ?>

                                      
                            
                            </div>
                        </div>
                    </div>

                </div>
                <ul>
                
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

