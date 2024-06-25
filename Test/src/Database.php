<?php
require_once 'DatabaseResult.php';

class Database {
    private $conex;

    public function __construct($host, $username, $password, $dbname) {
        $this->conex = new mysqli($host, $username, $password, $dbname);

        if ($this->conex->connect_error) {
            die("Connection failed: " . $this->conex->connect_error);
        }
    }

    public function query($query, $params) {
        $stmt = $this->conex->prepare($query);
        if ($params) {
            $stmt->bind_param(...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return new DatabaseResult($result);
    }
}
?>
