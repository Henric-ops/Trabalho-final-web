<?php
header('Content-Type: text/html; charset=UTF-8');
require_once "Conexao.php";
$conexao = Conexao::getConexao();



$sql1 = "SELECT tipo_estilo, AVG(avaliacao) AS media
         FROM cerveja
         GROUP BY tipo_estilo
         ORDER BY media DESC";
$r1 = $conexao->query($sql1);

$tipos = [];
$medias = [];
while ($row = $r1->fetch(PDO::FETCH_ASSOC)) {
    $tipos[] = $row['tipo_estilo'];
    $medias[] = round($row['media'], 2);
}


$sql2 = "SELECT nome, AVG(avaliacao) AS media
         FROM cerveja
         GROUP BY nome
         ORDER BY media DESC";
$r2 = $conexao->query($sql2);

$nomes = [];
$ranking = [];
while ($row = $r2->fetch(PDO::FETCH_ASSOC)) {

    $nomes[] = $row['nome'];
    $ranking[] = round($row['media'], 2);
}


$sql3 = "SELECT DATE_FORMAT(data, '%m/%Y') AS mes, COUNT(*) AS total
         FROM cerveja
         GROUP BY mes
         ORDER BY MIN(data)";
$r3 = $conexao->query($sql3);

$meses = [];
$totais = [];
while ($row = $r3->fetch(PDO::FETCH_ASSOC)) {
    $meses[] = $row['mes'];
    $totais[] = $row['total'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gráficos da Cervejaria</title>
        <link rel="stylesheet" href="Grafico.css" />


    <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>

</head>

<body>

    <div class="graf-container">
        <h2>Média de avaliações por estilo</h2>
        <canvas id="graf1"></canvas>
    </div>

    <div class="graf-container">
        <h2>Ranking das cervejas favoritas</h2>
        <canvas id="graf2"></canvas>
    </div>

    <div class="graf-container">
        <h2>Degustações por mês</h2>
        <canvas id="graf3"></canvas>
    </div>


    <script>

        new Chart(document.getElementById("graf1"), {
            type: "bar",
            data: {
                labels: <?= json_encode($tipos) ?>,
                datasets: [{
                    label: "Média das notas",
                    data: <?= json_encode($medias) ?>,
                    backgroundColor: "rgba(255,165,0,0.7)"
                }]
            }
        });


        new Chart(document.getElementById("graf2"), {
            type: "bar",
            data: {
                labels: <?= json_encode($nomes) ?>,
                datasets: [{
                    label: "Média das notas",
                    data: <?= json_encode($ranking) ?>,
                    backgroundColor: "rgba(0,150,255,0.7)"
                }]
            }
        });


        new Chart(document.getElementById("graf3"), {
            type: "line",
            data: {
                labels: <?= json_encode($meses) ?>,
                datasets: [{
                    label: "Degustações",
                    data: <?= json_encode($totais) ?>,
                    borderWidth: 3
                }]
            }
        });
    </script>

</body>

</html>