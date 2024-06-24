
<?php

use PHPUnit\Framework\TestCase;
use MyProject\Database;

class DatabaseTest extends TestCase {
    public function testConnection() {
        $db = new Database("localhost", "user", "password", "testdb");
        $this->assertInstanceOf(Database::class, $db);
    }

    public function testQuery() {
        $db = new Database("localhost", "user", "password", "testdb");
        $result = $db->query("SELECT 1");
        $this->assertNotFalse($result);
    }
}
?>