<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = explode("/", $url);

$folder = '/tugas2-mvc/';
$db_name = 'penjualan';

$baseurl = 'http://' . $url[2] . '' . $folder;

define('BASEURL', $baseurl);

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', $db_name);

// params
define('PAR0', $url[0]);
define('PAR1', $url[1]);
define('PAR2', $url[2]);
define('PAR3', $url[3]);
define('PAR4', $url[4]);
if (isset($url[5])) {
    define('PAR5', $url[5]);
}
if (isset($url[6])) {
    define('PAR6', $url[6]);
}
if (isset($url[7])) {
    define('PAR7', $url[7]);
}
