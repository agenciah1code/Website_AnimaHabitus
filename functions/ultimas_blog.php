<?php

    $link = "https://h1code.com.br/blog/feed/"; // Link do arquivo XML
    $xml = simplexml_load_file($link) -> channel; // Carrega o arquivo XML e retorna em Array

    $resultados = 999; // Editar aqui a quantidade de resultados que deseja que apareça na tela

    foreach($xml -> item as $item){

        $pubDate = $item->pubDate;
        $pubDate = strftime("%d/%m/%Y %H:%M:%S", strtotime($pubDate));

    	// echo "<h2><a href='$item->link' target='_blank'>$item->title</a></h2>";
    	// echo "<h2><a href='$item->link' target='_blank'>$item->author</a></h2>";
    	// echo "<br>";
    	// echo "<br>";
    	// echo "<p>$pubDate</p>";
    	// echo "<br>";
        // echo "<br>";
        
        var_dump($item->title);

    	if(--$resultados == 0) break;

    } //fim do foreach

    ?>