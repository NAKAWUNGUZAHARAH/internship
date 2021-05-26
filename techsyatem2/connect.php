<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_name	= 'results'; 

/* End config */

$conn = mysqli_connect('localhost','root',"",'results');
	if(!$conn) {
		die('Failed to connect to server: ' . mysqli_error());
	}

?>