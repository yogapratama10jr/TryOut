<?php
echo '<table border = 1 cellpadding = 6 cellspacing = 0 align=center>';
echo '<tr>';
echo '<th> </th>';

function multiplicationTable($angka){
	
	for($i = 1; $i <= $angka; $i++)
		{
			echo '<th>'.$i.'</th>';
		}
		echo '</tr>';
			for($i = 1; $i <= $angka; $i++)
		{
		echo '<tr>';
		echo '<th>'.$i.'</th>';
			for($t = 1; $t <= $angka; $t++)
			{
	  			if($i==$t){
    			$hasil = $i * $t;
    			echo '<td align = center>'.$hasil.'</td>';
  			}else{
				$hasil = $i * $t;
				echo '<td align = center>'.$hasil.'</td>';
			}
		}
	}
}
multiplicationTable(3);
?>