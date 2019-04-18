<?php

$link = "https://animahabitus.com.br/blog/feed/"; // Link do arquivo XML
$xml = simplexml_load_file($link)->channel; // Carrega o arquivo XML e retorna em Array
$blog = array();
$key = 0;


foreach ($xml->item as $item) {
    $blog[$key]['titulo'] = $item->title;
    $blog[$key]['link'] = $item->link;
    $blog[$key]['pubDate'] = strftime("%d/%m/%Y %H:%M:%S", strtotime($item->pubDate));
    $blog[$key]['descricao'] = $item->description;
    $key++;
}

