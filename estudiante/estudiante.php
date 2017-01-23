<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link href="css/jquery-ui.css" rel="stylesheet">
		<script>
			$(function() {
     			$("#fecha").datepicker({ dateFormat: 'dd-mm-yyyy'}); 
			});
		</script>
		<title>Bienvenidos</title>
	</head>
	<body>

	<div class="wrapper">

	<!-- **************** CABACERA (LOGO - MENU) ***************/-->
		<header>
			<div class="logo"><img src="images/logo.png"></div>
			<!--<nav>
				<a href="#">HOME</a>
				<a href="#">QUIENES SOMOS</a>
				<a href="#">DIPLOMADOS</a>
				<a href="#">CONTACTENOS</a>				
			</nav>-->
		</header>

		<div class="contenedor">
			<form id="frm-estudiante" method="POST" action="capturar.php">
				<h1>REGISTRO DE ESTUDIANTES</h1>
				<div class="campos">
					<fieldset>
						<input requerid type="text" name="nombre" placeholder="Nombre">
						<input requerid type="text" name="apellidos" placeholder="Apellidos">
						<input requerid type="text" name="numeroid" placeholder="Número identificion">
						<select required name="tipoid">
							<option value="C">Cédula</option>
							<option value="T">Tarjeta identidad</option>
							<option value="E">Cédula extranjería</option>
						</select>
						<input type="date" name="fechanac" placeholder="Fecha nacimiento" id="fecha">
						<input type="text" name="telefono" placeholder="Teléfono">
						<input type="email" name="correo" placeholder="Correo">
					</fieldset>
					<fieldset>
						<input type="text" name="direccion" placeholder="Dirección">
						<input type="number" min="1" max="6"  name="estrato" placeholder="Estrato">
						<select required type="text" name="sexo" placeholder="Sexo">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>

						<select required type="text" name="tipoest" placeholder="Tipo Estudiante">
							<option value="I">Interno</option>
							<option value="E">Externo</option>
						</select>

						<input type="text" name="programaacad" placeholder="Programa académico">
						<input type="text" name="libretamilitar" placeholder="Libreta militar">
						
					</fieldset>
				</div>
					<div class="botones">
						<input type="button" class="boton agregar" ></input>
						<input type="button" class="boton editar"></input>
						<input type="button" class="boton eliminar"></input>
						<input type="submit" class="boton grabar"></input>
						<input type="button" class="boton buscar"></input>
					</div>
				
					
				<!--<div class="volver"><a href="#">Regresar</a></div>-->
				
			</form>
				
		</div> <!-- *** FIN CONTENEDOR *** -->
	</div>


	</body>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.io/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/codigo.js"></script>
	<script src="js/live.js"></script>	
</html>