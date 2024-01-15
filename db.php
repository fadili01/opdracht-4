<?php
class Database{
    public $pdo;
 
public function __construct($db = "auto_winkel", $user ="root", $pwd="", $host="localhost:3307") {
 
    try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
 
    }
}