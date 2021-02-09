<?php 
    // Classe responsável por listar 
    class Json{
        public $id;
        public $name;
        public $cargo;
        public $sexo;

        public function setId($vlr){
            $this->id = $vlr;
        }

        public function setName($vlr){
            $this->name = $vlr;
        }

        public function setCargo($vlr){
            $this->cargo = $vlr;
        }

        public function setSexo($vlr){
            $this->sexo = $vlr;
        }

        // Obtém nome do atributo da classe
        public function getId(){
            return $this->id;
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

        // Busca pessoa no arquivo JSON pela id recebida e grava nos atributos da classe
        public function setPerson($id){            
            $json = $this->openJson('data.json');
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

        // Método para atualizar no arquivo JSON valores recebidos e setados nos atributos da classe
        public function atualizar(){
            $json = $this->openJson('data.json');
            //
            foreach($json['list'] as $key => $value){
                if($value['id'] == $this->id){
                    $json['list'][$key]['id']    = $this->id;
                    $json['list'][$key]['name']  = $this->name;                    
                    $json['list'][$key]['cargo'] = $this->cargo;      
                    $json['list'][$key]['sexo']  = $this->sexo;      
                }
            }      
            // Escreve no arquivo JSON
            $newJsonString = json_encode($json);
            file_put_contents('data.json', $newJsonString);
        }

        public function openJson($path){
            $str  = file_get_contents($path);
            $json = json_decode($str, true); 
            return $json;
        }

        // Retorna o número de linhas no arquivo JSON
        public function numLinhas(){
            $json = $this->openJson('data.json');
            return count($json['list']);
        }

        public function getNames($i){
                        
        }

    }
?>