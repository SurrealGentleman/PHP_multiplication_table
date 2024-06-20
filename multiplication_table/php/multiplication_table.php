<?php 
	$cols = $_POST['cols'];
	$rows = $_POST['rows'];
?>


<table>

<?php
	if (is_numeric($cols) && is_numeric($rows) && ($cols>0) && ($rows>0)){
		echo '<td style=background-color:yellow;></td>';
		for ($q=1; $q <= $cols; $q++) { 
			echo '<th style=background-color:yellow;>', $q, '</th>';
		}
		for ($i=1; $i <= $rows; $i++) { 
			echo '<tr>';
			echo '<th style=background-color:yellow;>', $i, '</th>';
			for ($k=1; $k <= $cols; $k++) { 
				if ($cols == $rows && $i == $k) {
					echo '<td style=background-color:pink;>', $k * $i, '</td>';
				}
				elseif (($k * $i) % 2 == 0 ){
					echo '<td style=background-color:green;>', $k * $i, '</td>';
				}
				else{
					echo '<td style=background-color:blue;>', $k * $i, '</td>';
				}
			}
			echo '</tr>';
		}
	}
	else{
		echo "Неверные данные";
	}
	
?>
</table>
