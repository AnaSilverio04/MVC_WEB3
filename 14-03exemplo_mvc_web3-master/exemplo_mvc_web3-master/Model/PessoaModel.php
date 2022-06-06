<?php

class PessoaModel
{

    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;


    public $rows;



    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        if(empty($this->id)) 
        {

            $dao->insert($this);

        } else {

            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->getAllRows();
    }


    public function getByID(int $id)
    {
        include 'DAO/PessoaDAO.php';
        
        $dao = new PessoaDAO();

        $obj = $dao->selectByID($id);

        return ($obj) ? ($obj) : new PessoaModel();
    }

    public function delete(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        
        $dao->delete($id);

    }
}