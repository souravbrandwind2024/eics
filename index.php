<?php

require 'php/Router.php';

$router = new Router();

$router->get('/', function(){
    include 'home.php';
});
$directory = "./";
$phpFiles = glob($directory . "*.php");

foreach ($phpFiles as $phpFile) {
    $filenameWithoutExtension = pathinfo($phpFile, PATHINFO_FILENAME);
    $router->get('/' . $filenameWithoutExtension, function() use($phpFile){
        include basename($phpFile);
    });
}

$router->get('/sitemap_index.xml', function() use($phpFiles){
    echo '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://eicsindia.org/</loc>
        <lastmod>2024-04-29</lastmod>
    </url> ';

    foreach ($phpFiles as $phpFile) {
        $filenameWithoutExtension = pathinfo($phpFile, PATHINFO_FILENAME);
        if(in_array($filenameWithoutExtension, ['home', 'index', 'submit-contact', 'submit-quiz'])){
            continue;
        }
        echo '<url>
        <loc>https://eicsindia.org/'.$filenameWithoutExtension.'</loc>
        <lastmod>2024-04-29</lastmod>
      </url> ';
    }


    echo '</urlset>';
});

$router->run();