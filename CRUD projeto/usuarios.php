<h1>Lista de Contatos</h1>
<?php
$sql = "SELECT * FROM usuários";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>E-mail</th>";
    echo "<th>Celular para Contato</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->nome . "</td>";
        echo "<td>" . $row->data_nasc . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->celular . "</td>";
        echo "<td>
                <a href='?page=editar&id=" . $row->id . "' class='btn btn-light'>
                    <img src='editar.png' alt='Editar' style='width:24px; height:24px;'>
                </a>
                <a href='?page=salvar&acao=excluir&id=" . $row->id . "' class='btn btn-light' onclick=\"return confirm('Tem certeza que deseja excluir este contato?');\">
                    <img src='excluir.png' alt='Excluir' style='width:24px; height:24px;'>
                </a>
               </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>