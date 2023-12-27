<?php

namespace App\Services;

class App
{
    public static $connect_db;
    public static function start()
    {
        self::db();
    }

    public static function db()
    {

        $config = require_once "database/db.php";

        if ($config["enable"]){
            App::$connect_db = mysqli_connect(
                $config["hostname"],
                $config["username"],
                $config["password"],
                $config["database"]
            );

            if (! App::$connect_db){
                die("Error connection" . mysqli_connect_error());
            }
        }
    }

    public static function ifsign()
    {
        if ($_SESSION['user']){
            header('Location: /backend/library-v2/');
            exit();
        }
    }

    public static function ifsign_not()
    {
        if (!$_SESSION['user']){
            header('Location: /backend/library-v2/');
            exit();
        }
    }
}