<?php

    class MySql {
        private $conn;

        public static function Connect() {
            $file_json = file_get_contents("info.json");
            $content_json = json_decode($file_json,false);
        

            if(!isset(self::$conn)) {
                try {
                    self::$conn = new PDO('mysql:host=localhost;dbname='.$content_json->database, $content_json->user, $content_json->password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (Exception $e) {
                    echo "ERROR ".$e->getMessage();
                }
            }

            return self::$conn;
        }

        public static function createTable($nameTable,$info = []) {
            echo $nameTable;
            $chaveArray = array_keys($info);
            $valoresArray = array_values($info);
        }


    }

?>