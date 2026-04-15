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
    <main class="page-shell">
      <section class="page-card">
        <h1>Alterar Usuário</h1>

        <form method="post">
          <label>
            Buscar pelo Nome:
            <input type="text" name="nome_busca">
          </label>
          <input type="submit" name="buscar" value="Buscar" class="btn-action" />
          <input type="submit" name="voltar" value="Voltar" class="btn-secondary" />
        </form>

        <hr />

        <?php if ($usuarioEncontrado != null) { ?>
          <form method="post">
            <input type="hidden" name="id" value="<?= $usuarioEncontrado->getId() ?>">
            <input type="hidden" name="senha_atual" value="<?= $usuarioEncontrado->getSenha() ?>">

            <label>
              Nome:
              <input type="text" name="nome" value="<?= $usuarioEncontrado->getNome() ?>">
            </label>

            <label>
              Email:
              <input type="text" name="email" value="<?= $usuarioEncontrado->getEmail() ?>">
            </label>

            <label>
              Senha:
              <input type="text" name="senha" value="<?= $usuarioEncontrado->getSenha() ?>">
            </label>

            <input type="submit" name="salvar" value="Salvar Alterações" class="btn-action" />
          </form>
        <?php } ?>
      </section>
    </main>
</body>

</html>