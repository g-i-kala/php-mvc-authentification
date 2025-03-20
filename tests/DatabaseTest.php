<?php
// tests/DatabaseTest.php

require_once __DIR__ . '/../config/database.php'; 

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testConnect() {
        $database = new Database();
        $conn = $database->connect();
        
        // Assert that the connection is not null
        $this->assertNotNull($conn);
    }
}