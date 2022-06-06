<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
        <table width="467" border="1px">
        <tr>
            <th></th>
            <th width="101" height="40">ID</th>
            <th width="113">Nome</th>
            <th width="140">Descrição</th>
            <th width="140">Preço</th>
            <th width="140">Validade</th>
        </tr>
    </table>

        <?php foreach($model->rows as $item): ?>
    <table width="467" border="1px">
        <tr>

            <td >
                <a href="/produto/delete?id=<?= $item['id'] ?>">X</a>
            </td>

            <td width="101" height="40">
                <?= $item['id'] ?>
            </td>

            <td width="113" >
                <a href="/produto/form?id=<?= $item['id'] ?>">
                <?= $item['nome'] ?> 
            </a>
            </td>

            <td width="140">
                <?= $item['descricao'] ?>
            </td>

            <td width="140">
                <?= $item['valor'] ?>
            </td>

            <td width="140">
                <?= $item['validade'] ?>
            </td>

        </tr>
        <?php endforeach ?>

    </table>
        <br>
    <a href="/produto/form"><button>Gerar</button> </a>
</body>
</html>