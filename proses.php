<?php
	include('connection.php');
	session_start();


	$i = $_POST['id'];
	$n = $_POST['nama'];
	$a = $_POST['alamat'];
	$k = $_POST['kelamin'];
	$u = $_POST['usia'];
	$h = $_POST['hobi'];

	

	$query = "INSERT INTO `biodata` (`id`, `nama`, `usia`, `kelamin`, `alamat`, `hobi`) VALUES ('$i', '$n', '$u', '$k', '$a', '$h');";
	$result = mysql_query($query) or die(mysql_error());

	$_SESSION['biodata']=$_POST['id'];
?>


<script language="javascript">
	alert("Isi Data Pendidikan Anda");
	document.location="pendidikan.php";
</script>
