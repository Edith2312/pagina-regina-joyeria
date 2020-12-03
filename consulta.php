<?php
session_start();

class consulta
{
	
	public function __construct()
	{
		# code...
		$cn = mysql_connect("localhost","root","");
		mysql_select_db("regina");
		msql_query("SET NAMES 'UTF8'");
}
		public function backup_tables()
		{
			$tables = "*";
			if($tables == "*")
		{
			$tables = array('producto');
		}
		
		}
//////////FUNCION

	public function agregar_producto($producto_nombre, $producto_categoria, $producto_precio, $producto_existencias, $producto_descripcion)
	{
		$buscar = msql_query("SELECT * FROM producto
							WHERE producto_nombre LIKE '%$nombre%',
							WHERE producto_categoria LIKE '%$categoria%',
							WHERE producto_precio LIKE '%$precio%',
							WHERE producto_existencias LIKE '%$existencias%',
							WHERE producto_descripcion LIKE '%$descripcion%'");
		if ($reg = mysql_fetch_array($buscar)) {
			# code...
			echo "2";
		}
		else{
			$sql_1 = "INSERT INTO producto (producto_id, producto_nombre, producto_categoria, producto_precio, producto_existencias, producto_descripcion)
			VALUES (NULL, '$nombre', '$categoria', '$precio', '$existencias', '$descripcion')";
			if(mysql_query($sql_1)){
				echo "1";
			}
			else{
				echo "0";
			}
		}
	}
}

/******************************************/

	$obconsulta = new consulta();

		switch ($_GET['accion']) {
			case 'agregarproducto':
			$obconsulta->agregar_producto($_GET['nombre'], $_GET['categoria'], $_GET['precio'], $_GET['existencias'], $_GET['descripcion']);
			break;
		}

?>
		
   


