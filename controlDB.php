<?php 

	class controlDB{
		function __construct(){
			try{
				$host = "localhost";
				$dbname = "fundiajc";
				$user = "root";
				$pass = "";

				$this->con=mysqli_connect($host,$user,$pass) or die("Error en la conexión");
				mysqli_select_db($this->con,$dbname) or die("No se ha encontrado la base de datos");

			}catch(Exception $ex){
				throw $ex;
			}
		}

		function consultar($sql){
			$res = mysqli_query($this->con,$sql);
			$data = NULL;
			while ($fila = mysqli_fetch_assoc($res)) {
				$data[] = $fila;
			}
			return $data;
		}

		function actualizar($sql){
			mysqli_query($this->con,$sql);
			if(mysqli_affected_rows($this->con)<=0){
				echo "No se pudo realizar la actualización";
			}else{
				echo "Se realizó la actualización correctamente";
			}
		}
	}





?>