<?php

$link = "https://h1code.com.br/blog/feed/"; // Link do arquivo XML
$xml = simplexml_load_file($link)->channel; // Carrega o arquivo XML e retorna em Array

foreach ($xml->item as $item) {

    $titulo = $item->title;

    $qnt = count($titulo);

    echo $qnt;

    for ($x = 0; $x < count($titulo); $x++) {
        echo "$x: $titulo[$x]\n\n";
    }

} //fim do foreach
