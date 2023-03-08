<?php

class DatabaseController {
    private $db;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=mid_term_assignment';
        $username = 'root';
        $password = '';

        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $this->db = new PDO($dsn, $username, $password, $options);
    }

    public function query($sql, $params = null) {
        $stmt = $this->db->prepare($sql);

        if ($params) {
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }
        }

        $stmt->execute();

        return $stmt;
    }
}
