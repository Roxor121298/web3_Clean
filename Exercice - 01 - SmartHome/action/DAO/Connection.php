<?php
    
    class Connection {
        private static $connection;

        // PDO = Abstraction de base de données
        // PDO = Permet d'établir une socket/connexion avec la BD
        public static function getConnection() {
            if (Connection::$connection == null) {
                Connection::$connection = new PDO(DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return Connection::$connection;
        }
    }