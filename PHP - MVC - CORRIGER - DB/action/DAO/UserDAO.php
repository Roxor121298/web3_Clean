<?php
    require_once("action/DAO/Connection.php");
    
    // Stateless (tout est statique)
    class UserDAO {

        public static function authenticate($username, $password) {
            $user = null;

            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM users WHERE username=?");
            $statement->bindParam(1, $username); // (numéro du ? (premier, deuxième, etc), variable à placer)
            $statement->execute();

            // Si vous voulez une liste de résultats
            //$rows = $statement->fetchAll();
            // ou
            // $rows = [];
            // while ($row = $statement->fetch()) {
            //     $rows[] = $row;
            // }

            $row = $statement->fetch(); // si aucun username, fetch retourne null, sinon retourne la ligne

            if ($row) {
                if (password_verify($password, $row["password"])) {
                    $user = [
                        "username" => $row["username"],
                        "first_name" => $row["first_name"],
                        "visibility" => $row["visibility"],
                    ];
                }
            }
            
            return $user;
        }

        public static function updateProfile($userId, $newUsername) {
            $connection = Connection::getConnection();
            // UPDATE users SET username = $newUsername WHERE id = ?
        }
    }