<?php
    
    // Stateless (tout est statique)
    class UserDAO {

        public static function authenticate($username, $password) {
            $user = null;

            if ($username == "john" && $password == "qwerty") {
                $user = [
                    "username" => $username,
                    "visibility" => 1
                ];
            }

            return $user;
        }

        public static function updateProfile($userId, $newUsername) {
            // UPDATE users SET username = $newUsername WHERE id = $userId;
        }
    }