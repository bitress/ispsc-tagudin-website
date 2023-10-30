<?php

 class Login
{

     private Database $db;

     public function __construct() {
        $this->db = Database::getInstance();
    }

    public function userLogin($username, $password) {

        $sql = "SELECT * FROM users WHERE username = :un";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":un", $username);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0 ) {

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $hashed_password = $row['password'];

                if (password_verify($password, $hashed_password)) {

                    Session::setSession("isLoggedIn", true);
                    Session::setSession("user", $row['user_id']);
                    header("Location: index.php");

                } else {
                    echo "Incorrect password";
                }
            } else {
                echo "No username found";
            }
        }

    }

}