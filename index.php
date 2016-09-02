<?php

include "vendor/autoload.php";

use GuzzleHttp\Client;
use Endpoint\AbstractEndpoint;

$client = new Client([
    'defaults' => [
        'headers' => ['apikey' => AbstractEndpoint::API_KEY],
    ]
]);


$findBranch = new \Endpoint\FindBranch();
$findBranch->setLatitude(41.008238);
$findBranch->setLongitude(28.978359);
$findBranch->setRadius(1000);

$response = \HTTP\Request::sendRequest($client, $findBranch);
print_r($response);

$findATM = new \Endpoint\FindATM();
$findATM->setLatitude(41.008238);
$findATM->setLongitude(28.978359);
$findATM->setRadius(1000);

$response = \HTTP\Request::sendRequest($client, $findATM);
print_r($response);

