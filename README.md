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

MWSAuthToken
============

If you're using an MWSAuthToken then you can pass it in via the config:

    $mwsClientPoolUsa->setConfig([
        'auth_token'            => 'YOUR_MWS_AUTH_TOKEN',
        // ... other parameters ...
    ]);

Once set on the ClientPool, the token should be passed through to each Client and used in every API request.

*REQUEST: Please feed back via [github](https://github.com/caponica/AmazonMwsComplete/issues) if this is the best way to 
set and use the MWSAuthToken, and if it all works as expected. I don't used this functionality myself so cannot test it
properly.*

NEW - Logging
=============

The scripts no longer echo messages. Instead they use a Logger which you can define when you instantiate the ClientPool.

See https://github.com/php-fig/log and https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
for more details about setting up a Logger.

A basic Logger (which replicates the old echo behaviour), would look like this:

    # EchoLogger.php

    namespace Your\Path;
    
    use Psr\Log\AbstractLogger;
    
    class EchoLogger extends AbstractLogger
    {
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed  $level
         * @param string $message
         * @param array  $context
         *
         * @return void
         */
        public function log($level, $message, array $context = array())
        {
            echo "$message\n";
        }
    }

You then simply pass an EchoLogger instance into the MwsClientPool constructor:
    
    use CaponicaAmazonMwsComplete\ClientPool\MwsClientPool;
    use Your\Path\EchoLogger;

    $echoLogger = new EchoLogger();
    $mwsClientPoolUsa = new MwsClientPool($echoLogger);


Working with reports
====================

There are domain objects to help with reading reports. Not all reports have been implemented (by a long way!) but feel 
free to implement any that you need to use and submit a PR. The basic structure is to have a `ReportXyz` class related 
to the overall report and a `ReportXyzRecord` class relating to each record (row) in the report.

The basic usage would then look something like:

    $reportFilePath = '/path/to/file.txt';
    $reportType = MwsFeedAndReportClientPack::REPORT_FBA_INVENTORY_AFN;
    $fileHandle = @fopen($reportFilePath, 'r');
    if (!$fileHandle) {
        return "Could not open $reportFilePath to read the report from";
    }

    try {
        while (($lineFromFile = fgets($fileHandle)) !== false) {
            if (!$checkedHeader) {
                BaseMwsReport::validateHeaderRowForReportType($lineFromFile, $reportType);
                $reportRecordClass = BaseMwsReport::convertReportTypeToReportRecordClass($reportType);
                $checkedHeader = true;
                continue;
            }

            $reportRecord = new $reportRecordClass($lineFromFile);
            // do something with the record 
            echo "The SellerSku field value is" . $reportRecord->getSellerSku();
        }
    } catch (InvalidReportHeaderException $e) {
        // Handle the exception, which is thrown if the header is not the expected format
    } catch (InvalidReportRecordException $e) {
        // Handle the exception, which is thrown if the row is not the expected format
    }



Client library versions
=======================

|Library                            |API version|Library version|
|-----------------------------------|-----------|---------------|
|FBAInboundServiceMWS               |2010-10-01 |2016-10-05     |
|FBAInventoryServiceMWS             |2010-10-01 |2014-09-30     |
|FBAOutboundServiceMWS              |2010-10-01 |2016-01-01 *1  |
|MarketplaceWebService              |2009-01-01 |2016-09-21     |
|MarketplaceWebServiceOrders        |2013-09-01 |2018-10-31     |
|MarketplaceWebServiceProducts      |2011-10-01 |2017-03-22     |
|MarketplaceWebServiceSellers       |2011-07-01 |2015-06-18     |
|MWSCartService                     |2014-03-01 |2015-06-18 ??  |
|MWSCustomerService                 |2014-03-01 |2015-06-18 ??  |
|MWSFinancesService                 |2015-05-01 |2018-03-22     |
|MWSMerchantFulfillmentService      |2015-06-01 |2018-10-31     |
|MWSRecommendationsSectionService   |2013-04-01 |2014-10-01 *1  |
|MWSSubscriptionsService            |2013-07-01 |2013-11-01 *1  |

?? Amazon has deprecated these APIs, so they may be removed from this package in future.

*1 These libraries used to show later Library versions (dates) but this is what they say in the current Client.php files

The [Off-Amazon Payments API](https://developer.amazonservices.co.uk/doc/offamazonpayments/offamazonpayments/v20130101/php.html)
is not currently included, since it is not directly linked to MWS activity.
[Off-Amazon Payments Technical Reference](https://payments.amazon.co.uk/developer/documentation)
