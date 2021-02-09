<?php 
    class ReadJson{

        public $id;
        public $name;
        public $cargo;
        public $sexo;

        public function __construct(){
            echo 'My construct...';
        }

        // Busca pessoa no arquivo JSON pela id recebida e grava nos atributos da classe
        public function setPerson($id){            
            $str  = file_get_contents('data.json');
            $json = json_decode($str, true); 
            //
            foreach($json['list'] as $key => $value){
                if($value['id'] == $id){
                    $this->id    = $value['id'];
                    $this->name  = $value['name'];
                    $this->cargo = $value['cargo'];
                    $this->sexo  = $value['sexo'];
                }
            }            
        }

        // Obtém nome do atributo da classe
        public function getName(){
            return $this->name;
        }

        // Obtém cargo do atributo da classe
        public function getCargo(){
            return $this->cargo;
        }

        // Obtém sexo do atributo da classe
        public function getSexo(){
            return $this->sexo;
        }
    }

?>