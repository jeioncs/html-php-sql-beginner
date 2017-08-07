<iframe name="window" src="chat.php#end" width="400" height="450" >
<!-- Creamos un iframe donde se muestra el historial -->
</iframe> 
<script>
function eraseText() {
    document.getElementById("mensaje").value = "";
}
</script>
<?php

echo <<<FORM
<form method="post" >
Usuario: <input type="text" id="user" name="user" size="20" value="$_POST[user]">
<input type="color" name="favcolor"  value="$_POST[favcolor]">
<br>

<textarea id="mensaje" name="mensaje" value="$_POST[mensaje]" rows = "3" cols = "50"></textarea>
<!-- Mensaje: <input type="text" id="mensaje" name="mensaje" value="$_POST[mensaje]" size=33> -->
<BR>
<input type="button" value="Borrar" onclick="javascript:eraseText();"> 
<input type="submit" VALUE="Enviar" name="enviar" id="enviar" size=33><BR>
</form>
FORM;

if($_POST['enviar']){
$user = $_POST['user']; //vinculamos la variable
$color = $_POST['favcolor'];
$mensaje = $_POST['mensaje']; //vinculamos la variable

$hist = fopen("historial.txt","a"); //abrimos el archivo donde se guarda todo el historial
fwrite($hist, "<span style=\"color:".$color."\"><em><b>$user</b> <small>, a las ".date("H:i:s")." dijo:</small></em> $mensaje" . "</span><a name=\"end\"></a><br>" . PHP_EOL); //insertamos el texto
fclose($hist);  //cerramos el archivo
}
?> 