<?php

use PHPUnit\Framework\TestCase;
use MyProject\User;
use MyProject\Database;

class UserTest extends TestCase {
    private $db;

    protected function setUp(): void {
        $this->db = $this->createMock(Database::class);
    }

    public function testValidateUser() {
        $user = new User($this->db);

        $this->db->method('escapeString')->willReturnArgument(0);
        $this->db->method('query')->willReturn((object)['num_rows' => 1, 'fetch_assoc' => function() {
            return ['contrasena' => password_hash('password', PASSWORD_DEFAULT)];
        }]);

        $result = $user->validateUser('test@example.com', 'password');
        $this->assertNotFalse($result);
    }
}


?>
