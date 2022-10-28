<?php

    class Pet {
        private $id;
        private $nomeAnimal;
        private $especie;
        private $sexo;
        private $raca;
        private $deficiencia;
        private $idade;
        private $descricao;
        private $email_doar;
        private $whatsapp_doar;
        private $id_dono;
        private $nomeDoador;
        private $telefone;
        private $rua;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep; 
        private $img;
        private $castrado;
        private $vacinas;

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

?>