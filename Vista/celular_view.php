<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
		<link rel="stylesheet" type="text/css" href="css/styleVenta.css">
	
	
</head>

<body>
	<form class="box2" method="post">
		<input type="text" name="buscar" placeholder="Buscar"><input type="submit" name="buscar" value="Buscar">
		
	</form>
	<form class="box">
		<table class="box1">
			<tr>
				<td class="box4"><input type="number" name="nit" placeholder="Nit" required></td>
			</tr>
	<?php
			//getCelu se lo obtiene desde el controlador
	foreach($getCelu as $registro){?>
	
	<tr>
		<td><?php echo $registro["marca"]; ?>  </td>
		<td>Bs <?php echo $registro["precio"]; ?>  </td>
		<td> <a href="(Venta.php?)bid=<?php echo $registro["marca"]; ?>">
							<input type="submit" name="del" id="del" value="Borrar">
						</a> </td>
	</tr>
		
	<?php
	}
	?>
			</table>
			</form>
</body>
</html>