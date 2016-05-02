<?php 

$favoriteThings = ['dogs','iPhone','Apple Music','beer','pizza','Notre Dame Football', 'trips to Europe'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<style type="text/css">

 	</style>
 </head>
 <body>
 <table>
 	<tr>
		<th>My Favorite Things</th>
	</tr>
	<?php 
		foreach ($favoriteThings as $key => $value) {
			?>
			<tr>
				<td><?php echo $favoriteThings[$key]?></td>
			</tr>
	<?php } ?>


 </table>
 
 </body>
 </html>