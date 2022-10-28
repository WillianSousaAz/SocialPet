<?php

//CRUD
class BancoService
{

    private $conexao;
    private $adm;

    public function __construct(Conexao $conexao, Adm $adm)
    {
        $this->conexao = $conexao->conectar();
        $this->adm = $adm;
    }

    public function inserir()
    { //create
        $query = 'insert into cadadm(NomeFuncionario, ADMSuper, Email, Senha)
            values(:nome, :ADMSuper, :email, :senha)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->adm->__get('nome'));
        $stmt->bindValue(':ADMSuper', $this->adm->__get('admsuper'));
        $stmt->bindValue(':email', $this->adm->__get('email'));
        $stmt->bindValue(':senha', $this->adm->__get('senha'));
        $stmt->execute();
    }
    public function recuperar()
    { //read
        $query = 'select * from cadadm';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function atualizar()
    { //update

    }
    public function remover()
    { //delete
        $query = 'delete from cadadm where ID_ADM = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $this->adm->__get('id'));
        $stmt->execute();
    }
    public function validar()
    { //login
        $query = "select * from cadadm where ";
        $query .= " email = :email ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
