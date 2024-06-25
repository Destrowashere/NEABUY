<?php

class DatabaseResult {
    private $result;

    public function __construct($result) {
        $this->result = $result;
    }

    public function numRows() {
        return $this->result->num_rows;
    }

    public function fetchAssoc() {
        return $this->result->fetch_assoc();
    }
}
?>
