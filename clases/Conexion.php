<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/crudphpmongo/vendor/autoload.php";

class conexion {
    public function conectar(){
        try {
            $servercon = "localhost";       
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

                                $client = new MongoDB\Client($canConnection);
                                return $client->selectDatabase($databasecon);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

?>