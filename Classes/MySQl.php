<?php

    class MySql {
        private static $conn;

        public static function Connect() {
            $file_json = file_get_contents("info.json");
            $content_json = json_decode($file_json,false);
        

            if(!isset(self::$conn)) {
                try {
                    self::$conn = new PDO('mysql:host=localhost;dbname='.$content_json->database, $content_json->user, $content_json->password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (Exception $e) {
                    echo "ERROR AO CONECTAR AO BANCO DE DADOS";
                }
            }
            
            return self::$conn;
        }
        
    }


?>