<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $studente = [
        'cognome' => 'Rossi',
        'nome' => 'Mario',
        'listaVoti' => []
    ];

    for ($i = 0; $i < 5; $i++) {
        $studente['listaVoti'][] = rand(2, 10);
    }

    $media = array_sum($studente['listaVoti']) / count($studente['listaVoti']);
    $mediaFormattata = number_format($media, 2);

    echo "<ul>";
    echo "<li>{$studente['cognome']}</li>";
    echo "<li>{$studente['nome']}</li>";
    echo "<li>Lista voti:";
    echo "<ol>";
    foreach ($studente['listaVoti'] as $voto) {
        echo "<li>$voto</li>";
    }
    echo "</ol>";
    echo "</li>";
    echo "</ul>";
    echo "<span>$mediaFormattata</span>";
    ?>
</body>
</html>