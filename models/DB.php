<?php

class DB{
    public static function conectar(){
        try{
            $pdo = new pdo('mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_1760f604f86fa74; charset=utf8','b489cc25e2060d','1d9bd5b1');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>