<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $codigo_barras = $_POST["codigo_barras"];
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];
        $descricao = $_POST["descricao"];

        $sql = "INSERT INTO produtos (nome, categoria, codigo_barras, preco, quantidade, descricao) values ('{$nome}','{$categoria}','{$codigo_barras}','{$preco}','{$quantidade}','{$descricao}')";
        
        $res = $conn->query($sql);

        if ($res ==true) {
            print "<script>alert('cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $codigo_barras = $_POST["codigo_barras"];
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];
        $descricao = $_POST["descricao"];
        $sql = "UPDATE produtos SET 
                        nome='{$nome}', 
                        categoria='{$categoria}',
                        codigo_barras='{$codigo_barras}',
                        preco='{$preco}',
                        quantidade='{$quantidade}',
                        descricao='{$descricao}'
                    WHERE
                        id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res ==true) {
            print "<script>alert('editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res ==true) {
            print "<script>alert('excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('não foi possivel excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    default:
        # code...
        break;
}
