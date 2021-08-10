<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de Produtos</title>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Unidade de Medida</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($p = $produtos->fetch()) {
                        echo "<tr>";
                        echo "\t<th>" . $p["id"] . "</th>";
                        echo "\t<td>" . $p["nome"] . "</td>";
                        echo "\t<td>" . $p["um"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            <a type="button" class="btn btn-outline-primary" href="./produtosViewInsert.php">Inserir</a>
        </div>
</body>

</html>