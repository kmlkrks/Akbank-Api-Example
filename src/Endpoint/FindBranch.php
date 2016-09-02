<?php

namespace Endpoint;

class FindBranch extends AbstractEndpoint implements EndpointInterface
{
    const ENDPOINT_URL = 'https://apigate.akbank.com/api/mock/findBranch';

    public function __toString()
    {
        return json_encode(
            [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'radius' => $this->radius,
                'city' => $this->city,
                'district' => $this->district,
                'searchText' => $this->searchText
            ]
        );
    }
}
