<?php

$link = "http://animahabitus.com.br/blog/feed/"; // Link do arquivo XML
$xml = simplexml_load_file($link)->channel; // Carrega o arquivo XML e retorna em Array
$blog = array();
$key = 0;


foreach ($xml->item as $item) {
    $blog[$key]['titulo'] = $item->title;
    $blog[$key]['link'] = $item->link;
    $blog[$key]['pubDate'] = strftime("%d/%m/%Y %H:%M:%S", strtotime($item->pubDate));
    $key++;
}

<div class="carousel-inner">
                        <?php include("functions/ultimas_blog.php"); ?>
                        <?php if (!empty($blog) and count($blog)) { ?>
                        <?php foreach ($blog as $item) { ?>
                        <div class="carousel-item active">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <img src="img/testeblog.png" alt="Primeiro Slide"> <br> <br>

                                    <h2 class="text-center"></h2> <br>


                                    <strong>O titulo é:</strong> <br>
                                    <?php echo $item['titulo']; ?>

                                    <br> <br>

                                    <strong>O link é:</strong> <br>
                                    <?php echo $item['link']; ?>

                                    <br> <br>

                                    <strong>A data é:</strong> <br>
                                    <?php echo $item['pubDate']; ?>

                                    <br> <br>


                                    <p>

                                    </p>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>


                    </div>

