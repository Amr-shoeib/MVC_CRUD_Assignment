<?php

class User {
    private $id;
    private $lastName;
    private $firstName;
    private $username;
    private $password;
    private $photo;
    private $role;
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=mid_term_assignment;charset=utf8mb4", "root", "");
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function all() {
        $stmt = $this->pdo->prepare("SELECT Users.*, Roles.Name AS RoleName FROM Users INNER JOIN Roles ON Users.Role = Roles.ID");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Find a user by ID
    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT Users.*, Roles.Name AS RoleName FROM Users INNER JOIN Roles ON Users.Role = Roles.ID WHERE Users.ID = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Create a new user
    public function create() {
        $stmt = $this->pdo->prepare("INSERT INTO Users (LastName, FirstName, Username, Password, Photo, Role) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$this->lastName, $this->firstName, $this->username, $this->password, $this->photo, $this->role]);
    }

    // Update a user by ID
    public function update($id) {
        $stmt = $this->pdo->prepare("UPDATE Users SET LastName = ?, FirstName = ?, Username = ?, Password = ?, Photo = ?, Role = ? WHERE ID = ?");
        $stmt->execute([$this->lastName, $this->firstName, $this->username, $this->password, $this->photo, $this->role, $id]);
    }

    // Delete a user by ID
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM Users WHERE ID = ?");
        $stmt->execute([$id]);}
}