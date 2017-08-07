<meta http-equiv="refresh" content="1" /> <!-- Establecemos cada cuanto queremos actualizar los mensajes (1 segundo)-->



<?php
$chat = file_get_contents("historial.txt"); //abrimos el archivo con el historial cada vez que se auto actualiza la pagina
//procesamos los emoticones


filemtime("historial.txt");

$chat = str_replace("emo_spiderman","<IMG SRC=\"emoticones/emo_spiderman.png\">",$chat);
$chat = str_replace("emo_doubt","<IMG SRC=\"emoticones/emo_doubt.png\">",$chat);

/*Para agregar emoticones se agregan lineas asi:
$chat = str_replace("CODIGO DEL EMOTICON","<IMG SRC="UBICACION DE LA IMAGEN">",$chat);
*/




echo $chat; //mostramos el historial, con los emoticones transformados en imagen
echo "<a name=\"end\"></a>"; //insertamos la etiqueta de fin de texto

?> 