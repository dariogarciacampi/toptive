<?php
 class Posts {
 		//Método para listar los posts
		public function listarposts($sql){
			include("conexion.php");
			$result = mysqli_query($conectado,$sql);
			return $result; 
		}
		//Método para crear nuevo post
		public function nuevopost($titulo, $cuerpo){
			include("conexion.php");
			$sql = "INSERT INTO posts (TituPost, CuerPost) values ('".$titulo."','".$cuerpo."')";
			$result = mysqli_query($conectado,$sql);
			return $result;
		}
}
?>