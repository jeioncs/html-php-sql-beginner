<?php

function generateRandomString($length = 10) {
	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
} 

$filename=generateRandomString().".txt";

if($_POST['enviar']){
	$user = $_POST['user']; 
	$password = $_POST['password'];
   
	if ($user =="admin" && $password=="admin"){
		echo "Has borrado el fichero de historial</br></br>";
		$chat=file_get_contents("historial.txt");
		file_put_contents("/tmp/".$filename, $chat);
		file_put_contents("historial.txt","");
		unset($_POST['password']);

echo <<<VOLVERCHAT
		<a href="index.php">Volver al Chat</a>
VOLVERCHAT;

	}

}
else{

echo <<<FORM

<h2>Administrar Historial (Borrar)</h2>

<form method="post" >
Usuario: <input type="text" id="user" name="user" size="20" value="$_POST[user]"><br>
Password: <input type="password" id="password" name="password" size="20" value="$_POST[password]"><br>
<input type="submit" VALUE="Enviar"  name="enviar" id="enviar" size=33><BR>
</form>
FORM;

}

?> 
