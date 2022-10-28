<?php

    //CRUD
    class BancoService {

        private $conexao;
        private $usuario;

        public function __construct(Conexao $conexao,Usuario $usuario)
        {
            $this->conexao = $conexao->conectar();
            $this->usuario = $usuario;
        }

        public function inserir(){ //create
            $query = 'insert into cadcliente(Nome, CPF, Email, Senha, Telefone, DataNascimento, Rua, Numero, Bairro, Complemento, Cidade, Estado, CEP)
            values(:nome, :cpf, :email, :senha, :telefone, :datanascimento, :rua, :numero, :bairro, :complemento, :cidade, :estado, :cep)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->usuario->__get('nome'));
            $stmt->bindValue(':cpf', $this->usuario->__get('cpf'));
            $stmt->bindValue(':email', $this->usuario->__get('email'));
            $stmt->bindValue(':senha', $this->usuario->__get('senha'));
            $stmt->bindValue(':telefone', $this->usuario->__get('telefone'));
            $stmt->bindValue(':datanascimento', $this->usuario->__get('datanascimento'));
            $stmt->bindValue(':rua', $this->usuario->__get('rua'));
            $stmt->bindValue(':numero', $this->usuario->__get('numero'));
            $stmt->bindValue(':bairro', $this->usuario->__get('bairro'));
            $stmt->bindValue(':complemento', $this->usuario->__get('complemento'));
            $stmt->bindValue(':cidade', $this->usuario->__get('cidade'));
            $stmt->bindValue(':estado', $this->usuario->__get('estado'));
            $stmt->bindValue(':cep', $this->usuario->__get('cep'));
            $stmt->execute();
        }
        public function recuperar(){ //read
            $query = 'select ID_Usuario, nome, cpf, email, senha, telefone, datanascimento, rua, numero, bairro, complemento, cidade, estado, cep from cadcliente';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function atualizar(){ //update
            $query = "update cadcliente set Senha = :senha where ID_Usuario = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':senha', $this->usuario->__get('senha'));
            $stmt->bindValue(':id', $this->usuario->__get('id'));
            return $stmt->execute();
        }
        public function remover(){ //delete
            $query = 'delete from cadcliente where ID_Usuario = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->usuario->__get('id'));
            $stmt->execute();
        }
        public function validar(){ //login
            $query = "select * from cadcliente where ";
            $query .= " email = :email ";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>