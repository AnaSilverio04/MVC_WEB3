<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
        <table width="467" border="1px">
        <tr>
            <th></th>
            <th width="101" height="40">ID</th>
            <th width="113">Nome</th>
            <th width="140">CPF</th>
        </tr>
    </table>

        <?php foreach($model->rows as $item): ?>
    <table width="467" border="1px">
        <tr>

            <td >
                <a href="/pessoa/delete?id=<?= $item['id'] ?>">X</a>
            </td>

            <td width="101" height="40">
                <?= $item['id'] ?>
            </td>

            <td width="113" >
                <a href="/pessoa/form?id=<?= $item['id'] ?>">
                <?= $item['nome'] ?>
                </a>
             </td>

            <td width="140">
                <?= $item['cpf'] ?>
            </td>
        </tr>
        <?php endforeach ?>

    </table>
        <br>
    <a href="/pessoa/form"><button>Gerar</button> </a>
</body>
</html>