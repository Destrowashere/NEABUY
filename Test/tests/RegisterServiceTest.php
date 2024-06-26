<?php

use PHPUnit\Framework\TestCase;
use App\RegisterService;

class RegisterServiceTest extends TestCase
{
    private $db;
    private $registerService;

    protected function setUp(): void
    {
     
        $this->db = $this->createMock(mysqli::class);
        $this->registerService = new RegisterService($this->db);
    }

    public function testRegisterSuccess()
    {
        $data = [
            'name' => 'John',
            'lastname' => 'Doe',
            'password' => 'password123',
            'email' => 'john@example.com',
            'phone' => '123456789',
            'cedula' => '123456',
            'direct' => '123 Main St',
            'role' => 'user'
        ];

      
        $stmt = $this->createMock(mysqli_stmt::class);
        $this->db->expects($this->exactly(3))
                 ->method('prepare')
                 ->willReturn($stmt);

        $stmt->expects($this->exactly(3))
             ->method('execute')
             ->willReturn(true);

        $this->db->expects($this->once())
                 ->method('insert_id')
                 ->willReturn(1);

        $result = $this->registerService->register($data);

        $this->assertTrue($result);
    }

    public function testRegisterFailureDueToMissingData()
    {
        $data = [
            'name' => '',
            'lastname' => 'Doe',
            'password' => 'password123',
            'email' => 'john@example.com',
            'phone' => '123456789',
            'cedula' => '123456',
            'direct' => '123 Main St',
            'role' => 'user'
        ];

        $result = $this->registerService->register($data);

        $this->assertFalse($result);
    }

    public function testRegisterFailureDueToDBError()
    {
        $data = [
            'name' => 'John',
            'lastname' => 'Doe',
            'password' => 'password123',
            'email' => 'john@example.com',
            'phone' => '123456789',
            'cedula' => '123456',
            'direct' => '123 Main St',
            'role' => 'user'
        ];

      
        $stmt = $this->createMock(mysqli_stmt::class);
        $this->db->expects($this->exactly(3))
                 ->method('prepare')
                 ->willReturn($stmt);

        $stmt->expects($this->exactly(3))
             ->method('execute')
             ->willReturnOnConsecutiveCalls(true, true, false);

        $this->db->expects($this->once())
                 ->method('insert_id')
                 ->willReturn(1);

        $result = $this->registerService->register($data);

        $this->assertFalse($result);
    }
}
