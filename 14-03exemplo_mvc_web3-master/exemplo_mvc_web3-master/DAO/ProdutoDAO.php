<?php
    
class ProdutoDAO
{

    private $conexao;

     function __construct()
     {
          $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
          $user = "root";
          $pass = "etecjau";
        $this ->conexao = new PDO($dsn, $user, $pass);

     }

     function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO produto 
                (nome, descricao, validade, fabricacao, valor) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(2, $model->quantidade);
        $stmt->bindValue(2, $model->marca);
        $stmt->bindValue(3, $model->validade);
        $stmt->bindValue(4, $model->fabricacao);
        $stmt->bindValue(5, $model->valor);


        $stmt->execute();      
    }

    public function getAllRows()
    {

        $sql = "SELECT id, nome, descricao, quantidade, marca, validade, fabricacao, valor FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll();
    }


    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';
        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();


        return $stmt->fetchObject("ProdutoModel");
    }
   
    public function delete(int $id)

    {
        $sql = "DELETE FROM produto WHERE id = ?";


        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto
        SET nome=?,
        descricao=?,
        quantidade=?,
        marca=?,
        validade=?,
        fabricacao=?,
        valor=?
        WHERE id=?";

        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(2, $model->quantidade);
        $stmt->bindValue(2, $model->marca);
        $stmt->bindValue(3, $model->validade);
        $stmt->bindValue(4, $model->fabricacao);
        $stmt->bindValue(5, $model->valor);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();      

    }

}