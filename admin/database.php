<?php

class Database
{

    $dbHost = "localhost";
    $dbName = "burger_code";
    $dbUser = "root";
    $dbUserPassword = "";

    $connection = null;

    function connect() 
    {

        try
        {
            $connection = new PDO("mysql:host=" . $dbHost . ";dbname= " . $dbName,$dbUser,$dbUserPassword);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return $connection
    }

    function disconnect()
    {
        $connection = null;
    }
}

?>