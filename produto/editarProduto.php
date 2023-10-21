<h1>Editar produto</h1>
<?php 
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?>">
    </div>
    <div class="mb-3">
        <label>categoria</label>
        <input type="text" name="categoria" class="form-control" value="<?php print $row->categoria;?>">
    </div>
    <div class="mb-3">
        <label>codigo de barras</label>
        <input type="text" name="codigo_barras" class="form-control" value="<?php print $row->codigo_barras;?>">
    </div>
    <div class="mb-3">
        <label>preco</label>
        <input type="float" name="preco" class="form-control" value="<?php print $row->preco;?>">
    </div>
    <div class="mb-3">
        <label>quantidade</label>
        <input type="int" name="quantidade" class="form-control" value="<?php print $row->quantidade;?>">
    </div>
    <div class="mb-3">
        <label>descrição</label>
        <input type="tex" name="descricao" class="form-control" value="<?php print $row->descricao;?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">enviar</button>
    </div>
</form>