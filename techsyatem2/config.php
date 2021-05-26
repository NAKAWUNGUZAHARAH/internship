<?php

define('WEB_URL', 'http://localhost/results/');
define('ROOT_PATH', '.../../results/');


define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'results');
$link = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
mysqli_select_db($link,DB_DATABASE) or die(mysqli_error($link));
?>
