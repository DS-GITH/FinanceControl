<?php

// Dados de conexão com o banco
$servidor = "localhost";
$usuario = "root";
$senha = "aluno"; // senha do MySQL
$banco = "usuarios";

// Conexão com o banco
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificação da conexão
if (!$conexao) {
    die("❌ Falha na conexão: " . mysqli_connect_error());
}

echo "✅ Conexão sucedida<br>";

// Recebe os dados do formulário
$nome = $_POST['username'];
$email = $_POST['email'];
$senhaNormal = $_POST['password'];
$dataNasc = $_POST['datanasc'];

// Segurança: escapa os caracteres especiais (evita SQL Injection)
$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);
$senhaNormal = mysqli_real_escape_string($conexao, $senhaNormal);
$dataNasc = mysqli_real_escape_string($conexao, $dataNasc);

// Criptografa a senha antes de salvar
$senhaSegura = password_hash($senhaNormal, PASSWORD_DEFAULT);

// Comando SQL para inserir no banco
$sql = "INSERT INTO user (nome, email, senha, datanasc) VALUES ('$nome', '$email', '$senhaSegura', '$dataNasc')";

// Executa o SQL
if (mysqli_query($conexao, $sql)) {
    echo "✅ Cadastro realizado com sucesso!";
} else {
    echo "❌ Erro ao cadastrar: " . mysqli_error($conexao);
}

?>
