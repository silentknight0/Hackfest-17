<?php
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'WhiteHats' .  DIRECTORY_SEPARATOR );
define('APPL', ROOT . 'application'. DIRECTORY_SEPARATOR );
require APPL . 'config/config.php';
require ROOT . 'system/core/application.php';
$wh_app = new Application();

?>