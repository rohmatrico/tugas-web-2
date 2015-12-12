<?php 
	$page_title = 'Pendidikan';
	include ('header.html');	
	include('connection.php');
	session_start();

	$id= $_SESSION['biodata'];
	$s = $_POST['sd'];
	$s2 = $_POST['smp'];
	$s3 = $_POST['sma'];
	$p = $_POST['perti'];

	$query = "INSERT INTO pendidikan  VALUES ('$id','$s', '$s2', '$s3', '$p')";
	$result = mysql_query($query) or die(mysql_error());


?>