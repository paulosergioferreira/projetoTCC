<?php


require_once '../Models/Model.php';
require_once '../lib/DB.php';

//Classe DAO onde contem as funções de CRUD
class VendedorDAO extends Model
{

    protected $table = "vendedor";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NOME`, `RG`, `CPF`, `SEXO`, `DTNASC`, `TELEFONE`, `NUMERO_CASA`,
                                                    `RUA`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `LOGIN`, `SENHA`, `NIVEL_FUNC`, `CARGO`)
                                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getCpf());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getTelefone());
        $stmt->bindValue(7, $obj->getNumeroCasa());
        $stmt->bindValue(8, $obj->getRua());
        $stmt->bindValue(9, $obj->getBairro());
        $stmt->bindValue(10, $obj->getCidade());
        $stmt->bindValue(11, $obj->getEstado());
        $stmt->bindValue(12, $obj->getCep());
        $stmt->bindValue(13, $obj->getLogin());
        $stmt->bindValue(14, $obj->getSenha());
        $stmt->bindValue(15, $obj->getNivelFunc());
        $stmt->bindValue(16, $obj->getCargo());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NOME = ?, RG = ?, CPF = ?, SEXO = ?, DTNASC = ?, TELEFONE = ?,
                                                 NUMERO_CASA = ?, RUA = ?, BAIRRO = ?, CIDADE = ?, ESTADO = ?, CEP = ?, LOGIN = ?,
                                                 SENHA = ?, NIVEL_FUNC = ?, CARGO = ?
                                                 WHERE ID = ?");
        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getCpf());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getTelefone());
        $stmt->bindValue(7, $obj->getNumeroCasa());
        $stmt->bindValue(8, $obj->getRua());
        $stmt->bindValue(9, $obj->getBairro());
        $stmt->bindValue(10, $obj->getCidade());
        $stmt->bindValue(11, $obj->getEstado());
        $stmt->bindValue(12, $obj->getCep());
        $stmt->bindValue(13, $obj->getLogin());
        $stmt->bindValue(14, $obj->getSenha());
        $stmt->bindValue(15, $obj->getNivelFunc());
        $stmt->bindValue(16, $obj->getCargo());
        $stmt->bindValue(17, $obj->getId());


        $stmt->execute();
        $stmt->closeCursor();
    }

    public function findName($nome)
    {
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE NOME LIKE ?");
        $stmt->bindValue(1, "%" . $nome . "%");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
 