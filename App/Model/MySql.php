<?php
namespace App\Model;

use PDO;

class MySql{

    public static $con;

    public static function conn()
    {
        if (Self::$con == null) {
            try {
                Self::$con = new PDO('mysql: host='.bd['host'].'; dbname='.bd['db'], bd['user'], bd['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
                Self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Exception $th) {
                echo "<h1>ERROR AO CONECtAR AO SERVIDOR</h1>";
            }
        }
        return Self::$con;
    }
}