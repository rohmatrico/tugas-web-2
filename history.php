<?php 
	$page_title = 'History';
	include ('header.html');
 ?>

 	<h1> History </h1>
 		<p> 
 		<br>
 <?php
	include('connection.php');

	$query = "select * from biodata";
	$result = mysql_query($query) or die(mysql_error());
?>

	<div id="table4">
	<table width="100%" border="1px">
		<tr width="1000%">
			<td  width="40%">
				BIODATA
			</td>
			<td  width="30%">
				PENDIDIKAN
			</td>
			<td  width="30%">
				PEKERJAAN
			</td>
		</tr>


		<tr>
			<td colspan="" rowspan="" headers="">
				<?php
					while ($row = mysql_fetch_array($result)) 
					{
						echo "ID : $row[id]<br>";
						echo "Nama : $row[nama]<br>";
						echo "TTL : $row[usia]<br>";
						if ($row['kelamin']=='l') {
							echo "Jenis Kelamin : Laki-Laki<br>";
						} else {
							echo "Jenis Kelamin : Perempuan<br>";
						}
						echo "Alamat ; $row[alamat]<br>";
						echo "Hobi : $row[hobi]";
						echo "<hr><br>";
					}	
					
				?>
			</td>

			<td colspan="" rowspan="" headers="">
				<?php
					$query = "select * from pendidikan";
					$result = mysql_query($query) or die(mysql_error());

					while ($row = mysql_fetch_array($result)) 
					{
						echo "SD : $row[sd]<br>";
						echo "SMP : $row[smp]<br>";
						echo "SMA : $row[sma]<br>";
						echo "<hr><br><br><br>";
					}
				?>
			</td>

			<td colspan="" rowspan="" headers="">
				<?php
					$query = "select * from pekerjaan";
					$result = mysql_query($query) or die(mysql_error());

					while ($row = mysql_fetch_array($result)) 
					{
						echo "Nama Perusahaan : $row[naper]<br>";
						echo "Jabatan : $row[jabatan]<br>";
						echo "Gaji : $row[gaji]<br>";
						echo "<hr><br><br><br>";
					}

				?>
			</td>
		</tr>

<!-- 
<?php
	while ($row = mysql_fetch_array($result)) 
	{
		echo "<tr>
				<td>ID : $row[id]<br>";
		echo "Nama : $row[nama]<br>";
		echo "TTL : $row[usia]<br>";
		if ($row['kelamin']=='l') {
			echo "Jenis Kelamin : Laki-Laki<br>";
		} else {
			echo "Jenis Kelamin : Perempuan<br>";
		}
		echo "Alamat ; $row[alamat]<br>";
		echo "Hobi : $row[hobi]<br></td>";
	}	
	
?>
			
<?php
	$query = "select * from pendidikan";
	$result = mysql_query($query) or die(mysql_error());

	while ($row = mysql_fetch_array($result)) 
	{

		echo "<td>SD : $row[sd]<br>";
		echo "SMP : $row[smp]<br>";
		echo "SMA : $row[sma]<br></td>";

	}

?>
<?php
	$query = "select * from pekerjaan";
	$result = mysql_query($query) or die(mysql_error());

	while ($row = mysql_fetch_array($result)) 
	{

		echo "<td>Nama Perusahaan : $row[naper]<br>";
		echo "Jabatan : $row[jabatan]<br>";
		echo "Gaji : $row[gaji]<br></td></tr>";

	}

?>
 -->
 	</table>
 	</div>
	</p>
	<br>
<?php 
	include ('footer.html');
?>