
<?php
//Set of Functions to handle requests to the database for retrival,
//analysis and insertion of data
define('DB_TYPE', 'mysqli');
define('DB_HOST', 'localhost');
define('DB_NAME', 'whitehats');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
define('DB_ENCRYPT',FALSE);
$wh_connect = new dbconnect();
?>