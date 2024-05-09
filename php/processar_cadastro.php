<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conexao_cadastro";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Dados do formulário
$nome_completo = $_POST['nome_completo'];
$tipo_cliente = $_POST['tipo_cliente'];
$dt_nasc = $_POST['dt_nasc'];
$email = $_POST['email'];   
$tel = $_POST['tel'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$num = $_POST['num'];

// Preparar e executar a query SQL para inserir os dados na tabela
$sql = "INSERT INTO novo_cliente (nome_completo, tipo_cliente, dt_nasc, email, tel, cpf, rg, bairro, cidade, rua, num) 
        VALUES ('$nome_completo', '$tipo_cliente', '$dt_nasc',  '$email', '$tel', '$cpf', '$rg', '$bairro', '$cidade', '$rua', '$num')";

if ($conn->query($sql) === TRUE) {
    echo "Novo cliente cadastrado com sucesso.";
} else {
    echo "Erro ao cadastrar cliente: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>
