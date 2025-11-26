<?php

include_once __DIR__ . "/CervejaDAO.php";
include_once __DIR__ . "/Cerveja.php";


if (isset($_POST['nomeCerveja'], $_POST['tipoEstilo'], $_POST['teorAlcoolico'], $_POST['ibu'], $_POST['paisOrigem'], $_POST['data'], $_POST['local'], $_POST['avaliacao'], $_POST['comentario'])) {

    $fotoNome = null;

    if (isset($_FILES['rotulo']) && $_FILES['rotulo']['error'] === UPLOAD_ERR_OK) {
        $arquivo = $_FILES['rotulo'];
        $ext = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        $fotoNome = $arquivo['name'];

        if (!move_uploaded_file($arquivo['tmp_name'], __DIR__ . "/Imagens/" . $fotoNome)) {
            echo "Erro ao enviar o arquivo de rótulo.<br>";
            $fotoNome = null;
        }
    }

    $atributos = [
        'nome' => $_POST['nomeCerveja'],
        'tipoEstilo' => $_POST['tipoEstilo'],
        'teorAlcoolico' => $_POST['teorAlcoolico'],
        'ibu' => $_POST['ibu'],
        'paisOrigem' => $_POST['paisOrigem'],
        'data' => $_POST['data'],
        'local' => $_POST['local'],
        'avaliacao' => $_POST['avaliacao'],
        'comentario' => $_POST['comentario'],
        'rotulo' => $fotoNome,
        'sugestao' => $_POST['sugestao']
    ];

    $cerveja = new Cerveja($atributos);
    $cervejaDao = new CervejaDAO();
    $cervejaDao->inserir($cerveja);

    echo "<script>alert('Cerveja cadastrada com sucesso!');</script>";

} else {
    echo "<script>alert('Erro: Campos obrigatórios não enviados.');</script>";
}

?>