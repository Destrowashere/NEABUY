<?php

namespace MyProject;

class Database {
    private $connection;

    public function __construct($host, $username, $password, $dbname) {
        $this->connection = new \mysqli($host, $username, $password, $dbname);
        if ($this->connection->connect_error) {
            throw new \Exception("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function escapeString($string) {
        return $this->connection->real_escape_string($string);
    }
}
?>