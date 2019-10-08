<?php
    require_once 'requestData.php';
    require_once 'models/modelUser.php';
    class getData{
        public function __construct(){
            $this->requestdata = new requestData();
            $this->modeldata = new modelUser();
            $this->index();
        }
        public function index(){
            $header = array(
                "Content-Type: application/json"
            );
            $url = 'https://api-test.internationalglobalnetwork.com/api/awmun';    
            $query = $this->requestdata->getCurl($url,$header);
            $result = json_decode($query);
            return $this->modeldata->simpanData($result);
        }
    }    
?>