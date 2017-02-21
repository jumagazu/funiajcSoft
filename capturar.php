<?php

	require "controlDB.php";

 	$nombre			 = $_POST["nombre"];
	$apellidos		 = $_POST["apellidos"];
	$numeroid		 = $_POST["numeroid"];
	$tipoid			 = $_POST["tipoid"];
	$fechanac		 = $_POST["fechanac"];
	$telefono		 = $_POST["telefono"];
	$correo			 = $_POST["correo"];
	$direccion		 = $_POST["direccion"];
	$estrato		 = $_POST["estrato"];
	$sexo			 = $_POST["sexo"];
	$tipoest		 = $_POST["tipoest"];
	$programa		 = $_POST["programaacad"];
	$libretamilitar	 = $_POST["libretamilitar"];
	//hola mundo //

	$sql = "insert into personal values('$numeroid','$tipoid','$nombre','$apellidos','$sexo','$direccion','$telefono','$fechanac','E','$correo','$libretamilitar','$estrato','$tipoest')";
	$obj = new controlDB;
	$obj->actualizar($sql);

?>
