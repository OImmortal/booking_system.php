<?php

    class MySql {
        private $conn;

        public static function Connect() {
            $file_json = file_get_contents("infoSample.json");
            $content_json = json_decode($file_json,false);
        

            if(self::$conn == null) {
                try {
                    self::$conn = new PDO('mysql:host=localhost;dbname='.$content_json->database, $content_json->user, $content_json->password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (\Throwable $th) {
                    echo "ERROR ".$th->getMessage();
                }
            }

            return self::$conn;
        }
        
    }

?>