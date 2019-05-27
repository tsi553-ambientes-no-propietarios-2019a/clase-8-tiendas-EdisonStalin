<?php 
include('common/utils.php');
//print_r($_SESSION['user']);

$products = getProducts($conn);
$user = getStore($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Tienda: <?php echo $_SESSION['user']['store']; ?></h2>

	<a href="new_product.php">Añadir producto</a>

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
			<?php foreach ($products as $p) { ?>

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
		</tbody>
	</table>

	<br>
	<h2> <?php  echo "Otras Tiendas"; ?></h2>

	<table BORDER>
		<thead>
			<tr>
				<th>Tienda</th>
				<th>Productos</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($user as $u) { ?>

				<tr>
					<td><?php echo $u['username'] ?></td>
						<?php $v= $u['id'] ?>
						

					<td> <a href="store.php?id=<?php echo $v ?>">Visitar </a> </td>

				</tr>
			<?php } ?>
		</tbody>
	</table>


</body>
</html>