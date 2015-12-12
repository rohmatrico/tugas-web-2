<?php 
	$page_title = 'Biodata';
	include ('header.html');
?>

 	<h1> Isi Biodata </h1>

 	<p> 
 		<form action="proses.php" method="POST">
 			<table width="100%">
 				<tr width="100%">
 					<td width="10%" align="left">
 						ID 
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="id" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						Nama 
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="nama" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						Usia
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="usia" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						Jenis Kelami
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<select name="kelamin">
 					<option value="#">pilih</option>
					<option value="l">Laki-Laki</option>
					<option value="p">Perempuan</option>
						</select>
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						Alamat 
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="alamat" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						Hobi
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="hobi" width="70%">
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
