<?
	require_once('fcmClassificaDati.js.php');

?>

<table>
	<tr>
		<td>Squadra</td>
		<td>Totale Squadra</td>
	</tr>
	<? 
	
		for($i=0; $i<=count($arrClassifica); $i++ ){
		
			echo "<tr><td>".$arrClassifica[$i][4]."</td><td>".$arrClassifica[$i][23]."</td></tr>";
		
		}
	
	?>
</table>