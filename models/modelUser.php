<?php
    require_once 'config/database.php';
    class modelUser
    {
        public function __construct(){
            $this->db = Database::get_instance();   
        }
        public function simpanData($array){
            //https://stackoverflow.com/questions/1834703/php-foreach-loop-key-value
            foreach ($array as $key => $value) {
                $arrayString[]= '("'.$value->nama.'", "'.$value->email.'", "'.$value->birth_date.'", "'.$value->country.'", "'.$value->phone.'", "'.$value->registration_date.'", "'.$value->need_pickup.'", "'.$value->motivation_letter.'")';
            }            
            $hasilrequest = implode(',', $arrayString);
            //using INSERT IGNORE if already exist or not with unique email and phone. 
            $query = $this->db->query(" INSERT IGNORE INTO users (nama, email, birth_date, country, phone, registration_date, need_pickup, motivation_letter) VALUES $hasilrequest ");            
            if($query){
                $hasil = "Request Rest api berhasil disimpan";
            }else{
                $hasil = "Request Rest api tidak berhasil disimpan";
            }
            echo $hasil;
        }
    }
?>