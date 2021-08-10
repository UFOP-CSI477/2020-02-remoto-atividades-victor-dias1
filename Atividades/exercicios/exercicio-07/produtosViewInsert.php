<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inserir Produtos</title>
</head>

<body>
    <div class="container">
        <form action="./produtosControllerInsert.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="um">Unidade de Medida:</label>
                <input type="text" class="form-control" name="um" id="um">
            </div>
            <button type="submit" class="btn btn-outline-primary">Inserir</button>
            <a type="button" class="btn btn-outline-danger" href="./index.php">Voltar</a>
        </form>

    </div>
</body>

</html>