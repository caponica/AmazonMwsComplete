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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 * List Financial Event Groups Sample
 */

require_once('.config.inc.php');

/************************************************************************
 * Instantiate Implementation of MWSFinancesService
 *
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/
// More endpoints are listed in the MWS Developer Guide
// North America:
//$serviceUrl = "https://mws.amazonservices.com/Finances/2015-05-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/Finances/2015-05-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/Finances/2015-05-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/Finances/2015-05-01";


 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MWSFinancesService_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);

/************************************************************************
 * Uncomment to try out Mock Service that simulates MWSFinancesService
 * responses without calling MWSFinancesService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MWSFinancesService/Mock tree
 *
 ***********************************************************************/
 // $service = new MWSFinancesService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out
 * sample for List Financial Event Groups Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MWSFinancesService_Model_ListFinancialEventGroups
 $request = new MWSFinancesService_Model_ListFinancialEventGroupsRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeListFinancialEventGroups($service, $request);

/**
  * Get List Financial Event Groups Action Sample
  * Gets competitive pricing and related information for a product identified by
  * the MarketplaceId and ASIN.
  *
  * @param MWSFinancesService_Interface $service instance of MWSFinancesService_Interface
  * @param mixed $request MWSFinancesService_Model_ListFinancialEventGroups or array of parameters
  */

  function invokeListFinancialEventGroups(MWSFinancesService_Interface $service, $request)
  {
      try {
        $response = $service->ListFinancialEventGroups($request);

        echo ("Service Response\n");
        echo ("=============================================================================\n");

        $dom = new DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

     } catch (MWSFinancesService_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }

