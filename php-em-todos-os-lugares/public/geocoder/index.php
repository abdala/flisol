<?php

require '../../vendor/autoload.php';

$adapter  = new \Geocoder\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\Geocoder();
$chain    = new \Geocoder\Provider\ChainProvider(array(
    new \Geocoder\Provider\FreeGeoIpProvider($adapter),
    new \Geocoder\Provider\HostIpProvider($adapter),
    new \Geocoder\Provider\GoogleMapsProvider($adapter, 'pt_BR', 'Brazil', true)
));

$geocoder->registerProvider($chain);

// $geocode = $geocoder->geocode('179.211.77.69');
// $geocode = $geocoder->geocode('Avenida Eptácio Pessoa, João Pessoa');
// $geocode = $geocoder->geocode('Praia do Cabo Branco, João Pessoa');
$geocode = $geocoder->geocode('Unipê, João Pessoa');
echo '<pre>';
var_export($geocode);

// $result = $geocoder->reverse(-7.1590550000000004, -34.854423599999997);
// echo '<pre>';
// var_export($result);


    
