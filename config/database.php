<?php
namespace App\Config;

use Dotenv\Dotenv;
use PDO;
use PDOException;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class Database {
    
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPassword;
    private $charset;
    public $conn;

    public function __construct() {

        $this->dbHost = $_ENV['DB_HOST'];
        $this->dbName = $_ENV['DB_NAME']; 
        $this->dbUser = $_ENV['DB_USER'];
        $this->dbPassword = $_ENV['DB_PASS'];
        $this->charset = 'utf8mb4';
    
        $dsn = "mysql:dbname={$this->dbName};host={$this->dbHost};charset={$this->charset}";
        
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword,$options);  

        } catch (PDOException $e) {
            echo "Connection failed. Error: " . $e->getMessage();
            error_log($e->getMessage());
            http_response_code(500);
            exit;
        }
    }
    public function connect(){
        return $this->conn;
    }

    public function query($query){
        return $this->conn->prepare($query);
    }
}


// $database = new Database();
// $conn = $database->connect();
// echo var_dump($conn);