<?php

//OBTENER VARIABLES DE LA FUNCION JAVA SCRIPT
$email     =$_POST["email"];
$password  =$_POST["password"];

$idusuario=0;
$consulta="select idusuario from clientes where email='$mail' and password='$password'";
$recordset = mysqli_query($link,$consulta);
while($registro = mysqli_fetch_array($recordset)){$idusuario=$registro["idusuario"];}

if(!isset($idusuario)){$idusuario=0;}

if($idusuario==0){ 
	$_SESSION['ss_idusuario']=0;
	echo 0; // no existe registro
}else{
	$_SESSION['ss_idusuario']=$idusuario;
	echo 1; // se encontro registro
}



?>