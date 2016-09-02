<?php

namespace HTTP;

use Endpoint\EndpointInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Request
{
    public static function sendRequest(Client $client, EndpointInterface $endpoint)
    {
        $client->setDefaultOption("verify", false);
        try {
            $response = $client->post($endpoint::ENDPOINT_URL,
                array(
                    'body' => $endpoint
                )
            )->json();
        } catch (ClientException $e) {
            $response = $e->getMessage();
        }

        return $response;
    }
}
