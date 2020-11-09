<?php

class DB{
    const USER="lamp";
    const PASS = "lamp";
    const HOST = "database";
    const DB = "lamp";

    public static function connToDB(){
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }
}