<h1>novo produto</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>categoria</label>
        <input type="text" name="categoria" class="form-control">
    </div>
    <div class="mb-3">
        <label>codigo de barras</label>
        <input type="text" name="codigo_barras" class="form-control">
    </div>
    <div class="mb-3">
        <label>preco</label>
        <input type="float" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <label>quantidade</label>
        <input type="int" name="quantidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>descrição</label>
        <input type="tex" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">enviar</button>
    </div>
</form>