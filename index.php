<?php
$acumulados = array(
    array('jogo'=>'milionaria','acumulado'=>'10000000'),
    array('jogo'=>'mega','acumulado'=>'40000000'),
    array('jogo'=>'lotofacil','acumulado'=>'200000000'),
    array('jogo'=>'quina','acumulado'=>'2500000'),
    array('jogo'=>'lotomania','acumulado'=>'13000000'),
    array('jogo'=>'timemania','acumulado'=>'1600000'),
    array('jogo'=>'dupla','acumulado'=>'1300000'),
    array('jogo'=>'federal','acumulado'=>'500000'),
    array('jogo'=>'loteca','acumulado'=>'650000'),
    array('jogo'=>'dia','acumulado'=>'350000'),
    array('jogo'=>'sete','acumulado'=>'900000')
);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Imagens</title>
        <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
    </head>
    <section>
        <?php
        foreach($acumulados as $value){
            echo '<section>';
            echo '<p>';
            echo 'Jogo: ' . $value['jogo'] . '<br>';
            echo 'R$' . number_format($value['acumulado'],2,',','.');
            echo '</p>';
            echo '</section>';
        }
        ?>
    </section>
    <footer>
        <p>Gerando imagens dos acumulados</p>
    </footer>
</html>