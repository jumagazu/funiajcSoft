<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function modificar(cod){
			window.location="http://localhost/cursophp/modificar.php?parametro="+cod;

		}
	</script>
	<style>
		th,td{
			font-size: 12px;
		}

		tr:nth-child(even) {
		    background-color:#fff;
		}
		tr:nth-child(odd) {
		    background-color: #CADAE4;
		}

		img:hover{
			cursor: pointer;

		}
	</style>
</head>
<body>
	<?php
		require "controlDB.php";
		$obj = new controlDB();
		$datos = $obj->consultar("select * from personal");
	?>
	<h1 style="text-align: center;">LISTADO DE ALUMNOS</h1>
	<a href="estudiante.php"><img src="images/agregar.png"></a>
	<table>
		<tr>
			<th>Documento</th>
			<th>Tipo dcto</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Sexo</th>
			<th>Dirección</th>
			<th>Celular</th>
			<th>Fecha nacimiento</th>
			<th>Tipo de persona</th>
			<th>Correo</th>
			<th>Libreta Militar</th>
			<th>Estrato</th>
			<th>Tipo estudiante</th>
			<th colspan="2" style="text-align: center;">Operación</th>
		</tr>
		<?php foreach ($datos as $fila){?>
		<tr>
			<td><?php echo $fila["per_id"]; ?></td>
			<td><?php echo $fila["per_tipoid"]; ?></td>
			<td><?php echo $fila["per_nombre"]; ?></td>
			<td><?php echo $fila["per_apellidos"]; ?></td>
			<td><?php echo $fila["per_sexo"]; ?></td>
			<td><?php echo $fila["per_direccion"]; ?></td>
			<td><?php echo $fila["per_celular"]; ?></td>
			<td><?php echo $fila["per_fechanac"]; ?></td>
			<td><?php echo $fila["per_tipoper"]; ?></td>
			<td><?php echo $fila["per_correo"]; ?></td>
			<td><?php echo $fila["per_libretamilitar"]; ?></td>
			<td><?php echo $fila["per_estracto"]; ?></td>
			<td><?php echo $fila["per_tipoestudiante"]; ?></td>
			<td style="text-align: center;"><img src="images/editar.png" width="30%" onclick="modificar(<?php echo $fila["per_id"]; ?>)" /></td>
			<td style="text-align: center;"><img src="images/eliminar.png" width="30%" onclick="modificar(<?php echo $fila["per_id"]; ?>)" /></td>

			
		</tr>	
		<?php }  ?>
	</table>
</body>
</html>
