<?php

/*
$a = range(1,49);
// $a = range(1.,49);
// Para depurar el array
print_r($a);
*/
/*
print_r(array_rand($a,6));
print_r(array_rand(array_flip($a),6));
//$random_num = array_rand($a,6);
//print_r($random_num);

/*
echo $a[$random_num[0]]."<br>";
echo $a[$random_num[1]]."<br>";
echo $a[$random_num[2]];

echo "<pre>";
print_r($random_num);
echo "</pre>";
*/

$numero = array();
$numlength = 6;

$x = 1;

while($x <= $numlength) {
    $num_aleatorio = mt_rand(1,49);
    array_push($numero,$num_aleatorio);
    $x++;
} 

$arrlength = count($numero);
sort($numero);
for($y = 0; $y < $arrlength; $y++) {
    echo $numero[$y];
    echo " ";
}

/*
//$x = 1;
$x = 2;
$num_aleatorio = mt_rand(1,49);
array_push($numero,$num_aleatorio);

while($x <= $numlength) {
    //$num_aleatorio = mt_rand(1,49);
    
    if (in_array($num_aleatorio, $numero) == false) {
        array_push($numero,$num_aleatorio);
    } 
    
    $x++;
} 

$arrlength = count($numero);
sort($numero);

//$arrlength = count($numero);
for($y = 0; $y < $arrlength; $y++) {
    echo $numero[$y];
    echo " ";
}
*/
?>