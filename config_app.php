<?php 
/**
*configurar entorno
*es recomendable que este archivo esté dentro de una carpeta que esté por encima de htdocs
*/
	$dev ='http://localhost/ejemplos';
	$production='http://www.mipagina.com';

	define('ENV', $dev);
/**
 * Configurar base de datos
 * */
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'xxxxxxxxx');
	define('DB', 'world');
		

 ?>