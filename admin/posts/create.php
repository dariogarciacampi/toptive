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
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<script type="text/javascript">
			  $(document).ready(function(){
			    $("#enviar-btn").click(function(){
			    		//Tomamos los valores de los campos
				    	var titulo = $("#titulo").val();
				    	var cuerpo = $("#cuerpo").val();
				    	//Verificamos que los campos no esten vacios
						if (titulo == "") {
							
							$("#titulo").focus();
							return false;
						}
						if (cuerpo == "") {
							
							$("#cuerpo").focus();
							return false;
						}
						//Guardamos en un dataString dichos valores obtenidos y ejecutamos post mediante Ajax
				    	var dataString = 'titulo=' + titulo + '&cuerpo=' + cuerpo;
				    $.ajax({
				      url:"oncreate.php",
				      type: "POST",
				      data: dataString,
				      success: function(respuesta){
				        alert(respuesta);
				        window.location.assign("../../index.php");
				      }
				    });

				  });


			});
</script>


</head>
<body> 

	<header>
		
			<div class="container-fluid">
				<!-- Barra de navegacion -->
					<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">	
							<div class="navbar-header">
								<a class="navbar-brand" href="../../index.php">My Blog</a>
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
									<span class="sr-only">Menu</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>

								</button>

							</div>
									
								<div class="collapse navbar-collapse navbar-right" id="navbar-1">

									<ul class="nav navbar-nav">
										<li><a href="../../index.php">Ver Posts</a></li>
										<li><a href="create.php">Crear Post</a></li>
									</ul>

								</div>
							</div>
						</nav>
			</div>
			
	</header>

	
		<div class="container" style="padding-top: 80px;">
			<!-- Formulario para crear un nuevo post -->
				<form class="form-horizontal" id="formulario" method="post" action=""> 
				    <div class="form-group">
				        <label class="control-label col-xs-3">Titulo:</label>
				        <div class="col-xs-9 col-sm-9 col-md-6 col-lg-5">
				            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo de Post" required="true">
				        </div>
				        
				    </div>
		    
					<div class="form-group">
				        <label class="control-label col-xs-3">Cuerpo del Post:</label>
				        <div class="col-xs-9 col-sm-9 col-md-6 col-lg-5">
				            <textarea class="form-control" rows="6" name="cuerpo" id="cuerpo" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation." required="true"></textarea>
				        </div>
				        
				    </div>

		    <div class="form-group">
		        <div class="col-xs-offset-3 col-xs-9">
		            <input type="button" id="enviar-btn" class="btn btn-success" value="Publicar" >
		        </div>
		    </div>
		</form>
	</div>
			
	<!--Pie de pagina -->
	<div id="footer">
      <div class="well">
        <p class="text-muted credit" style="text-align: center">My Blog © Copyright 2019 </p>
      </div>
    </div>

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>