<?php

	$pdo=new
	pdo('mysql:host=localhost;dbname=feedback','root','');

	session_start();
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$Message=$_POST['Message'];

	$insert=$pdo->prepare("insert into feedback(FirstName,LastName,Email,Message) values(:FirstName,:LastName,:Email,:Message)");

	$insert->bindParam(':FirstName',$FirstName);
	$insert->bindParam(':LastName',$LastName);
	$insert->bindParam(':Email',$Email);
	$insert->bindParam(':Message',$Message);

	$insert->execute();
	header('location:index.html');

?>