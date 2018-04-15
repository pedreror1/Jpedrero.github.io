<?php 
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
	$sender = $_POST['email'];

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
mail("pedreror1@gmail.com",$subject,$name+ "<br>" + $msg+"<br>"+$sender);
 ?>