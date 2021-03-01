<?php
 require __DIR__ . '/vendor/autoload.php';
 
session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);

define('bd', array('host'=>'127.0.0.1', 'db'=>'portal', 'pass'=>'', 'user'=>'root',));
define('url', 'http://localhost/portal/');

try {
 
    require __DIR__ . '/routes/routes.php';
 
} catch(\Exception $e){
     
    echo $e->getMessage();
}