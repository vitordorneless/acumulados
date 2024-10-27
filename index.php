<?php
$acumulados = array(
    array('jogo' => 'milionaria', 'acumulado' => '10000000'),
    array('jogo' => 'mega', 'acumulado' => '40000000'),
    array('jogo' => 'lotofacil', 'acumulado' => '200000000'),
    array('jogo' => 'quina', 'acumulado' => '2500000'),
    array('jogo' => 'lotomania', 'acumulado' => '13000000'),
    array('jogo' => 'timemania', 'acumulado' => '1600000'),
    array('jogo' => 'dupla', 'acumulado' => '1300000'),
    array('jogo' => 'federal', 'acumulado' => '500000'),
    array('jogo' => 'loteca', 'acumulado' => '650000'),
    array('jogo' => 'dia', 'acumulado' => '350000'),
    array('jogo' => 'sete', 'acumulado' => '900000')
);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Imagens</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
</head>

<body>
    <form>
        <a class="download"></a>
        <button class="generate-image" type="button">Baixar Imagens</button>
    </form>
    <?php
    foreach ($acumulados as $value) {
        echo '<section>';
        echo '<div>';
        echo '<div class="' . $value['jogo'] . '" id="' . $value['jogo'] . '">';
        echo '<div style="overflow-x: auto;">';
        echo '<table>';
        
        echo '<tr>';
        echo '<td>';
        echo $value['jogo'];
        echo '</td>';
        echo '<td>';
        echo 'R$' . number_format($value['acumulado'], 2, ',', '.');
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td class="boloes" id="boloes">';
        echo 'APOSTE EM NOSSOS BOLÕES';
        echo '</td>';
        echo '<td>';

        echo '</td>';
        echo '</tr>';
        
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    ?>
    <script src="js/html2canvas.min.js"></script>
    <script src="js/index.js"></script>
</body>


</html>