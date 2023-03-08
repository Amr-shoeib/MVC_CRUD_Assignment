<?php
class User {
    private $db;

    public function __construct() {
        $host = "localhost";
        $dbname = "mid_term_assignment";
        $user = "username";
        $pass = "password";

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $this->db = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public function create($data) {
        $last_name = $data['last_name'];
        $first_name = $data['first_name'];
        $username = $data['username'];
        $password = $data['password'];
        $photo = $data['photo'];

        $sql = "INSERT INTO Users (Last_Name, First_Name, Username, Password, Photo) 
                VALUES (:last_name, :first_name, :username, :password, :photo)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':last_name' => $last_name,
            ':first_name' => $first_name,
            ':username' => $username,
            ':password' => $password,
            ':photo' => $photo,
        ]);

        return $stmt->rowCount();
    }

    public function read() {
        $sql = "SELECT * FROM Users";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function update($data) {
        $id = $data['id'];
        $last_name = $data['last_name'];
        $first_name = $data['first_name'];
        $username = $data['username'];
        $password = $data['password'];
        $photo = $data['photo'];

        $sql = "UPDATE Users SET 
                    Last_Name = :last_name, 
                    First_Name = :first_name, 
                    Username = :username, 
                    Password = :password, 
                    Photo = :photo
                WHERE ID = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':last_name' => $last_name,
            ':first_name' => $first_name,
            ':username' => $username,
            ':password' => $password,
            ':photo' => $photo,
        ]);

        return $stmt->rowCount();

        
    }

    public function delete($id) {
        $sql = "DELETE FROM Users WHERE ID = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->rowCount();
    }
}
