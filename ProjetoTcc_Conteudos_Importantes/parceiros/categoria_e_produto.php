<?php

    class Usuario {
        private $id;
        private $id_loja;
        private $nome;
        private $nome_produto;
        private $marca;
        private $img;
        private $preco;
        private $categoria;
        private $medida;
        private $descricao;
        private $disponivel;

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

?>