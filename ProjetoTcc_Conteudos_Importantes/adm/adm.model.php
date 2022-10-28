<?php

    class Adm {
        private $id;
        private $admsuper;
        private $nome;
        private $email;
        private $senha;
        
        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

?>