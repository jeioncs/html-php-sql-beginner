<iframe name="window" src="chat.php" width="400" height="450" marginwidth="1" scrolling="yes" frameborder="1">

</iframe> <!-- Creamos un iframe donde se muestra el historial -->
<?php

echo <<<FORM
<form method="post" >
Usuario: <input type="text" id="user" name="user" value="$_POST[user]" size=33><BR>
Mensaje: <input type="text" id="mensaje" name="mensaje" value="$_POST[mensaje]" size=33><BR>
<input type="submit" VALUE="Enviar" name="enviar" id="enviar" size=33><BR>
</form>
FORM;

if($_POST['enviar']){
$user = $_POST['user']; //vinculamos la variable
$mensaje = $_POST['mensaje']; //vinculamos la variable

$hist = fopen("historial.txt","a"); //abrimos el archivo donde se guarda todo el historial
fwrite($hist, "$user dice: $mensaje" . "<BR>" . PHP_EOL); //insertamos el texto
fclose($hist);  //cerramos el archivo
}
?> 