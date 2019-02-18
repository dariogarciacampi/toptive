<?php 	
		//Obtenemos los valores mediante post
	 	$titulo = $_POST["titulo"];
	 	$titulo= str_replace('"', '', $titulo); 
	 	$titulo= str_replace("'", "", $titulo); 
	 	$cuerpo = $_POST['cuerpo'];
	 	$cuerpo= str_replace('"', '', $cuerpo); 
	 	$cuerpo= str_replace("'", "", $cuerpo); 
	 	include("funciones/funciones.php"); 
	 	//Instanciamos la clase e insertamos un nuevo post mediante la funcion nuevo post
	 	$posts = new posts;
		$posts->nuevopost($titulo, $cuerpo);
	 	

	echo("Se ha creado correctamente su nuevo post");


?>