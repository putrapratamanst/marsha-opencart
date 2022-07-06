<?php
// HTTP
define('HTTP_SERVER', 'http://'.$_SERVER['SERVER_NAME'].':80/opencart/');

// HTTPS
define('HTTPS_SERVER', 'https://'.$_SERVER['SERVER_NAME'].':443/opencart/');

// DIR
define('DIR_APPLICATION', 'C:/Bitnami/opencart-3.0.3.8-6/apps/opencart/htdocs/catalog/');
define('DIR_SYSTEM', 'C:/Bitnami/opencart-3.0.3.8-6/apps/opencart/htdocs/system/');
define('DIR_IMAGE', 'C:/Bitnami/opencart-3.0.3.8-6/apps/opencart/htdocs/image/');
define('DIR_STORAGE', 'C:\Bitnami\opencart-3.0.3.8-6/apps/opencart/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1:3306');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// HEADERS
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");