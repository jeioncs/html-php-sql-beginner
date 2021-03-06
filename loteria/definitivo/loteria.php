<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
    <title>Lotería Primitiva - Apuestas</title>
    <link rel="stylesheet" type="text/css" href="loteria1.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="loteria.js"></script>
</head>
<body>
	<h1>LOTERÍA PRIMITIVA</h1>
	
	<?php
    $bolas = range(1, 49); // Metemos 49 bolas en el bombo
    shuffle($bolas); // Giramos el bombo
    $bolas_extraidas = array_slice($bolas,0,7); // Extraemos siete
    $complementario=$bolas_extraidas[6];unset($bolas_extraidas[6]);
    $premio=array();$premio[3]=10; $premio[4]=100;$premio[5]=10000;$premio[6]=5000000;
    $ganado=0;
    $acumulado=0;
    $myfile = fopen("acumulado.txt", "r") or die("Unable to open file!");
    $acumulado=fgets($myfile);
    fclose($myfile);
    ?> 
    
    <img src="imagenes/bombo.gif" width="200" height="240">
    <img src="imagenes/primitiva.jpg" width="350" height="80">
    
    <div>
	<ul id="aclass">
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[0];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[1];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[2];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[3];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[4];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[5];?></figure></div></li>
    <li class="animate"><div class="sb"><figure class="bolac"><?php echo $complementario;?></figure></div>
    </ul>
    </div>
    
    <h2>La combinación ordenada es...</h2>

	<?php sort($bolas_extraidas);?>
	
	<div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[0];?></figure></div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[1];?></figure></div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[2];?></figure></div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[3];?></figure></div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[4];?></figure></div>
    <div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[5];?></figure></div>
    <div style="display: inline-block;"><figure class="bola" style="background: radial-gradient(circle at 15px 15px, #888 5%, #000 50%);"><?php echo $complementario;?></figure></div>
    </div>
    
    <h2>Resultados estadísticos...</h2>
    
    <?php
    $bd = new SQLite3('/var/www/html/html-php-sql-beginner/loteria/definitivo/loteria.db');
    
    //$results = $bd->query('SELECT * FROM resultadosLoteria');
    
    $results = $bd->query('SELECT comb1,comb2,comb3,comb4,comb5,comb6,fecha FROM resultadosLoteria');
    
    $num=0;
    $cont = 0; // Contador número aciertos
    
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
            echo $row[6]." -- (".$row[0].",".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5].") --> ".$cont." aciertos</br>";
            $ganado=$ganado+$premio[$cont];
        }
        echo '</pre>';
        
        $cont = 0;
    }
    
    $acumulado=$acumulado+$ganado-$num;
    echo "He ganado ".$ganado." euros<br>";
    echo "He invertido ".$num." euros<br>";
    echo "ACUMULADO: ".$acumulado." euros<br>";
    //echo $num;
    ?>
    
 <?php
$myfile = fopen("acumulado.txt", "w") or die("Unable to open file!");
fwrite($myfile, $acumulado);
fclose($myfile);
?> 
</body>
</html>