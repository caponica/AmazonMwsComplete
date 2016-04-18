<?php

/**
 * Part of the caponica/amazon-mws-complete package
 *
 * The MwsClientPool is configured once for a given marketplace/seller/app and can then be used to retrieve
 * Amazon Clients for any of the MWS Service URLs.
 */

namespace CaponicaAmazonMwsComplete\ClientPool;

use CaponicaAmazonMwsComplete\ClientPack\MwsProductClientPack;

class MwsClientPool {
    // $channelId can be used to stash an id that your code uses to reference this Client Pool's Amazon site
    protected $channelId;

    /**
     * @var MwsProductClientPack
     */
    protected $productClientPack;

    protected $config;

    public function setConfig($config = []) {
        $this->config = new MwsClientPoolConfig($config);
    }

    public function getProductClientPack() {
        if(empty($this->productClientPack)) {
            $this->productClientPack = new MwsProductClientPack($this->config);
        }
        return $this->productClientPack;
    }

    public function setChannelId($value) {
        return $this->channelId = $value;
    }
    public function getChannelId() {
        return $this->channelId;
    }
//    public function getMarketplaceId() {
//        return $this->config....marketplaceId;
//    }
//    public function getSellerId() {
//        return $this->config...sellerId;
//    }
}
