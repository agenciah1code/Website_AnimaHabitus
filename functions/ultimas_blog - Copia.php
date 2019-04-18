<?php

    $link = "https://h1code.com.br/blog/feed/"; // Link do arquivo XML
    $xml = simplexml_load_file($link) -> channel; // Carrega o arquivo XML e retorna em Array

    $resultados = 2; // Editar aqui a quantidade de resultados que deseja que apareça na tela

    foreach($xml -> item as $item){

        $pubDate = $item->pubDate;
        $pubDate = strftime("%d-%m-%Y %H:%M:%S", strtotime($pubDate));

    	echo "<a href='$item->link' target='_blank'>$item->title</a>";
    	echo "<br>";
    	echo "<br>";
    	echo "<a href='$item->link' target='_blank'>$pubDate</a>";
    	echo "<br>";
    	echo "<br>";

    	if(--$resultados == 0) break;

    } //fim do foreach

    ?>