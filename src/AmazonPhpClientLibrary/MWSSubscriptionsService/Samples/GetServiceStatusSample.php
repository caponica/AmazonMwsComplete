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
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2013-11-01
 * Generated: Tue Oct 02 08:13:42 PDT 2018
 */

/**
 * Get Service Status Sample
 */

require_once('.config.inc.php');

/************************************************************************
 * Instantiate Implementation of MWSSubscriptionsService
 *
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/
// More endpoints are listed in the MWS Developer Guide
// North America:
//$serviceUrl = "https://mws.amazonservices.com/Subscriptions/2013-07-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/Subscriptions/2013-07-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/Subscriptions/2013-07-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/Subscriptions/2013-07-01";


 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MWSSubscriptionsService_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);

/************************************************************************
 * Uncomment to try out Mock Service that simulates MWSSubscriptionsService
 * responses without calling MWSSubscriptionsService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MWSSubscriptionsService/Mock tree
 *
 ***********************************************************************/
 // $service = new MWSSubscriptionsService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out
 * sample for Get Service Status Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MWSSubscriptionsService_Model_GetServiceStatus
 $request = new MWSSubscriptionsService_Model_GetServiceStatusRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeGetServiceStatus($service, $request);

/**
  * Get Get Service Status Action Sample
  * Gets competitive pricing and related information for a product identified by
  * the MarketplaceId and ASIN.
  *
  * @param MWSSubscriptionsService_Interface $service instance of MWSSubscriptionsService_Interface
  * @param mixed $request MWSSubscriptionsService_Model_GetServiceStatus or array of parameters
  */

  function invokeGetServiceStatus(MWSSubscriptionsService_Interface $service, $request)
  {
      try {
        $response = $service->GetServiceStatus($request);

        echo ("Service Response\n");
        echo ("=============================================================================\n");

        $dom = new DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

     } catch (MWSSubscriptionsService_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }

