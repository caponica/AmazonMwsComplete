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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 * Cancel Shipment Sample
 */

require_once('.config.inc.php');

/************************************************************************
 * Instantiate Implementation of MWSMerchantFulfillmentService
 *
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/
// More endpoints are listed in the MWS Developer Guide
// North America:
//$serviceUrl = "https://mws.amazonservices.com/MerchantFulfillment/2015-06-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/MerchantFulfillment/2015-06-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/MerchantFulfillment/2015-06-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/MerchantFulfillment/2015-06-01";


 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MWSMerchantFulfillmentService_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);

/************************************************************************
 * Uncomment to try out Mock Service that simulates MWSMerchantFulfillmentService
 * responses without calling MWSMerchantFulfillmentService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MWSMerchantFulfillmentService/Mock tree
 *
 ***********************************************************************/
 // $service = new MWSMerchantFulfillmentService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out
 * sample for Cancel Shipment Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MWSMerchantFulfillmentService_Model_CancelShipment
 $request = new MWSMerchantFulfillmentService_Model_CancelShipmentRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeCancelShipment($service, $request);

/**
  * Get Cancel Shipment Action Sample
  * Gets competitive pricing and related information for a product identified by
  * the MarketplaceId and ASIN.
  *
  * @param MWSMerchantFulfillmentService_Interface $service instance of MWSMerchantFulfillmentService_Interface
  * @param mixed $request MWSMerchantFulfillmentService_Model_CancelShipment or array of parameters
  */

  function invokeCancelShipment(MWSMerchantFulfillmentService_Interface $service, $request)
  {
      try {
        $response = $service->CancelShipment($request);

        echo ("Service Response\n");
        echo ("=============================================================================\n");

        $dom = new DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

     } catch (MWSMerchantFulfillmentService_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }

