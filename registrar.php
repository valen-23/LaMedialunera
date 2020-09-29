<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (!empty($_POST['name']) >= 1 && !empty($_POST['telefono']) >= 1) {
	    $name = trim($_POST['name']);
		$telefono = trim($_POST['telefono']);
		$domicilio = trim($_POST['domicilio']);
		$dia = trim($_POST['dia']);
		$producto = trim($_POST['producto']);
		$cantidad = trim($_POST['cantidad']);
	    $consulta = "INSERT INTO `datos`(`id`, `nombre`, `telefono`, `domicilio`, `dia`, `producto`, `cantidad`) VALUES ('$id','$name','$telefono','$domicilio','$dia','$producto','$cantidad')";
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tu pedido se ha enviado correctamente!<br>Gracias por confiar en Nosotros</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups, ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>