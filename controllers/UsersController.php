<?php

require_once 'DatabaseController.php';

class UsersController {
    private $db;

    public function __construct() {
        $this->db = new DatabaseController();
    }

    public function index() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->db->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once 'views/index.php';
    }

    public function create() {
        require_once 'views/create.php';
    }

    public function store() {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $photo = $_POST['photo'];

        $sql = 'INSERT INTO users (Last_Name, First_Name, Username, Password, Photo) VALUES (:last_name, :first_name, :username, :password, :photo)';
        $params = array(
            ':last_name' => $last_name,
            ':first_name' => $first_name,
            ':username' => $username,
            ':password' => $password,
            ':photo' => $photo
        );
        $stmt = $this->db->query($sql, $params);

        header('Location: index.php');
        exit;
    }

    public function show() {
        $id = $_GET['id'];

        $sql = 'SELECT * FROM users WHERE ID = :id';
        $params = array(':id' => $id);
        $stmt = $this->db->query($sql, $params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        require_once 'views/show.php';
    }

    public function edit() {
        $id = $_GET['id'];

        $sql = 'SELECT * FROM users WHERE ID = :id';
        $params = array(':id' => $id);
        $stmt = $this->db->query($sql, $params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        require_once 'views/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $photo = $_POST['photo'];

        $sql = 'UPDATE users SET Last_Name = :last_name, First_Name = :first_name, Username = :username, Password = :password, Photo = :photo WHERE ID = :id';
        $params = array(
            ':last_name' => $last_name,
            ':first_name' => $first_name,
            ':username' => $username,
            ':password' => $password,
            ':photo' => $photo,
            ':id' => $id
        );
        $stmt = $this->db->query($sql, $params);

        header('Location: index.php');
        exit;
    }

    public function destroy() {
        $id = $_POST['id'];

        $sql = 'DELETE FROM users WHERE ID = :id';
        $params = array(':id' => $id);
        $stmt = $this->db->query($sql, $params);

        header('Location: index.php');
        exit;
    }
}
