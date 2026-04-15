<?php
session_start();
include_once 'Conexao.php';

$nome = trim($_POST['nome'] ?? '');
$senha = trim($_POST['senha'] ?? '');

try {
    $conn = Conexao::getConexao();
    $stmt = $conn->prepare("SELECT id, senha FROM usuario WHERE nome = :nome");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($senha === $usuario['senha']) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $nome;
            header("Location: Menu.html");
            exit();
        } else {
            header("Location: login.php?erro=1"); 
            exit();
        }
    } else {
        header("Location: login.php?erro=2");
        exit();
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
