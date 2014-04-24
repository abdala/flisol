<?php

require '../../vendor/autoload.php';

function getCrawler($url) {
    return (new Goutte\Client)->request('GET', $url);
}
$artistsURL = [];
$songsURL   = [];
$parts      = [];

//-------------------Busca artistas-------------------------
$crawler = getCrawler('http://www.vagalume.com.br/browse/style/funk-carioca.html');
$crawler->filter('#browselist a')->each(function($node) use (&$artistsURL) {
    $artistsURL[] = 'http://www.vagalume.com.br' . $node->attr('href');
});

//-------------------Busca músicas-------------------------
shuffle($artistsURL);
$randArtists = array_slice($artistsURL,0, 5);
foreach ($randArtists as $artistURL) {
    $crawler = getCrawler($artistURL);
    $crawler->filter('#artSongs a')->each(function($node) use (&$songsURL) {
        $songsURL[] = 'http://www.vagalume.com.br' . $node->attr('href');
    });
    usleep(10000);
}

//-------------------Busca letras-------------------------
shuffle($songsURL);
$randSongs = array_slice($songsURL,0, 20);
foreach ($randSongs as $key => $songURL) {
    $crawler = getCrawler($songURL);
    $crawler->filter('#lyr_original')->each(function($node) {
        $parts = explode("<br>", $node->html());
        shuffle($parts);
        echo $parts[0] . "\n<br>";
    });
    if (($key % 4) == 0 && $key > 0) {
        echo "\n<br>";
    }
    
    usleep(10000);
}