<?php 
 require '../functions.php';

 if(isset($_POST['submit'])){
 	$title=$_POST['title'];
 	$contents=$_POST['contents'];
 	$uploader=$_SESSION['lastname'];
 	if(!empty($title) && !empty($contents)){
	$target_dir="uploads/";
 	$target_file=$target_dir.basename($_FILES["fileuploaded"]["name"]);
 	$uploadok=1;
 	$imageFileType=pathinfo($target_dir,PATHINFO_EXTENSION);
 	if(move_uploaded_file($_FILES["fileuploaded"]["tmp_name"],$target_file)){
 		header('Location: ../Admin/addNews.php?success=successifully');
 	}else{
 		header('Location: ../Admin/addNews.php?success=fail');
 	}

$image=basename($_FILES["fileuploaded"]["name"],'.jpg');
$query="INSERT INTO news(title,contents,image,uploader) VALUES('$title','$contents','$image','$uploader')";
$qrun=mysql_query($query) or die(mysql_error());
 	}
 }
?>