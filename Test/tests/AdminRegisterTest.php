<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../admin_register.php'; // Ajustar la ruta según la ubicación real

class AdminRegisterTest extends TestCase {
    public function testRegistroExitoso() {
        // Simulación de conexión exitosa y registro exitoso
        $mockConex = $this->getMockBuilder(mysqli::class)
                          ->disableOriginalConstructor()
                          ->getMock();

        $mockConex->expects($this->once())
                  ->method('query')
                  ->willReturn(true);

        $mockConex->expects($this->once())
                  ->method('real_escape_string')
                  ->willReturnArgument(0);

        global $conex;
        $conex = function() use ($mockConex) {
            return $mockConex;
        };

        $username = "testuser";
        $password = "testpassword";
        $email = "test@example.com";
        $role = "admin";

        $resultado = registrarAdministrador($username, $password, $email, $role);
        $this->assertEquals("Registro exitoso", $resultado);
    }

    public function testErrorRegistro() {
        // Simulación de conexión exitosa pero falla en el registro
        $mockConex = $this->getMockBuilder(mysqli::class)
                          ->disableOriginalConstructor()
                          ->getMock();

        $mockConex->expects($this->once())
                  ->method('query')
                  ->willReturn(false);

        $mockConex->expects($this->once())
                  ->method('error')
                  ->willReturn("Error al insertar");

        global $conex;
        $conex = function() use ($mockConex) {
            return $mockConex;
        };

        $username = "testuser";
        $password = "testpassword";
        $email = "test@example.com";
        $role = "admin";

        $resultado = registrarAdministrador($username, $password, $email, $role);
        $this->assertStringContainsString("Error al registrar usuario", $resultado);
    }
}
?>
