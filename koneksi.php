<?php 
	$host ='localhost';
	$user = 'root';
	$password = '';
	$database = 'pemweb';

	$conect_db = mysql_connect($host, $user. $password);
	$find_db = mysql_select_db($database);
 ?>