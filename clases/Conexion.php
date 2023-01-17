<?php
use MongoDB\Client as Mongo;
require_once $_SERVER['DOCUMENT_ROOT'] . "/crudphpmongo/vendor/autoload.php";

class conexion {
    public function conectar(){
        try {
            $servercon = "127.0.0.1";       
            $port = "27017";
            $user = "mongoadmin";
            $password = "123456";
            $databasecon = "crud";

            $canConnection = "mongodb://" .
                                $user . ":" . 
                                $password . "@" .
                                $servercon . ":" .
                                $port . "/" .
                                $databasecon;

                                $client = new Mongo($canConnection);
                                //$client = new MongoDB\Driver\Manager('mongodb://localhost:27017');
                                return $client->selectDatabase($databasecon);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

$objeto = new Conexion();
var_dump($objeto->conectar());

?>