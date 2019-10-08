<?php
    class Database
    { 
        private static $host = "localhost";
        private static $dbname = "igntes";
        private static $username = "root";
        private static $password = "";
        public function __construct(){
        }
        public static function get_instance(){
            try{
                $c = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname."", self::$username, self::$password);
                $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                    
                return $c;
            }catch (PDOException $err) {
                echo "Koneksi: " . $err->getMessage();
            }  
        }
    }
?>