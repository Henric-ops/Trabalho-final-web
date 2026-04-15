<?php
require_once "Conexao.php";
$conexao = Conexao::getConexao();

$sql = "SELECT nome, data, rotulo FROM cerveja ORDER BY data DESC";
$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Galeria de Rótulos</title>
    <link rel="stylesheet" href="galeria.css">
</head>

<body>
    <main class="page-shell">
      <h1>Galeria de Rótulos</h1>

      <div class="galeria">
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            $caminho = "Imagens/" . $row['rotulo'];

            ?>

            <div class="card">
                <img src="<?= $caminho ?>" alt="Rótulo da Cerveja">
                <h2><?= $row['nome'] ?></h2>
                <p>Data: <?= date("d/m/Y", strtotime($row['data'])) ?></p>
            </div>

        <?php } ?>
      </div>

      <div class="btn-voltar-container">
        <button class="btn-voltar" onclick="window.location.href='Menu.html';">Voltar</button>
      </div>
    </main>
</body>

</html>