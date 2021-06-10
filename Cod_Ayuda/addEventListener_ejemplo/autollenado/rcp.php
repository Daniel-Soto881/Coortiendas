<?php
include ('conexion.php');

if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$result = mysqli_query($con,"SELECT * FROM tbNombres WHERE nombre LIKE '%".$nombre."%' LIMIT 10");
	while($row = mysqli_fetch_array($result)){
		echo '<li onClick="fill_info('.$row['id'].');">'.$row['nombre'].'</li>';
	}
}

if(isset($_GET['idreg'])){
	$idreg = $_GET['idreg'];
	$result = mysqli_query($con,"SELECT * FROM tbNombres WHERE id='".$idreg."'");
	$row = mysqli_fetch_array($result);
	?>  
	<div id="div_resp">
		Nombre: <input type="text" name="nombrn e" id="nombre" value="<?php echo $row['nombre'] ?>" disabled >
		Domicilio: <input type="text" name="domicilio" id="domicilio" value="<?php echo $row['domicilio'] ?> ">
		Telefono: <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono'] ?>">
		Correo: <input type="text" name="correo" id="correo" value="<?php echo $row['correo'] ?>">
	</div> 
	<?php
}
?>