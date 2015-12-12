<?php 

	$page_title = 'Pendidikan';
	include ('header.html');	
?>


 	<h1> Isi Pendidikan </h1>
 		<p> 
 		<form action="proses2.php" method='POST'>
 			<table width="100%">
 				<tr width="100%">
 					<td width="10%" align="left">
 						SD 
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="sd" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						SMP 
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="smp" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="10%" align="left">
 						SMA
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="sma" width="70%">
 					</td>
 				</tr>
 				<tr width="100%">
 					<td width="15%" align="left">
 						Perguruan Tinggi
 					</td>
 					<td width="1%" align="left">
 						:
 					</td>
 					<td width="70%">
 						<input type="text" name="perti" width="70%">
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
