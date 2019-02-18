<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Blog</title>
	<link rel="icon" type="image/png" href="imagen/icon.png" />
	<script src="jquery.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<body> 

	<header>
		
			<div class="container-fluid">
				<!-- Barra de navegacion -->
					<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">	
							<div class="navbar-header">
								<a class="navbar-brand" href="index.php">My Blog</a>
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
									<span class="sr-only">Menu</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>

								</button>

							</div>
									
								<div class="collapse navbar-collapse navbar-right" id="navbar-1">

									
									<ul class="nav navbar-nav">
										<li><a href="index.php">Ver Posts</a></li>
										<li><a href="admin/posts/create.php">Crear Post</a></li>
									</ul>

								</div>
							</div>
						</nav>
			</div>
			
	</header>

	
	<div class="container" style="padding-top: 80px;">
		<?php 
			 	//Instanciamos la clase posts
			 	include("admin/posts/funciones/funciones.php"); 
	 			$posts = New posts;
	 			//Sentencia SQL para traer el listado completo de los posts
	 			$sql = "SELECT * FROM posts ORDER BY CodiPost DESC";
				$arrayposts = $posts->listarposts($sql);
				//Mostramos el array que contiene los posts
				while ($verposts = mysqli_fetch_array($arrayposts)){
					$tituloposts = $verposts["TituPost"];
					$cuerpoposts = $verposts["CuerPost"];
					?>
					<div class="row">
					<h3><?php echo $tituloposts ?></h3></br>
					<?php echo ($cuerpoposts);
					?>
					</div>
					<?php
				}
		?>
	</div>
<!-- Pie de página -->
	<div id="footer">
      <div class="well">
        <p class="text-muted credit" style="text-align: center">My Blog © Copyright 2019 </p>
      </div>
    </div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>