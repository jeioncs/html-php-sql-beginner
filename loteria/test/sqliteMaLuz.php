<?php
$bd = new SQLite3('/var/www/html/loteria/test/test.db');
$results = $bd->query('SELECT * FROM numeros');

/*
// ORIGINAL MARI LUZ
while ($row = $results->fetchArray()) {
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
}
*/

// RETOCADO POR MI PARA QUE SE MUESTRE MÁS CLARO
while ($row = $results->fetchArray()) {
    echo '<pre>';
    echo $row[0].",".$row[1].",".$row[2].",".$row[3]."</br>";
    echo '</pre>';
}

// MV: CREACIÓN DE LA TABLA E INSERCIÓN DE VALORES
// create table numeros(fecha date,comb int(12),comp int(2),joker int(7));
// insert into numeros [(fecha, comb, comp, joker)] values ('27/07/2017', '10205273949', '40', '2978961');
// CREACIÓN TABLA CORRECTA
// create table mejor(fecha date,comb1 int(2),comb2 int(2),comb3 int(2),comb4 int(2),comb5 int(2),comb6 int(2),comp int(2), joker int(7));
?>