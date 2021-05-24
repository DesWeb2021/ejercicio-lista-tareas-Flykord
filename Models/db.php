<?php 

    class DB {
        private static $connection;

        public static function getConnection() {
            if (self::$connection === null) {
                self::$connection = new PDO('mysql:host=localhost;dbname=tareas_db;charset=utf8', 'root', 'Starosa20.');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return self::$connection;
        }
    }

?>