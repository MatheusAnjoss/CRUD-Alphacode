<h1>Novo Contato</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome Completo</label>
		<input type="text" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
	</div>
	<div class="mb-3">
		<label>Profissão</label>
		<input type="text" name="prof" class="form-control" placeholder="Digite sua profissão">
	</div>
	<div class="mb-3">
		<label>Data de nascimento</label>
		<input type="date" name="data_nasc" class="form-control" placeholder="Selecione sua data de nascimento">
	</div>
	<div class="mb-3">
		<label>Telefone para contato</label>
		<input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone" required>
	</div>
	<div class="mb-3">
		<label>Celular para contato</label>
		<input type="text" name="celular" class="form-control" placeholder="Digite seu celular" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Cadastrar contato</button>
	</div>
</form>