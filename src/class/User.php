<?php

class User {

    private $database;

    public function __construct($db){
        $this->database = $db;
    }

    public function Register($name, $email, $password){
        $sql = "INSERT INTO users VALUES (0, :name, :email, :password)";
        $params = array("name" => $name, "email" => $email, "password" => $password);
        $account = $this->database->create($sql, $params); 
    }

    public function Login($email, $password){
        $sql = "SELECT * FROM users WHERE email = :email";
        $params = array("email" => $email);
        $user = $this->database->query($sql, $params);
        if(empty($user)){
            echo "Email ou mot de passe incorrect";
        }else {
            $passwordHash = $user[0]["password"];
            $passwordReq = password_verify($password, $passwordHash);
        if($passwordReq){
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["ID"] = $user[0]['ID'];
            var_dump($_SESSION["ID"]);
            echo "Vous êtes connecté";
        }else {
            echo "Email ou mot de passe incorrect";
        }
        }  
    }

    public function Logout(){
        if(isset($_SESSION)){
            session_destroy();
        }else {
            echo "Vous n'êtes pas connecté";
        }
    }

    public function updatePassword($password){
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $ID = $_SESSION["ID"];
        $email = $_SESSION["email"];
        $changeEmail = $this->database->update("UPDATE users SET password = '$passwordHash' WHERE ID = 2");
        echo "Mot de passe changé";
    }

}

?>