<meta http-equiv="refresh" content="1" /> <!-- Establecemos cada cuanto queremos actualizar los mensajes (1 segundo)-->
<?php
$chat = file_get_contents("historial.txt"); //abrimos el archivo con el historial cada vez que se auto actualiza la pagina
//procesamos los emoticones

$chat = str_replace("111","<IMG SRC=\"emoticones/1.png\">",$chat);
$chat = str_replace("222","<IMG SRC=\"emoticones/2.png\">",$chat);

/*Para agregar emoticones se agregan lineas asi:
$chat = str_replace("CODIGO DEL EMOTICON","<IMG SRC="UBICACION DE LA IMAGEN">",$chat);
*/

echo $chat; //mostramos el historial, con los emoticones transformados en imagen
?> 