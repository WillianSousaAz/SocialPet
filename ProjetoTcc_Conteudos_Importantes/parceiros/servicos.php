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
            $query = 'insert into cadproduto(id_loja, nome_produto, imagem, categoria, preco, descricao, status, marca, medida)
            values(id, :nome, :img, :categoria, :preco, :descricao, :disponivel, :marca, :medida)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->usuario->__get('id_loja'));
            $stmt->bindValue(':nome', $this->usuario->__get('nome_produto'));
            $stmt->bindValue(':marca', $this->usuario->__get('marca'));
            $stmt->bindValue(':img', $this->usuario->__get('img'));
            $stmt->bindValue(':preco', $this->usuario->__get('preco'));
            $stmt->bindValue(':telefone', $this->usuario->__get('categoria'));
            $stmt->bindValue(':medida', $this->usuario->__get('medida'));
            $stmt->bindValue(':descricao', $this->usuario->__get('descricao'));
            $stmt->bindValue(':disponivel', $this->usuario->__get('disponivel'));
            $stmt->execute();
        }
        public function inserirCategoria(){ //create
            $query = 'insert into cadcategoria(id_loja, nome)
            values(:id, :nome)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->usuario->__get('id_loja'));
            $stmt->bindValue(':nome', $this->usuario->__get('nome'));
            $stmt->execute();
        }
        public function recuperarTodos(){ //read
            $query = 'SELECT id, cor, NomeEmpresa, Logo, FuncoesDaLoja, Telefone, CidadeLocal, CidadeAPrincipal, CidadeASecundaria, CidadeAExtra, CidadeAExtra1 EstadoLocal, Whatsapp, funcionamento FROM cadparceiro where Status = "Ativo" and CidadeAPrincipal = :cidade or CidadeASecundaria = :cidade or CidadeAExtra = :cidade or CidadeAExtra1 = :cidade  order by rand() limit 8';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cidade', $_GET['cidade']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarPremium(){ //read
            $query = 'SELECT id, cor, NomeEmpresa, Logo, FuncoesDaLoja FROM cadparceiro where Status = "Ativo" and hospedagem = "2" and CidadeAPrincipal = :cidade or CidadeASecundaria = :cidade or CidadeAExtra = :cidade or CidadeAExtra1 = :cidade  order by rand() limit 8';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cidade', $_GET['cidade']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarTDComum(){ //read
            $query = 'SELECT id, cor, NomeEmpresa, Logo, FuncoesDaLoja FROM cadparceiro where Status = "Ativo" and CidadeAPrincipal = :cidade or CidadeASecundaria = :cidade or CidadeAExtra = :cidade or CidadeAExtra1 = :cidade  order by rand()';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cidade', $_GET['cidade']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarTDPremium(){ //read
            $query = 'SELECT id, cor, NomeEmpresa, Logo, FuncoesDaLoja FROM cadparceiro where Status = "Ativo" and hospedagem = "2" and CidadeAPrincipal = :cidade or CidadeASecundaria = :cidade or CidadeAExtra = :cidade or CidadeAExtra1 = :cidade  order by rand()';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cidade', $_GET['cidade']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarLoja(){ //read
            $query = 'SELECT id, NomeEmpresa, Logo, FuncoesDaLoja, Telefone, endereco, CidadeLocal, EstadoLocal, Whatsapp, funcionamento, disponibilidade, rota, Status FROM cadparceiro where Status = "Ativo" and id = :id order by rand() limit 8';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarCategoria(){ //read
            $query = 'SELECT distinct categoria FROM cadprodutos where id_loja = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarProdutos(){ //read
            $query = 'SELECT id, nome_produto, imagem, categoria, preco, descricao, marca, variacao, medida, cores FROM cadprodutos where status = "Disponivel" and id_loja = :id limit 50';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarProdutosCat(){ //read
            $query = 'SELECT id, nome_produto, imagem, categoria, preco, descricao, marca, variacao, medida, cores FROM cadprodutos where status = "Disponivel" and id_loja = :id and categoria = :cat';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->bindValue(':cat', $_GET['categoria']);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function recuperarCat(){ //read
            $query = 'SELECT distinct categoria FROM cadprodutos where id_loja = :id and categoria = :cat';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->bindValue(':cat', $_GET['categoria']);
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
            $query = "select * from cadparceiro where ";
            $query .= " email = :email ";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>