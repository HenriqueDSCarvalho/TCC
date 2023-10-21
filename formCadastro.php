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
    <?php include('cadastro.php') ?>
    <div class="row justify-content-center">
        <h1>Cadastro de Usuarios</h1>
    </div>




    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="formCadastro.php" method="post">
                    <div class="form-group">
                        <label for="login">login:</label>
                        <input type="text" class="form-control" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="login">email:</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" required>
                    </div>
                    <div class="form-group">
                        <label for="login">permissao:</label>
                        <input type="text" class="form-control" name="permissao" required>
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