<?php
$sql = "SELECT * FROM produtos";

$res = $conn->query($sql);

$qtd =  $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>nome</th>";
    print "<th>categoria</th>";
    print "<th>codigo de barras</th>";
    print "<th>preco</th>";
    print "<th>quantidade</th>";
    print "<th>descrição</th>";
    print "<th>ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->categoria . "</td>";
        print "<td>" . $row->codigo_barras . "</td>";
        print "<td>" . $row->preco . "</td>";
        print "<td>" . $row->quantidade . "</td>";
        print "<td>" . $row->descricao . "</td>";
        print  "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>editar</button>
                    <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else {false;}\"class='btn btn-danger'>excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='1alert alert-danger'>não encontrou resultados!</p>";
}
?>