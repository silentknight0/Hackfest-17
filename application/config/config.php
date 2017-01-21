<?php

define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}


if (file_exists(ROOT . 'system/helpers/autoload.php')) {
  require ROOT . 'system/helpers/autoload.php';
}

require ROOT . 'system/database/dbhelper.php';
require APPL . 'config/database.php';
require ROOT . 'system/database/dbquery.php';
require ROOT . 'system/core/BaseController.php';
?>