<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>cadastro</title>
</head>

<body>
    <?php include('../autenticar.php');?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">produtos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../teste.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">novo produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">listar produtos</a>
                    </li>
                </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include('../conectar.php');
                switch (@$_REQUEST["page"]) {
                    case 'novo':
                        include('novoProduto.php');
                        break;
                    case 'listar':
                        include('listarProdutos.php');
                        break;
                    case 'salvar':
                        include('salvarProduto.php');
                        break;
                    case 'editar':
                        include('editarProduto.php');
                        break;
                    default:
                        print "<h1>estoque</h1>";
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        src = "js/bootstrap.bundle.min.js"
    </script>
</body>

</html>