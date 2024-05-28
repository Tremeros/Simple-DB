<?php

namespace Gachette\SimpleDbPackage;

class SimpleDB {
    private $connection;
    function connect($host, $username, $password, $database) {
        $this->connection = new mysqli_connect($host,$username, $password, $database);
        if(mysqli_connect_errno()) {
            return "Database connection failed!";
        }

        return $this->connection;
    }
}