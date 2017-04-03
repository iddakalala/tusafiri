<?php
require_once 'session.php';
 /* function connect($host='localhost',$username,$password,$db="")
  {
  	$conn= mysql_connect($host,$username,$password);
  	if(!empty($db))
  	{
       mysql_select_db('tusafiri',$conn);
  	}

  	return $conn;
  }*/

  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_pass =  '';
  $mysql_db = 'tusafiri';

  if(!mysql_connect($mysql_host, $mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
  {
     die(mysql_error()); 
  }

?>