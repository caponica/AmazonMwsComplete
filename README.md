Complete Amazon MWS API
=======================

This is an attempt to simplify access to the full range of MWS API calls from a single package.

Installation
============

Into a symfony2 project
-----------------------

Add the reference into your composer.json : 

    "caponica/amazon-mws-complete": "dev-master"

Use in controller :

     $client = new \MwsProductClient(/* args */);

Accessing the API
=================

You can access each API directly if you want to:

    use CaponicaAmazonMwsComplete\AmazonClient\MwsProductClient;

    $mwsProductClientUsa = new MwsProductClient(
        'YOUR_ACCESS_KEY',
        'YOUR_SECRET_KEY',
        'YOUR_APP_NAME',
        'YOUR_APP_VERSION',
        [ 'ServiceURL' => 'https://mws.amazonservices.com/Products/2011-10-01' ]
    );

    $mwsResponse = $mwsProductClientUsa->getCompetitivePricingForASIN([
        'SellerId'          => 'YOUR_SELLER_ID',
        'MarketplaceId'     => 'MARKETPLACE_ID',
        'ASINList'          => array('ASIN' => 'YOUR_ASIN_SEARCH'),
    ]);
    // ... do something with the response ...


However, there is a better way! The MwsClientPool encapsulates all configuration shared between all different Amazon
API services. So create that once (for each marketplace/seller combination you want to work with) and then retrieve
'ClientPacks' from the pool. A ClientPack includes configuration for a single Seller and Marketplace and these can be
pre-filled into API calls by using the callXyz() methods (e.g. callGetCompetitivePricingForASIN() to call the API's
getCompetitivePricingForASIN() method. This makes your API calls much cleaner:

    use CaponicaAmazonMwsComplete\ClientPool\MwsClientPool;
    use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;

    $mwsClientPoolUsa = new MwsClientPool();
    $mwsClientPoolUsa->setConfig([
        'amazon_site'           => MwsClientPoolConfig::SITE_US
        'access_key'            => 'YOUR_ACCESS_KEY'
        'secret_key'            => 'YOUR_SECRET_KEY'
        'application_name'      => 'YOUR_APP_NAME'
        'application_version'   => 'YOUR_APP_VERSION'
        'seller_id'             => 'YOUR_SELLER_ID'
    ]);

    $productClientPackUsa = $mwsClientPoolUsa->getProductClientPack();
    $mwsResponse = $productClientPackUsa->callGetCompetitivePricingForASIN('YOUR_ASIN_SEARCH');

There are also some helper methods that return objects (or arrays of objects) that are easier to work with than raw
MWS responses:

    /** @var MwsCompetitivePricing[] $compPricings */
    $compPricings = $productClientPackUsa->retrieveCompetitivePricingForASIN('YOUR_ASIN_SEARCH');
    foreach ($compPricings as $compPricing) {
        echo $compPricing->asin;
    }


Client library versions
=======================

|Library                            |API version|Library version|
|-----------------------------------|-----------|---------------|
|FBAInboundServiceMWS               |2010-10-01 |2016-04-06     |
|FBAOutboundServiceMWS              |2010-10-01 |2016-02-01     |
|MarketplaceWebService              |2009-01-01 |2015-06-18     |
|MarketplaceWebServiceOrders        |2013-09-01 |2015-09-24     |
|MarketplaceWebServiceProducts      |2011-10-01 |2016-06-01     |
|MarketplaceWebServiceSellers       |2011-07-01 |2015-06-18     |
|MWSCartService                     |2014-03-01 |2015-06-18     |
|MWSCustomerService                 |2014-03-01 |2015-06-18     |
|MWSFinancesService                 |2015-05-01 |2015-09-03     |
|MWSMerchantFulfillmentService      |2015-06-01 |2016-03-30     |
|MWSRecommendationsSectionService   |2013-04-01 |2015-06-18     |
|MWSSubscriptionsService            |2013-07-01 |2015-06-18     |

The [Off-Amazon Payments API](https://developer.amazonservices.co.uk/doc/offamazonpayments/offamazonpayments/v20130101/php.html)
is not currently included, since it is not directly linked to MWS activity.
[Off-Amazon Payments Technical Reference](https://payments.amazon.co.uk/developer/documentation)
