<?php
echo "<h1>Resultado</h1>";
echo "<hr> <br>";
$tab = 0;
    $tab = $_POST['valor'];
        $num = 0;
        for ($num = 0; $num <= 10; $num++) {
            echo $tab. " x " . $num . " = " . ($num * $tab) . "<br>";
        }
echo "<br>";
echo "<form>";
echo "<input type='button' value='voltar' onclick='history.back()'>";
echo "</form>";