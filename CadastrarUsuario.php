<?php
include_once __DIR__ . '/Usuario.php';
include_once __DIR__ . '/UsuarioDAO.php';

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

    try {
        $usuarioDao = new UsuarioDAO();

        $usuario = new Usuario([
            "nome" => $_POST['nome'],
            "email" => $_POST['email'],
            "senha" => trim($_POST['senha'])
        ]);

        $usuarioDao->inserir($usuario);

        echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = 'Login.php';
              </script>";
        exit();

    } catch (Exception $e) {

        echo "<script>
                alert('Erro ao cadastrar usuário!');
                window.location.href = 'CadastroUsuario.php';
              </script>";
        exit();
    }
}
?>
