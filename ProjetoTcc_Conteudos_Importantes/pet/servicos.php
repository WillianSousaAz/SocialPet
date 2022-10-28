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
            $query = 'insert into caddoacao(NomeAnimal, Status, Especie, sexo, Raca, Deficiencia, Idade, Descricao, Whatsapp, Email, NomeDoador, Telefone, Rua, Bairro, Cidade, Estado, CEP, img, Castrado, Vacinas, cadcliente_ID_Usuario)
            values(:nomeAnimal, :status, :Especie, :sexo, :Raca, :deficiencia, :Idade, :Descricao, :Whatsapp, :Email, :NomeDoador, :Telefone, :Rua, :Bairro, :Cidade, :Estado, :CEP, :img, :castrado, :vacinas, :id_dono)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nomeAnimal', $this->pet->__get('nomeAnimal'));
            $stmt->bindValue(':status', "Pendente");
            $stmt->bindValue(':Especie', $this->pet->__get('especie'));
            $stmt->bindValue(':sexo', $this->pet->__get('sexo'));
            $stmt->bindValue(':Raca', $this->pet->__get('raca'));
            $stmt->bindValue(':Idade', $this->pet->__get('idade'));
            $stmt->bindValue(':Descricao', $this->pet->__get('descricao'));
            $stmt->bindValue(':Email', $this->pet->__get('email_doar'));
            $stmt->bindValue(':Whatsapp', $this->pet->__get('whatsapp_doar'));
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
        public function recuperar(){ //read
            $query = 'select * FROM `caddoacao` where Status = "Pendente"';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function atualizar(){ //update

        }
        public function remover(){ //delete

            $query = 'delete from verificaranimais where ID_verAnimal = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->pet->__get('id'));
            $stmt->execute();

        }
    }

?>