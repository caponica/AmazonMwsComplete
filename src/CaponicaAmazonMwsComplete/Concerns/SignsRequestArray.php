<?php

namespace CaponicaAmazonMwsComplete\Concerns;

trait SignsRequestArray
{
    /**
     * 'Sign' the request by adding SellerId and MWSAuthToken (if used).
     *
     * @param array $requestArray
     *
     * @return array
     */
    private function signArray($requestArray = [])
    {
        $requestArray[static::PARAM_SELLER_ID] = $this->sellerId;
        if ($this->authToken) {
            $requestArray[static::PARAM_MWS_AUTH_TOKEN] = $this->authToken;
        }

        return $requestArray;
    }
}
