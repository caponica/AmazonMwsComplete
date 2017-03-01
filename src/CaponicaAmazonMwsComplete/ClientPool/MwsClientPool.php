<?php

/**
 * Part of the caponica/amazon-mws-complete package
 *
 * The MwsClientPool is configured once for a given marketplace/seller/app and can then be used to retrieve
 * Amazon Clients for any of the MWS Service URLs.
 */

namespace CaponicaAmazonMwsComplete\ClientPool;

use CaponicaAmazonMwsComplete\ClientPack\MwsFeedAndReportClientPack;
use CaponicaAmazonMwsComplete\ClientPack\MwsFinanceClientPack;
use CaponicaAmazonMwsComplete\ClientPack\MwsProductClientPack;
use CaponicaAmazonMwsComplete\ClientPack\MwsOrderClientPack;
use CaponicaAmazonMwsComplete\ClientPack\FbaOutboundClientPack;


class MwsClientPool {
    // $channelId can be used to stash an id that your code uses to reference this Client Pool's Amazon site
    protected $channelId;

    /**
     * @var MwsFeedAndReportClientPack
     */
    protected $feedAndReportClientPack;
    /**
     * @var MwsFinanceClientPack
     */
    protected $financeClientPack;
    /**
     * @var MwsProductClientPack
     */
    protected $productClientPack;
    /**
     * @var MwsOrderClientPack
     */
    protected $orderClientPack;  
    /**
     * @var FbaOutboundClientPack
     */
    protected $fbaOutboundClientPack;

    protected $orderClientPack;    

    protected $config;

    public function setConfig($config = []) {
        $this->config = new MwsClientPoolConfig($config);
    }

    /**
     * @return MwsFinanceClientPack
     */
    public function getFinanceClientPack() {
        if(empty($this->financeClientPack)) {
            $this->financeClientPack = new MwsFinanceClientPack($this->config);
        }
        return $this->financeClientPack;
    }

    /**
     * @return MwsProductClientPack
     */
    public function getProductClientPack() {
        if(empty($this->productClientPack)) {
            $this->productClientPack = new MwsProductClientPack($this->config);
        }
        return $this->productClientPack;
    }

    /**
     * @return MwsFeedAndReportClientPack
     */
    public function getFeedAndReportClientPack() {
        if(empty($this->feedAndReportClientPack)) {
            $this->feedAndReportClientPack = new MwsFeedAndReportClientPack($this->config);
        }
        return $this->feedAndReportClientPack;
    }

    /**
     * @return MwsOrderClientPack
     */
    public function getOrderClientPack() {
        if(empty($this->orderClientPack)) {
            $this->orderClientPack = new MwsOrderClientPack($this->config);
        }
        return $this->orderClientPack;
    }


    /**
     * @return FbaOutboundClientPack
     */
    public function getFbaOutboundClientPack() {
        if(empty($this->fbaOutboundClientPack)) {
            $this->fbaOutboundClientPack = new FbaOutboundClientPack($this->config);
        }
        return $this->fbaOutboundClientPack;
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
