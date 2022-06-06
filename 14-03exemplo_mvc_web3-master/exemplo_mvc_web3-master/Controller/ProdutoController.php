<?php

class ProdutoController
{
    public static function index()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ListarProduto.php';
    }

    public static function form()

    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))

        $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Produto/CadastroProduto.php';
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';

        $produto = new ProdutoController();
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->marca = $_POST['marca'];
        $produto->fabricacao = $_POST['fabricacao'];
        $produto->valor = $_POST['valor'];

        $produto->save();

        header("Location: /produto");
            }

            public static function delete()
            {
                include 'Model/ProdutoModel.php';
        
                $model = new ProdutoModel();
        
                $model->delete( (int) $_GET['id']);
        
                header("Location: /produto");
            }
}