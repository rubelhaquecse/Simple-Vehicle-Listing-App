<?php 
    trait Filehandaler {
        private $filepath = __DIR__ . "/../../data/vehicles.json";

        public function readfile(){
            if(!file_exists($this->filepath)){
                file_put_contents($this->filepath, json_encode ([]));

            }
            return json_decode(file_get_contents($this->filepath), true);

        }


        public function writefile($data){
            file_put_contents( $this->filepath, json_encode($data, JSON_PRETTY_PRINT));

        }
    }

?>