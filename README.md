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

Client library versions
=======================

|Library                            |API version|Library version|
|-----------------------------------|-----------|---------------|
|FBAInboundServiceMWS               |2010-10-01 |2016-04-06     |
|FBAOutboundServiceMWS              |2010-10-01 |2016-02-01     |
|MarketplaceWebService              |2009-01-01 |2015-06-18     |
|MarketplaceWebServiceOrders        |2013-09-01 |2015-09-24     |
|MarketplaceWebServiceProducts      |2011-10-01 |2015-09-01     |
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
