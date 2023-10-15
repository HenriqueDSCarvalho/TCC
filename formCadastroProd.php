<!-- index.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.ico" type="image/png" sizes="48x48">
    <title>SuperEstoque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <?php include('cadastrar.php') ?>
    <div class="row justify-content-center">
        <h1>Cadastro de produtos</h1>
    </div>




    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="formCadastroProd.php" method="post">
                    <div class="form-group">
                        <label for="login">nome:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="login">categoria:</label>
                        <input type="text" class="form-control" name="categoria" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">codigo_barras:</label>
                        <input type="number" class="form-control" name="codigo_barras" required>
                    </div>
                    <div class="form-group">
                        <label for="login">preco:</label>
                        <input type="number" class="form-control" name="preco" required>
                    </div>
                    <div class="form-group">
                        <label for="login">quantidade:</label>
                        <input type="number" class="form-control" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="login">descrição:</label>
                        <input type="text" class="form-control" name="descricao" required>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-success" type="submit">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="teste.php" class="btn btn-light">pagina inicial</a>
    </div>
</body>

</html>