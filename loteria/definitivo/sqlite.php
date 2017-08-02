
<?php

$bolas = range(1, 49); // Metemos 49 bolas en el bombo
shuffle($bolas); // Giramos el bombo
$bolas_extraidas = array_slice($bolas,0,6); // Extraemos seis
echo "<pre>";
print_r($bolas_extraidas);
echo "</pre>";


$bd = new SQLite3('/var/www/html/loteria/test/test.db');

//$results = $bd->query('SELECT * FROM resultadosLoteria');

$results = $bd->query('SELECT comb1,comb2,comb3,comb4,comb5,comb6,fecha FROM resultadosLoteria');



$num=0;
//$arrlength = count($bolas_extraidas);
$cont = 0; // Contador número aciertos
//$aciertos = array();

while ($row = $results->fetchArray()) {
   $num++;
    for($x = 0; $x < 6; $x++) {
        for($y = 0; $y < 6; $y++) {
            if ($bolas_extraidas[$x] == $row[$y]) {
                $cont+=1;
            }
        }  
    }
    echo '<pre>';
    if ($cont>=3){
    echo $row[6]." -- (".$row[0].",".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5].") --> ".$cont."</br>";
    }
    echo '</pre>';
    $cont = 0;
}

echo $num;

/*
$mejorcomb = $bd->query('SELECT fecha FROM resultadosLoteria where resultadosLoteria.comb1==$bolas_extraidas[0] and resultadosLoteria.comb2==$bolas_extraidas[1] and resultadosLoteria.comb3==$bolas_extraidas[2] and resultadosLoteria.comb4==$bolas_extraidas[3] and resultadosLoteria.comb5==$bolas_extraidas[4] and resultadosLoteria.comb6==$bolas_extraidas[5]') 
while ($row = $mejorcomb->fetchArray()) {
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
}
*/

/*
while ($row = $results->fetchArray()) {
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
}
*/

/* CORRECTO
while ($row = $results->fetchArray()) {
    echo '<pre>';
    echo $row[0].",".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5]."</br>";
    echo '</pre>';
}
*/
?>

