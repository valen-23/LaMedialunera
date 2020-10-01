<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Realizá tu Pedido!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
		<input type="telefono" name="telefono" placeholder="Telefono">
		<input type="domicilio" name="domicilio" placeholder="Domicilio">
		<input type="dia" name="dia" placeholder="Dia">
		<input type="producto" name="producto" placeholder="Producto">
		<input type="cantidad" name="cantidad" placeholder="Cantidad">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>