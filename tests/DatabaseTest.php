<?php
// tests/DatabaseTest.php
namespace Tests;
//require_once __DIR__ . '/../config/database.php'; 

use App\Config\Database;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testConnect() {
        $database = new Database();
        $conn = $database->connect();
        
        // Assert that the connection is not null
        $this->assertNotNull($conn);

        $this->assertInstanceOf(\PDO::class, $conn, "Database connection should return a PDO instance.");

        // Run a basic query to confirm the connection is working
        $stmt = $conn->query("SELECT 1");
        $this->assertNotFalse($stmt, "Database connection is not valid.");
    }
}