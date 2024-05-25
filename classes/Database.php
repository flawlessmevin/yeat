<?php
class Database{
    protected $db;

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbname = 'yeat';
        $username = 'root';
        $password = '';

        try {
            $this->db = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
    }
}
?>
