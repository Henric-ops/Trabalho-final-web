<?php
include_once "UsuarioDAO.php";
$dao = new UsuarioDAO();

$usuarioEncontrado = null;

if (isset($_POST['buscar'])) {

    if (empty($_POST['nome_busca'])) {
         echo "<p style='color:s;'>Digite o nome do usuário</p>";;
    } else {
        $nome = $_POST['nome_busca'];
        $usuarioEncontrado = $dao->buscarPorNome($nome);

        if ($usuarioEncontrado == null) {
            echo "<script>alert('Usuário não encontrado!');</script>";
        }
    }
}


if (isset($_POST['salvar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($senha == "") {
        $senha = $_POST['senha_atual'];
    }

    $usuarioAtualizado = new Usuario([
        "id" => $id,
        "nome" => $nome,
        "email" => $email,
        "senha" => $senha
    ]);
    $dao->alterar($usuarioAtualizado);

    echo "<script>alert('Usuário alterado com sucesso!');</script>";
    $usuarioEncontrado = null;

}

if (isset($_POST['voltar'])) {
    header("Location: Menu.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="Altera.css">

</head>

<body>

    <h1>Alterar Usuário</h1>

    <form method="post">
        <label>Buscar pelo Nome:
            <input type="text" name="nome_busca">
        </label>
        <input type="submit" name="buscar" value="Buscar">
        <input type="submit" name="voltar" value="Voltar">

    </form>

    <br>
    <hr><br>

    <?php if ($usuarioEncontrado != null) { ?>

        <form method="post">
            <input type="hidden" name="id" value="<?= $usuarioEncontrado->getId() ?>">
            <input type="hidden" name="senha_atual" value="<?= $usuarioEncontrado->getSenha() ?>">

            <label>Nome:
                <input type="text" name="nome" value="<?= $usuarioEncontrado->getNome() ?>">
            </label><br><br>

            <label>Email:
                <input type="text" name="email" value="<?= $usuarioEncontrado->getEmail() ?>">
            </label><br><br>

            <label>Senha:
                <input type="text" name="senha" value="<?= $usuarioEncontrado->getSenha() ?>">
            </label>


            <br>

            <input type="submit" name="salvar" value="Salvar Alterações">
        </form>

    <?php } ?>

</body>

</html>