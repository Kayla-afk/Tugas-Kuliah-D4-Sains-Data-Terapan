<?php

$file = "calibration.dat";
$in = fopen($file,"r");

echo "<table border='1'>";
echo "<tr>
<th>Station</th>
<th>Simulated Mean</th>
<th>Measured Mean</th>
<th>Difference</th>
<th>R2</th>
</tr>";

while(!feof($in)){

list($station,$sim,$meas,$diff,$r2) = fscanf($in,"%s %f %f %f %f");

if($station != ""){

echo "<tr>";
echo "<td>$station</td>";
echo "<td>$sim</td>";
echo "<td>$meas</td>";
echo "<td>$diff</td>";
echo "<td>$r2</td>";
echo "</tr>";

}

}

echo "</table>";

fclose($in);

?>