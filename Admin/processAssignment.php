<?php
require '../functions.php';
 if(isset($_POST['submit'])){
 $phonenumber=$_POST['phonenumber'];
 $id=$_POST['id'];
 if(!empty($phonenumber) && !empty($id)){
$query="UPDATE register set customer_id='$id' WHERE customer_phonenumber='$phonenumber'";
if(mysql_query($query)){
 header('Location: ../Admin/viewclients.php?success=successifully');
}else{
	echo mysql_error();
}
 }
 }
?>