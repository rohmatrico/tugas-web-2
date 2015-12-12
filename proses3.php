<?php 
	include "connection.php";
	session_start();

	$id = $_SESSION['biodata'];
	
	$np = $_POST['naper'];
	$jab = $_POST['jabatan'];
	$gj = $_POST['gaji'];



	$query = "INSERT INTO pekerjaan  VALUES ('$id', '$np', '$jab', '$gj')";
	$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
	alert("SUCCES!!!");
	document.location="history.php";
</script>
