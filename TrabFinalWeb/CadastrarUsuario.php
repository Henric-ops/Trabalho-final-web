<?php
include_once __DIR__ . '/Usuario.php';
include_once __DIR__ . '/UsuarioDAO.php';

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

    $usuarioDao = new UsuarioDAO();

    $usuario = new Usuario(
        null,
        $_POST['nome'],
        $_POST['email'],
        trim($_POST['senha'])
        );

    $usuarioDao->inserir($usuario);

    $lista = $usuarioDao->listar();

    foreach ($lista as $usuario) {
        echo $usuario->getNome() . "<br>";
    }


    header("Location: Login.php");
    exit();
}





?>