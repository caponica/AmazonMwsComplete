<?php
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

/**
 * Create Scheduled Package Sample
 */

require_once('.config.inc.php');

/************************************************************************
 * Instantiate Implementation of MWSEasyShipSectionService
 *
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/
// More endpoints are listed in the MWS Developer Guide
// North America:
//$serviceUrl = "https://mws.amazonservices.com/EasyShip/2018-09-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/EasyShip/2018-09-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/EasyShip/2018-09-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/EasyShip/2018-09-01";


 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MWSEasyShipSectionService_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);

/************************************************************************
 * Uncomment to try out Mock Service that simulates MWSEasyShipSectionService
 * responses without calling MWSEasyShipSectionService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MWSEasyShipSectionService/Mock tree
 *
 ***********************************************************************/
 // $service = new MWSEasyShipSectionService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out
 * sample for Create Scheduled Package Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MWSEasyShipSectionService_Model_CreateScheduledPackage
 $request = new MWSEasyShipSectionService_Model_CreateScheduledPackageRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeCreateScheduledPackage($service, $request);

/**
  * Get Create Scheduled Package Action Sample
  * Gets competitive pricing and related information for a product identified by
  * the MarketplaceId and ASIN.
  *
  * @param MWSEasyShipSectionService_Interface $service instance of MWSEasyShipSectionService_Interface
  * @param mixed $request MWSEasyShipSectionService_Model_CreateScheduledPackage or array of parameters
  */

  function invokeCreateScheduledPackage(MWSEasyShipSectionService_Interface $service, $request)
  {
      try {
        $response = $service->CreateScheduledPackage($request);

        echo ("Service Response\n");
        echo ("=============================================================================\n");

        $dom = new DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

     } catch (MWSEasyShipSectionService_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }

