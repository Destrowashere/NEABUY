<?php
use PHPUnit\Framework\TestCase;
require_once 'src/login.php';
require_once 'src/Database.php';
require_once 'src/DatabaseResult.php';

class LoginTest extends TestCase {
    public function testEmptyFields() {
        $postData = ["Correo" => "", "contrasena" => ""];
        $result = procesarLogin($postData);
        $this->assertEquals("Por favor complete todos los campos.", $result);
    }

    public function testInvalidCredentials() {
        $db = $this->createMock(Database::class);
        $result = $this->createMock(DatabaseResult::class);

        $db->method('query')
           ->willReturn($result);

        $result->method('numRows')
               ->willReturn(0);

        global $conectarBD;
        $conectarBD = function() use ($db) {
            return $db;
        };

        $postData = ["Correo" => "wrong@example.com", "contrasena" => "wrongpassword"];
        $result = procesarLogin($postData);
        $this->assertEquals("Correo o contraseña incorrectos.", $result);
    }

    public function testValidCredentials() {
        $db = $this->createMock(Database::class);
        $result = $this->createMock(DatabaseResult::class);

        $db->method('query')
           ->willReturn($result);

        $result->method('numRows')
               ->willReturn(1);

        $hashedPassword = password_hash('validpassword', PASSWORD_DEFAULT);
        $result->method('fetchAssoc')
               ->willReturn(['Correo' => 'test@example.com', 'contrasena' => $hashedPassword]);

        global $conectarBD;
        $conectarBD = function() use ($db) {
            return $db;
        };

        $postData = ["Correo" => "test@example.com", "contrasena" => "validpassword"];
        $result = procesarLogin($postData);
        $this->assertEquals("", $result);
    }
}
?>
