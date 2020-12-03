<?php

	include("conexionRegina.php");

	$nombre= $_POST['nombre'];
	$categoria= $_POST['categoria'];
	$precio= $_POST['precio'];
	$existencias= $_POST['existencias'];
	$descripcion= $_POST['descripcion'];
	
	$query="INSERT INTO producto(producto_nombre, producto_categoria, producto_precio, producto_existencias, producto_descripcion) VALUES ('$nombre','$categoria','$precio', '$existencias', '$descripcion')";

	$resultado= $conexion->query($query);

	//if ($resultado) {
	//	header("location: archivo.php");
	//	echo "Producto agregado con exito";
	//}else{
	//	echo "El producto no se agrego";
	//}
  ?>