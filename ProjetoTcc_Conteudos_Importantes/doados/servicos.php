<?php

    //CRUD
    class BancoService {

        private $conexao;
        private $pet;

        public function __construct(Conexao $conexao,Pet $pet)
        {
            $this->conexao = $conexao->conectar();
            $this->pet = $pet;
        }

        public function inserir(){ //create
            $query = 'insert into caddoacao(NomeAnimal, Especie, sexo, Raca, Deficiencia, Idade, Descricao, Whatsapp, Email, NomeDoador, Telefone, Rua, Bairro, Cidade, Estado, CEP, img, Castrado, Vacinas, cadcliente_ID_Usuario)
            values(:nomeAnimal, :Especie, :sexo, :Raca, :deficiencia, :Idade, :Descricao, :Whatsapp, :Email, :NomeDoador, :Telefone, :Rua, :Bairro, :Cidade, :Estado, :CEP, :img, :castrado, :vacinas, :id_dono)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nomeAnimal', $this->pet->__get('nomeAnimal'));
            $stmt->bindValue(':Especie', $this->pet->__get('especie'));
            $stmt->bindValue(':sexo', $this->pet->__get('sexo'));
            $stmt->bindValue(':Raca', $this->pet->__get('raca'));
            $stmt->bindValue(':Idade', $this->pet->__get('idade'));
            $stmt->bindValue(':Descricao', $this->pet->__get('descricao'));
            $stmt->bindValue(':Whatsapp', $this->pet->__get('Whatsapp'));
            $stmt->bindValue(':Email', $this->pet->__get('Email'));
            $stmt->bindValue(':id_dono', $this->pet->__get('id_dono'));
            $stmt->bindValue(':NomeDoador', $this->pet->__get('nomeDoador'));
            $stmt->bindValue(':Telefone', $this->pet->__get('telefone'));
            $stmt->bindValue(':Rua', $this->pet->__get('rua'));
            $stmt->bindValue(':Bairro', $this->pet->__get('bairro'));
            $stmt->bindValue(':Cidade', $this->pet->__get('cidade'));
            $stmt->bindValue(':Estado', $this->pet->__get('estado'));
            $stmt->bindValue(':CEP', $this->pet->__get('cep'));
            $stmt->bindValue(':img', $this->pet->__get('img'));
            $stmt->bindValue(':deficiencia', $this->pet->__get('deficiencia'));
            $stmt->bindValue(':castrado', $this->pet->__get('castrado'));
            $stmt->bindValue(':vacinas', $this->pet->__get('vacinas'));
            $stmt->execute();
        }
        public function recuperarEstado(){
            $query = 'Select distinct Estado from bd_socialpet.caddoacao where status = "Aprovado"';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarCidade(){
            $query = 'Select distinct Cidade from bd_socialpet.caddoacao where status = "Aprovado" && Estado = :estado';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':estado', $this->pet->__get('estado'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarPets(){
            $query = 'SELECT * FROM bd_socialpet.caddoacao where Status = "Aprovado" && Estado = :estado;';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':estado', $this->pet->__get('estado'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarPetsC(){
            $query = 'SELECT * FROM bd_socialpet.caddoacao where Status = "Aprovado" && Cidade = :cidade';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cidade', $this->pet->__get('cidade'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperar(){ //read
            $query = 'select * FROM `caddoacao` where Status = "Aprovado"';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarMeus(){ //read
            $query = 'select * FROM `caddoacao` where cadcliente_ID_Usuario = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_SESSION['id']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function atualizar(){ //update
            $query = "update caddoacao set Status = :status where ID_Animal = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':status', $this->pet->__get('status'));
            $stmt->bindValue(':id', $this->pet->__get('id'));
            return $stmt->execute();
        }
        public function remover(){ //delete
            $query = 'delete from caddoacao where ID_Animal = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->pet->__get('id'));
            $stmt->execute();
        }
    }
