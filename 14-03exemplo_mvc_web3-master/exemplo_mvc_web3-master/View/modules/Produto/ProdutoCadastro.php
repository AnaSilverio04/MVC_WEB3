<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">

        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <fieldset>
            <legend>Cadastro de Produtos</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="validade">Data de Validade:</label>
            <input name="validade" id="validade" value="<?= $model->validade ?>" type="date" />

            <label for="fabricacao">Data de Fabricação:</label>
            <input name="fabricacao" id="fabricacao" value="<?= $model->data_fabric ?>" type="date" />

            <label for="valor">Valor:</label>
            <input name="valor" id="valor" value="<?= $model->preco ?>" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>