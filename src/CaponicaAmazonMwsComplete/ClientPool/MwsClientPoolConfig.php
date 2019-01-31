<?php

/**
 * Object to validate and parse configuration for an MwsClientPool
 */

namespace CaponicaAmazonMwsComplete\ClientPool;

class MwsClientPoolConfig {
    const PARAM_ACCESS_KEY  = 'access_key';
    const PARAM_SECRET_KEY  = 'secret_key';
    const PARAM_APP_NAME    = 'application_name';
    const PARAM_AUTH_TOKEN  = 'auth_token';
    const PARAM_APP_VERSION = 'application_version';
    const PARAM_EXTRAS      = 'extras';
    const PARAM_AMAZON_SITE = 'amazon_site';
    const PARAM_SELLER_ID   = 'seller_id';

    const SITE_CANADA       = 'CA';
    const SITE_MEXICO       = 'MX';
    const SITE_USA          = 'US';
    const SITE_GERMANY      = 'DE';
    const SITE_SPAIN        = 'ES';
    const SITE_FRANCE       = 'FR';
    const SITE_ITALY        = 'IT';
    const SITE_UK           = 'UK';
    const SITE_BRAZIL       = 'BR';
    const SITE_CHINA        = 'CN';
    const SITE_INDIA        = 'IN';
    const SITE_JAPAN        = 'JP';
    const SITE_AUSTRALIA    = 'AU';
    const SITE_TURKEY       = 'TR';

    const CONFIG_KEY_SERVICE_URL            = 'ServiceURL';
    const CONFIG_KEY_USER_AGENT             = 'UserAgent';
    const CONFIG_KEY_SIGNATURE_METHOD       = 'SignatureMethod';
    const CONFIG_KEY_SIGNATURE_VERSION      = 'SignatureVersion';
    const CONFIG_KEY_TIMES_RETRY_ON_ERROR   = 'TimesRetryOnError';
    const CONFIG_KEY_PROXY_HOST             = 'ProxyHost';
    const CONFIG_KEY_PROXY_PORT             = 'ProxyPort';
    const CONFIG_KEY_PROXY_USERNAME         = 'ProxyUsername';
    const CONFIG_KEY_PROXY_PASSWORD         = 'ProxyPassword';
    const CONFIG_KEY_MAX_ERROR_RETRY        = 'MaxErrorRetry';
    const CONFIG_KEY_HEADERS                = 'Headers';

    private $accessKey;
    private $secretKey;
    private $authToken = null;  // only needed when working with (3rd party) client accounts which provide an Auth Token
    private $applicationName;
    private $applicationVersion;
    private $extras;            // Extra configuration parameters, passed through to Clients via "config" parameter
    private $amazonSite;        // One of the SITE_XYZ constants
    private $sellerId;

    public static function getDomainSuffixForSite($site, $fullDomain=false) {
        $suffixes = self::getDomainSuffixes();
        if (empty($suffixes[$site])) {
            throw new \Exception("No domain suffix exists for site $site");
        }
        $prefix = ($fullDomain ? 'https://www.amazon.' : '');
        return $prefix . $suffixes[$site];
    }
    public static function getDomainSuffixes() {
        return [
            self::SITE_CANADA       => 'ca',
            self::SITE_MEXICO       => 'com.mx',
            self::SITE_USA          => 'com',
            self::SITE_GERMANY      => 'de',
            self::SITE_SPAIN        => 'es',
            self::SITE_FRANCE       => 'fr',
            self::SITE_ITALY        => 'it',
            self::SITE_UK           => 'co.uk',
            self::SITE_BRAZIL       => 'com.br',
            self::SITE_CHINA        => 'cn',
            self::SITE_INDIA        => 'in',
            self::SITE_JAPAN        => 'co.jp',
            self::SITE_AUSTRALIA    => 'com.au',
            self::SITE_TURKEY       => 'com.tr',
        ];
    }

    /**
     * MwsClientPoolConfig constructor.
     *
     * @param array $parameterArray     Required. Array of configuration parameters.
     * @param null $siteCode            Optional. Can be set to over-ride the site setting in $parameterArray (to share config between different sites)
     */
    public function __construct($parameterArray, $siteCode=null) {
        $requiredKeys = [
            self::PARAM_ACCESS_KEY,
            self::PARAM_SECRET_KEY,
            self::PARAM_APP_NAME,
            self::PARAM_APP_VERSION,
            self::PARAM_SELLER_ID,
        ];
        if (empty($siteCode)) {
            $requiredKeys[] = self::PARAM_AMAZON_SITE;
        }

        foreach ($requiredKeys as $key) {
            if (empty($parameterArray[$key])) {
                throw new \InvalidArgumentException('Missing required parameter (' . $key . ') in MwsClientPoolConfig');
            }
        }

        $amazonSite = empty($siteCode) ? $parameterArray[self::PARAM_AMAZON_SITE] : $siteCode;

        if (!$this->isValidAmazonSite($amazonSite)) {
            throw new \InvalidArgumentException('Invalid site code (' . $amazonSite . ') in MwsClientPoolConfig');
        }

        $this->amazonSite           = $amazonSite;
        $this->accessKey            = $parameterArray[self::PARAM_ACCESS_KEY];
        $this->secretKey            = $parameterArray[self::PARAM_SECRET_KEY];
        $this->applicationName      = $parameterArray[self::PARAM_APP_NAME];
        $this->applicationVersion   = $parameterArray[self::PARAM_APP_VERSION];
        $this->sellerId             = $parameterArray[self::PARAM_SELLER_ID];
        if (!empty($parameterArray[self::PARAM_AUTH_TOKEN])) {
            $this->authToken = $parameterArray[self::PARAM_AUTH_TOKEN];
        } else {
            $this->authToken = null;
        }
        if (!empty($parameterArray[self::PARAM_EXTRAS])) {
            $this->extras = $parameterArray[self::PARAM_EXTRAS];
        } else {
            $this->extras = [];
        }
    }

    private function getAmazonSites() {
        return [
            self::SITE_CANADA,
            self::SITE_MEXICO,
            self::SITE_USA,
            self::SITE_GERMANY,
            self::SITE_SPAIN,
            self::SITE_FRANCE,
            self::SITE_ITALY,
            self::SITE_UK,
            self::SITE_BRAZIL,
            self::SITE_CHINA,
            self::SITE_INDIA,
            self::SITE_JAPAN,
            self::SITE_AUSTRALIA,
            self::SITE_TURKEY,
        ];
    }

    private function getMwsEndpoints() {
        return [
            self::SITE_CANADA       => 'https://mws.amazonservices.ca',
            self::SITE_MEXICO       => 'https://mws.amazonservices.com.mx',
            self::SITE_USA          => 'https://mws.amazonservices.com',
            self::SITE_GERMANY      => 'https://mws-eu.amazonservices.com',
            self::SITE_SPAIN        => 'https://mws-eu.amazonservices.com',
            self::SITE_FRANCE       => 'https://mws-eu.amazonservices.com',
            self::SITE_ITALY        => 'https://mws-eu.amazonservices.com',
            self::SITE_UK           => 'https://mws-eu.amazonservices.com',
            self::SITE_BRAZIL       => 'https://mws.amazonservices.com',
            self::SITE_CHINA        => 'https://mws.amazonservices.com.cn',
            self::SITE_INDIA        => 'https://mws.amazonservices.in',
            self::SITE_JAPAN        => 'https://mws.amazonservices.jp',
            self::SITE_AUSTRALIA    => 'https://mws.amazonservices.com.au',
            self::SITE_TURKEY       => 'https://mws.services.amazon.com.tr',
        ];
    }
    private function getMwsEndpoint($amazonSite) {
        $endpoints = $this->getMwsEndpoints();
        if (!empty($endpoints[$amazonSite])) {
            return $endpoints[$amazonSite];
        }
        throw new \InvalidArgumentException('No endpoint known for site code "' . $amazonSite . '"');
    }

    public static function getMarketplaceIds() {
        return [
            self::SITE_CANADA    => 'A2EUQ1WTGCTBG2',
            self::SITE_MEXICO    => 'A1AM78C64UM0Y8',
            self::SITE_USA       => 'ATVPDKIKX0DER',
            self::SITE_GERMANY   => 'A1PA6795UKMFR9',
            self::SITE_SPAIN     => 'A1RKKUPIHCS9HS',
            self::SITE_FRANCE    => 'A13V1IB3VIYZZH',
            self::SITE_ITALY     => 'APJ6JRA9NG5V4',
            self::SITE_UK        => 'A1F83G8C2ARO7P',
            self::SITE_BRAZIL    => 'A2Q3Y263D00KWC',
            self::SITE_CHINA     => 'AAHKV2X7AFYLW',
            self::SITE_INDIA     => 'A21TJRUUN4KGV',
            self::SITE_JAPAN     => 'A1VC38T7YXB528',
            self::SITE_AUSTRALIA => 'A39IBJ37TRP1C6',
            self::SITE_TURKEY    => 'A33AVAJ2PDY3EV',
        ];
    }
    /*
     * Multi-channel fulfilment orders are linked to these "Non-Amazon" marketplaces
     */
    public static function getNonAmazonMarketplaceIds() {
        return [
            self::SITE_CANADA    => 'A1MQXOICRS2Z7M',
            self::SITE_MEXICO    => 'A3H6HPSLHAK3XG',
            self::SITE_USA       => 'A2ZV50J4W1RKNI',
            self::SITE_GERMANY   => 'A38D8NSA03LJTC',
            self::SITE_SPAIN     => 'AFQLKURYRPEL8',
            self::SITE_FRANCE    => 'A1ZFFQZ3HTUKT9',
            self::SITE_ITALY     => 'A62U237T8HV6N',
            self::SITE_UK        => 'AZMDEXL2RVFNN',
            self::SITE_BRAZIL    => null,
            self::SITE_CHINA     => null,
            self::SITE_INDIA     => null,
            self::SITE_JAPAN     => null,
            self::SITE_AUSTRALIA => null,
            self::SITE_TURKEY    => 'A33AVAJ2PDY3EV',
        ];
    }

    public static function convertMarketplaceIdIntoCountry($marketplaceId) {
        $lookup = array_flip(self::getMarketplaceIds());
        if (!empty($lookup[$marketplaceId])) {
            return $lookup[$marketplaceId];
        }
        throw new \InvalidArgumentException('Marketplace id #' . $marketplaceId . ' is unknown');
    }
    public function getMarketplaceId($amazonSite=null) {
        if (empty($amazonSite)) {
            $amazonSite = $this->amazonSite;
        }

        $marketplaces = self::getMarketplaceIds();
        if (!empty($marketplaces[$amazonSite])) {
            return $marketplaces[$amazonSite];
        }

        throw new \InvalidArgumentException('No marketplace id known for site code "' . $amazonSite . '"');
    }
    /*
     * Returns the id string for the merchant-fulfilled version of a given marketplace
     */
    public function getNonAmazonMarketplaceId($amazonSite=null) {
        if (empty($amazonSite)) {
            $amazonSite = $this->amazonSite;
        }

        $marketplaces = self::getNonAmazonMarketplaceIds();
        if (!empty($marketplaces[$amazonSite])) {
            return $marketplaces[$amazonSite];
        }

        throw new \InvalidArgumentException('No Non-Amazon marketplace id known for site code "' . $amazonSite . '"');
    }

    private function isValidAmazonSite($site) {
        if (empty($site)) {
            return false;
        }
        if (in_array($site, $this->getAmazonSites())) {
            return true;
        }
        return false;
    }

    public function getAmazonSite() {
        return $this->amazonSite;
    }
    public function getSellerId() {
        return $this->sellerId;
    }
    public function getAccessKey() {
        return $this->accessKey;
    }
    public function getSecretKey() {
        return $this->secretKey;
    }
    public function getApplicationName() {
        return $this->applicationName;
    }
    public function getApplicationVersion() {
        return $this->applicationVersion;
    }

    public function setAuthToken($authToken) {
        $this->authToken = $authToken;
    }
    public function getAuthToken() {
        return $this->authToken;
    }
    public function removeAuthToken() {
        $this->authToken = null;
    }

    public function getConfigKeysForOrder() {
        return [
            self::CONFIG_KEY_SERVICE_URL,
            self::CONFIG_KEY_USER_AGENT,
            self::CONFIG_KEY_SIGNATURE_VERSION,
            self::CONFIG_KEY_TIMES_RETRY_ON_ERROR,
            self::CONFIG_KEY_PROXY_HOST,
            self::CONFIG_KEY_PROXY_PORT,
            self::CONFIG_KEY_PROXY_USERNAME,
            self::CONFIG_KEY_PROXY_PASSWORD,
            self::CONFIG_KEY_MAX_ERROR_RETRY,
        ];
    }

    public function getConfigKeysForProduct() {
        return [
            self::CONFIG_KEY_SERVICE_URL,
            self::CONFIG_KEY_USER_AGENT,
            self::CONFIG_KEY_SIGNATURE_VERSION,
            self::CONFIG_KEY_TIMES_RETRY_ON_ERROR,
            self::CONFIG_KEY_PROXY_HOST,
            self::CONFIG_KEY_PROXY_PORT,
            self::CONFIG_KEY_PROXY_USERNAME,
            self::CONFIG_KEY_PROXY_PASSWORD,
            self::CONFIG_KEY_MAX_ERROR_RETRY,
        ];
    }

    public function getConfigKeysForFeedAndReport() {
        return [
            self::CONFIG_KEY_SERVICE_URL,
            self::CONFIG_KEY_USER_AGENT,
            self::CONFIG_KEY_SIGNATURE_VERSION,
            self::CONFIG_KEY_SIGNATURE_METHOD,
            self::CONFIG_KEY_PROXY_HOST,
            self::CONFIG_KEY_PROXY_PORT,
            self::CONFIG_KEY_MAX_ERROR_RETRY,
        ];
    }

    public function getConfigKeysForFinance() {
        return [
            self::CONFIG_KEY_SERVICE_URL,
            self::CONFIG_KEY_USER_AGENT,
            self::CONFIG_KEY_SIGNATURE_VERSION,
            self::CONFIG_KEY_SIGNATURE_METHOD,
            self::CONFIG_KEY_PROXY_HOST,
            self::CONFIG_KEY_PROXY_PORT,
            self::CONFIG_KEY_MAX_ERROR_RETRY,
            self::CONFIG_KEY_PROXY_USERNAME,
            self::CONFIG_KEY_PROXY_PASSWORD,
            self::CONFIG_KEY_HEADERS,
        ];
    }
    /**
     * Builds the array of extra "config" values to pass through to MarketplaceWebServiceOrders_Client::__construct()
     *
     * @param $serviceUrlSuffix
     * @return array
     */
    public function getConfigForOrder($serviceUrlSuffix) {
        $config = [];
        foreach ($this->getConfigKeysForOrder() as $key) {
            if (!empty($this->extras[$key])) {
                $config[$key] = $this->extras[$key];
            }
        }
        $config [self::CONFIG_KEY_SERVICE_URL] = $this->getMwsEndpoint($this->amazonSite) . $serviceUrlSuffix;
        return $config;
    }
    /**
     * Builds the array of extra "config" values to pass through to MarketplaceWebServiceProducts_Client::__construct()
     *
     * @param $serviceUrlSuffix
     * @return array
     */
    public function getConfigForProduct($serviceUrlSuffix) {
        $config = [];
        foreach ($this->getConfigKeysForProduct() as $key) {
            if (!empty($this->extras[$key])) {
                $config[$key] = $this->extras[$key];
            }
        }
        $config [self::CONFIG_KEY_SERVICE_URL] = $this->getMwsEndpoint($this->amazonSite) . $serviceUrlSuffix;
        return $config;
    }
    /**
     * Builds the array of extra "config" values to pass through to MarketplaceWebService_Client::__construct()
     *
     * @param $serviceUrlSuffix
     * @return array
     */
    public function getConfigForFeedAndReport($serviceUrlSuffix) {
        $config = [];
        foreach ($this->getConfigKeysForFeedAndReport() as $key) {
            if (!empty($this->extras[$key])) {
                $config[$key] = $this->extras[$key];
            }
        }
        $config [self::CONFIG_KEY_SERVICE_URL] = $this->getMwsEndpoint($this->amazonSite) . $serviceUrlSuffix;
        return $config;
    }
    /**
     * Builds the array of extra "config" values to pass through to MWSFinancesService_Client::__construct()
     *
     * @param $serviceUrlSuffix
     * @return array
     */
    public function getConfigForFinance($serviceUrlSuffix) {
        $config = [];
        foreach ($this->getConfigKeysForFinance() as $key) {
            if (!empty($this->extras[$key])) {
                $config[$key] = $this->extras[$key];
            }
        }
        $config [self::CONFIG_KEY_SERVICE_URL] = $this->getMwsEndpoint($this->amazonSite) . $serviceUrlSuffix;
        return $config;
    }
}
