Complete Amazon MWS API
=======================

This is an attempt to simplify access to the full range of MWS API calls from a single bundle.

Installation
============

Into a symfony2 project
-----------------------

Add the reference into your composer.json : 

    "caponica/amazon-mws-complete": "dev-master"

Use in controller :

     $client = new \MwsSearchClient(/* args */);

Client library versions
=======================

|Library  |API version|Library version|
|---------|-----------|---------------|
|MarketplaceWebService         |2009-01-01 |2015-06-18|
|MarketplaceWebServiceProducts |2011-10-01 |2015-09-01|
|MWSCartService                |2014-03-01 |2015-03-12|
