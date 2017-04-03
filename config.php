<?php
 require 'functions.php';
 
 if(isset($_POST))
{
	

	 //get the values
	$username = $_POST['jina'];
	$password = $_POST['password'];

	 // validate that against  the records 

     if(!empty($username)&& !empty($password))
     {
     	
     	$query = "SELECT `username`, `user_password` FROM `customer` WHERE `username`='$username' AND `user_password` ='$password'";
     	//echo $query; die(exit);
     if(	$query_run= mysql_query($query))
     {
     	$query_num_rows = mysql_num_rows($query_run);
     	if($query_num_rows==0)
     	{
     		echo 'invalid jina  au neno la siri';

     	}
     	else
     	{
     		header("Location: bus.php");
     	}
     }
     }
     else
     {
     	echo 'ingiza jina lako na neno la siri';
     }

}

?>
