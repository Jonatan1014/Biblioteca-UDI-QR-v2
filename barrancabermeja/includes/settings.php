<?php
!defined('DB_SERVER') && define('DB_SERVER', getenv('DB_HOST')?:'localhost');
!defined('DB_PORT') && define('DB_PORT', (int) (getenv('DB_PORT')?:3306));
!defined('DB_NAME') && define('DB_NAME', getenv('DB_NAME')?:'libroqr');
!defined('DB_HOST') && define('DB_HOST', 'mysql:host='.DB_SERVER.';port='.DB_PORT.';dbname='.DB_NAME.';charset=utf8mb4');
!defined('DB_USER') && define('DB_USER', getenv('DB_USER')?:'root');
!defined('DB_PASS') && define('DB_PASS', getenv('DB_PASS')?:'');
