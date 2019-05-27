<?php 
include('common/utils.php');
//print_r($_SESSION['user']);

//$products = getProducts($conn);
$viewStore = getInfo($conn);
$viewProducts = getView($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<?php foreach ($viewStore as $s) { ?>
		<?php $nameStore = $s['store'] ?>
		<?php $namePerson = $s['username'] ?>

	<?php } ?>


	<h1>Bienvenido <?php echo $nameStore; ?></h1>
	<h2>Tienda: <?php echo $namePerson; ?></h2>
	

	<?php
	$id=$_SESSION['user']['id'];
	$v=($_GET['id']);
	if($v == $id){  ?>

	<a href="new_product.php">Añadir producto</a>

	<?php }else{ 

		echo "No puede añadir productos";

	 } ?>
	
	


	<table BORDER>

		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($viewProducts as $p) { ?>

				<tr>
					<div align="right">
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?> </td>
					</div>
				</tr>
			<?php } ?>


</body>

<br>
<div><a href="home.php">volver</a></div>

</html>