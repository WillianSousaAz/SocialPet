<?php

    class Usuario {
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $senha;
        private $telefone;
        private $datanascimento;
        private $rua;
        private $numero;
        private $bairro;
        private $complemento;
        private $cidade;
        private $estado;
        private $cep; 

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

?>