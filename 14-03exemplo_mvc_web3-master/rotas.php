<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    include 'Controller/PessoaController.php';
    include 'Controller/ProdutoController.php';

switch($uri_parse)
{
    case '/':
        include 'view/menu.php';
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break; 

    case '/pessoa/delete':
        PessoaController::delete();
    break;


    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;
}