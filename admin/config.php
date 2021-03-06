<?php
// HTTP
define('HTTP', $_SERVER['HTTP_HOST'].str_replace('/admin', '',dirname($_SERVER['PHP_SELF'])));
define('HTTP_SERVER', 'http://'.HTTP.'/admin/');
define('HTTP_CATALOG', 'http://'.HTTP.'/');
define('HTTP_IMAGE', 'http://'.HTTP.'/image/');
define('TOWEL_ASSETS_CDN','http://towelassets.local/');
define('TOWEL_STATIC_CDN','http://towelstatic.local/');
define('TOWEL_ASSETS_DIR','C:\xampp\htdocs\towelweb/assets/');
define('TOWEL_STATIC_DIR','C:\xampp\htdocs\towelweb/public/');

// HTTPS
define('HTTPS_SERVER', 'http://'.HTTP.'/admin/');
define('HTTPS_IMAGE', 'http://'.HTTP.'/image/');

// DIR
define('BASE_DIR', str_replace(DIRECTORY_SEPARATOR.'admin', '', realpath(dirname(__FILE__))));
define('DIR_APPLICATION', BASE_DIR.'/admin/');
define('DIR_SYSTEM', BASE_DIR.'/system/');
define('DIR_DATABASE', BASE_DIR.'/system/database/');
define('DIR_LANGUAGE', BASE_DIR.'/admin/language/');
define('DIR_TEMPLATE', BASE_DIR.'/admin/view/template/');
define('DIR_CONFIG', BASE_DIR.'/system/config/');
define('DIR_IMAGE', BASE_DIR.'/image/');
define('DIR_CACHE', BASE_DIR.'/system/cache/');
define('DIR_DOWNLOAD', BASE_DIR.'/download/');
define('DIR_LOGS', BASE_DIR.'/system/logs/');
define('DIR_CATALOG', BASE_DIR.'/catalog/');

//DIR_TOWEL
define('DIR_IMAGE_TOWEL_SMALL', TOWEL_STATIC_DIR.'/towel/small/');
define('DIR_IMAGE_TOWEL_BIG', TOWEL_STATIC_DIR.'/towel/big/');
define('DIR_IMAGE_TOWEL_CATE_SMALL', TOWEL_STATIC_DIR.'/towel-cate/small/');
define('DIR_IMAGE_TOWEL_CATE_BIG', TOWEL_STATIC_DIR.'/towel-cate/big/');
define('DIR_IMAGE_HOME_IMAGE_SMALL', TOWEL_STATIC_DIR.'/home-image/small/');
define('DIR_IMAGE_HOME_IMAGE_BIG', TOWEL_STATIC_DIR.'/home-image/big/');
define('DIR_IMAGE_TOWEL_IMAGE_SMALL', TOWEL_STATIC_DIR.'/towel-image/small/');
define('DIR_IMAGE_TOWEL_IMAGE_BIG', TOWEL_STATIC_DIR.'/towel-image/big/');

//HTTP_TOWEL
define('HTTP_IMAGE_TOWEL_SMALL', TOWEL_STATIC_CDN.'/towel/small/');
define('HTTP_IMAGE_TOWEL_BIG', TOWEL_STATIC_CDN.'/towel/small/');
define('HTTP_IMAGE_TOWEL_CATE_SMALL', TOWEL_STATIC_CDN.'/towel-cate/small/');
define('HTTP_IMAGE_TOWEL_CATE_BIG', TOWEL_STATIC_CDN.'/towel-cate/small/');
define('HTTP_IMAGE_HOME_IMAGE_SMALL', TOWEL_STATIC_CDN.'/home-image/small/');
define('HTTP_IMAGE_HOME_IMAGE_BIG', TOWEL_STATIC_CDN.'/home-image/big/');
define('HTTP_IMAGE_TOWEL_IMAGE_SMALL', TOWEL_STATIC_CDN.'/towel-image/small/');
define('HTTP_IMAGE_TOWEL_IMAGE_BIG', TOWEL_STATIC_CDN.'/towel-image/big/');

//DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'towel');
define('DB_DATABASE_TOWEL', 'towel');
define('DB_PREFIX', '');
?>