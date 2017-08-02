<?php
$bd = new SQLite3('/var/www/html/loteria/test/test.db');

$results = $bd->query('SELECT comb1,comb2,comb3,comb4,comb5,comb6 FROM resultadosLoteria limit 10');

while ($row = $results->fetchArray()) {
    echo '<pre>';
    echo $row[0].",".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5]."</br>";
    echo '</pre>';
}
?>