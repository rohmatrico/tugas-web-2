<?php 
	$page_title = 'Pekerjaan';
	include ('header.html');
 ?>

 	<h1> Isi Pekerjaan </h1>
 		<p> 
 		<form action="proses3.php" method="POST">
 			<table width="100%">
 				<tr width="100%">
 					<td width="20%" align="left">
 						Nama Perusahaan
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="naper" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="20%" align="left">
 						Jabatan
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="jabatan" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="20%" align="left">
 						Gaji Per Bulan
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="gaji" width="70%">
 					</td>
 				</tr>
 			</table>
 			</p>
 			<div id="button">
 			<center>
 			<input type="submit" value="Submit" name="submit" align="center">
 			<input type="reset" value="Reset" name="Reset" align="center">
 			</center>
 			</div>
 		</form>

<?php 
	include ('footer.html');
 ?>