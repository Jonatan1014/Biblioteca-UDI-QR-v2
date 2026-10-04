<?php
!defined('DB_HOST') && define('DB_HOST', 'mysql:host='.(getenv('DB_HOST')?:'localhost').';port='.(getenv('DB_PORT')?:'3306').';dbname='.(getenv('DB_NAME')?:'libroqr').';charset=utf8mb4');
!defined('DB_USER') && define('DB_USER', getenv('DB_USER')?:'root');
!defined('DB_PASS') && define('DB_PASS', getenv('DB_PASS')?:'');