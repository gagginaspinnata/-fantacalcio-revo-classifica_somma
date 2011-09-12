<?
	require_once('js/fcmClassificaDati.js.php');

?>

<div id="classifica_somma" style="background-color:white;padding:20px;margin-top:50px;">
	<table>
		<tr style="font-size:150%;">
			<td><b>Squadra</b></td>
			<td><b>Totale Squadra</b></td>
		</tr>
		<? 
		
			for($i=0; $i<=count($arrClassifica); $i++ ){
			
				echo "<tr style=\"font-site:120%;border-bottom:1px dotted;\"><td>".$arrClassifica[$i][4]."</td><td style=\"padding-left:50px;\">".$arrClassifica[$i][23]."</td></tr>";
			
			}
		
		?>
	</table>
</div>