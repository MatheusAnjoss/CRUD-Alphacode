<h1>Editar Contato</h1>
<?php
$sql = "SELECT * FROM usuários WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label>Nome Completo</label>
        <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Profissão</label>
        <input type="text" name="prof" value="<?php echo $row->prof; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php echo $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone para Contato</label>
        <input type="text" name="telefone" value="<?php echo $row->telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Celular para Contato</label>
        <input type="text" name="celular" value="<?php echo $row->celular; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    </div>
</form>