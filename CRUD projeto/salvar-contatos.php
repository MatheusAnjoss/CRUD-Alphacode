<?php
include("config.php");

$acao = $_REQUEST["acao"] ?? '';

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

switch ($acao) {
    case 'cadastrar':
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $prof = $conn->real_escape_string($_POST["prof"]);
        $data_nasc = $conn->real_escape_string($_POST["data_nasc"]);
        $telefone = $conn->real_escape_string($_POST["telefone"]);
        $celular = $conn->real_escape_string($_POST["celular"]);

        $sql = "INSERT INTO usuários (nome, email, prof, data_nasc, telefone, celular) VALUES ('$nome', '$email', '$prof', '$data_nasc', '$telefone', '$celular')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Contato salvo com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao salvar contato: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':
        $id = (int)$_POST["id"];
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $prof = $conn->real_escape_string($_POST["prof"]);
        $data_nasc = $conn->real_escape_string($_POST["data_nasc"]);
        $telefone = $conn->real_escape_string($_POST["telefone"]);
        $celular = $conn->real_escape_string($_POST["celular"]);

        $sql = "UPDATE usuários SET
                nome = '$nome', 
                email = '$email', 
                prof = '$prof', 
                data_nasc = '$data_nasc', 
                telefone = '$telefone', 
                celular = '$celular'
                WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Contato editado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao editar contato: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        $id = (int)$_GET["id"];

        $sql = "DELETE FROM usuários WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Contato excluído com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao excluir contato: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    default:
        echo "<script>alert('Ação inválida!');</script>";
        echo "<script>location.href='?page=listar';</script>";
        break;
}
?>