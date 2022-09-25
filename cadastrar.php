<h1>CADASTRO DE PEÇAS<H1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
<div class="mb-3">
    <label for="">nome</label>
    <input type="text" name="nome" class="form-control" id="">
</div>
<div class="mb-3">
    <label for="">referencia</label>
    <input type="text" name="referencia" class="form-control" id="">
</div>
<div class="mb-3">
    <label for="">valor</label>
    <input type="number" name="valor"  min="0.00" max="10000.00" step="0.1" class="form-control" id="">
</div>
<div class="mb-3">
    <label for="">marca</label>
    <input type="text" name="marca" class="form-control" id="">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">CADASTRAR</button>

</div>
</form>

 