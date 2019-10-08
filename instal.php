<?php
    //starting instal tabel users: php instal.php
    require_once 'config/database.php';
    class instalData{
        public $path = 'instaldb/users.sql';
        public function __construct(){
            $this->database = Database::get_instance();
            $this->starting(); 
        }        
        private function instalUserTabel($files){
            if (file_exists($files)) {
                $filesql = file_get_contents($files);            
                $hasil = $this->database->exec($filesql);
                if($hasil){
                    echo "Instal database user berhasil";
                }else{
                    echo "Instal database user tidak berhasil";
                }
            }else{
                echo "users.sql tidak ditemukan";
            }
        }
        private function starting(){
            return $this->instalUserTabel($this->path);
        }
    }
    return new InstalData();
?>
