<?php 

namespace app;

include_once 'config.php';

use PDO;

class Database {
  public \PDO $pdo;
  
  public function __construct() {
    $this->pdo = new PDO('mysql:host=' . URL . ';port=3306;dbname=' . DB, USER, PASS);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getStudents($search = '') {
    if ($search) {
        $statement = $this->pdo->prepare('SELECT * FROM students WHERE student_name like :search ORDER BY created_at DESC');
        $statement->bindValue(":search", "%$search%");
    } else {
        $statement = $this->pdo->prepare('SELECT * FROM students ORDER BY created_at DESC');
    }
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}