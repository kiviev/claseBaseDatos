<?php 
require_once('requires.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo uso Clase Db</title>
	<style>
	th{
		background: #1f1f1f;
		color: orange;
	}
	td{
		background: #d9d9d9;
		color:green;
	}
	</style>

	
</head>
<body>
	<h2>Ejemplo de uso de la clase Db</h2>
<?php 

$db = new Db();
$columns=array('ID','Name','CountryCode','Population');
$resul=$db->select($columns, 'world.city')
->limit(10)
->exe();

 ?>
 <h3>Resultado con nombres de las columnas de las tablas</h3>
 <?php 
echo create_table($resul);
echo "<br>";
  ?>


<h3>Resultado con Alias para las columnas</h3>
<?php 
$columns=array('ID','Name','CountryCode','Population');
$resul=$db->select($columns, 'world.city')
->where('CountryCode', '=', 'AFG')
->andd('Population' ,'>' ,'130000')
->exe();


$alias=array('Id' , 'Nombre' , 'Código de país' , 'Población');
echo create_table($resul , $alias);
echo "<br>";

 ?>
<?php 
$db->close();
 ?>
</body>
</html>