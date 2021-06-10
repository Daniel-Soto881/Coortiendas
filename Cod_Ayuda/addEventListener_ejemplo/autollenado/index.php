<html>
	<head>
		<link href="css/estilo.css" rel="stylesheet" type="text/css" /> <!--carga de css.. -->
		<script type="text/javascript" src="js/ajax.js"></script> <!-- Carga de js.. -->
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</head>
	
	<body>
		<?php
		include ('conexion.php');
		?>
		<h2>Sugerencia y autollenado de formulario</h2>
		<form name="form1" id="form1" enctype="multipart/form-data">
			<div style="">
				Busqueda: 
				<input type="text" maxlength="5" name="busqueda" id="busqueda" onKeyUp="lookup(this.value);" placeholder="Palabra clave_1">
				<div class="suggestionsBox" id="suggestions" style="display:none;"> <!-- div para imprimir resultados -->
					<div class="suggestionList" id="autoSuggestionsList"></div>
				</div>
			</div>
			
			<!--Este campo se llenará al seleccionar un item de la lista -->
			<input type="hidden" name="id_reg" id="id_reg">
			
			<!--Al detectarse dato en id_reg se solicitará información de dicho elemento para llenar la siguiente informacion-->
			<div id="div_resp">
				Nombre: <input type="text" name="nombre" id="nombre">
				Domicilio: <input type="text" name="domicilio" id="domicilio">
				Telefono: <input type="text" name="telefono" id="telefono">
				Correo: <input type="text" name="correo" id="correo">
			</div>

			
		</form>
	</body>
</html>

