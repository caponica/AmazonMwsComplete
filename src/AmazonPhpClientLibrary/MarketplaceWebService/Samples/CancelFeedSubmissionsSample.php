<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 
 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 * Cancel Feed Submissions  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
* Uncomment to configure the client instance. Configuration settings
* are:
*
* - MWS endpoint URL
* - Proxy host and port.
* - MaxErrorRetry.
***********************************************************************/
// IMPORTANT: Uncomment the approiate line for the country you wish to
// sell in:
// United States:
//$serviceUrl = "https://mws.amazonservices.com";
// United Kingdom
//$serviceUrl = "https://mws.amazonservices.co.uk";
// Germany
//$serviceUrl = "https://mws.amazonservices.de";
// France
//$serviceUrl = "https://mws.amazonservices.fr";
// Italy
//$serviceUrl = "https://mws.amazonservices.it";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn";
// Canada
//$serviceUrl = "https://mws.amazonservices.ca";
// India
//$serviceUrl = "https://mws.amazonservices.in";
 
$config = array (
  'ServiceURL' => $serviceUrl,
  'ProxyHost' => null,
  'ProxyPort' => -1,
  'MaxErrorRetry' => 3,
);

/************************************************************************
 * Instantiate Implementation of MarketplaceWebService
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new MarketplaceWebService_Client(
     AWS_ACCESS_KEY_ID, 
     AWS_SECRET_ACCESS_KEY, 
     $config,
     APPLICATION_NAME,
     APPLICATION_VERSION);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates MarketplaceWebService
 * responses without calling MarketplaceWebService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MarketplaceWebService/Mock tree
 *
 ***********************************************************************/
 // $service = new MarketplaceWebService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Cancel Feed Submissions Action
 ***********************************************************************/
// @TODO: set request. Action can be passed as MarketplaceWebService_Model_CancelFeedSubmissionsRequest
// object or array of parameters
 
//Request objects can be constructed with an array of parameters.
//$options = array (
//  'Merchant' => MERCHANT_ID,
//  'FeedSubmissionIdList' => array ('Id' => '<Feed Submission Id>'),
//  'MWSAuthToken' => '<MWS Auth Token>', // Optional
//);
//
//$request = new MarketplaceWebService_Model_CancelFeedSubmissionsRequest($options);

// Or the request can be constructed like
//$request = new MarketplaceWebService_Model_CancelFeedSubmissionsRequest();
//$request->setMerchant(MERCHANT_ID);
//
//$idList = new MarketplaceWebService_Model_IdList();
//$request->setFeedSubmissionIdList($idList->withId('<Feed Submission Id>'));
//$request->setMWSAuthToken('<MWS Auth Token>'); // Optional
// 
invokeCancelFeedSubmissions($service, $request);
                                                    
/**
  * Cancel Feed Submissions Action Sample
  * cancels feed submissions - by default all of the submissions of the
  * last 30 days that have not started processing
  *   
  * @param MarketplaceWebService_Interface $service instance of MarketplaceWebService_Interface
  * @param mixed $request MarketplaceWebService_Model_CancelFeedSubmissions or array of parameters
  */
  function invokeCancelFeedSubmissions(MarketplaceWebService_Interface $service, $request) 
  {
      try {
              $response = $service->cancelFeedSubmissions($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CancelFeedSubmissionsResponse\n");
                if ($response->isSetCancelFeedSubmissionsResult()) { 
                    echo("            CancelFeedSubmissionsResult\n");
                    $cancelFeedSubmissionsResult = $response->getCancelFeedSubmissionsResult();
                    if ($cancelFeedSubmissionsResult->isSetCount()) 
                    {
                        echo("                Count\n");
                        echo("                    " . $cancelFeedSubmissionsResult->getCount() . "\n");
                    }
                    $feedSubmissionInfoList = $cancelFeedSubmissionsResult->getFeedSubmissionInfoList();
                    foreach ($feedSubmissionInfoList as $feedSubmissionInfo) {
                        echo("                FeedSubmissionInfo\n");
                        if ($feedSubmissionInfo->isSetFeedSubmissionId()) 
                        {
                            echo("                    FeedSubmissionId\n");
                            echo("                        " . $feedSubmissionInfo->getFeedSubmissionId() . "\n");
                        }
                        if ($feedSubmissionInfo->isSetFeedType()) 
                        {
                            echo("                    FeedType\n");
                            echo("                        " . $feedSubmissionInfo->getFeedType() . "\n");
                        }
                        if ($feedSubmissionInfo->isSetSubmittedDate()) 
                        {
                            echo("                    SubmittedDate\n");
                            echo("                        " . $feedSubmissionInfo->getSubmittedDate()->format(DATE_FORMAT) . "\n");
                        }
                        if ($feedSubmissionInfo->isSetFeedProcessingStatus()) 
                        {
                            echo("                    FeedProcessingStatus\n");
                            echo("                        " . $feedSubmissionInfo->getFeedProcessingStatus() . "\n");
                        }
                        if ($feedSubmissionInfo->isSetStartedProcessingDate()) 
                        {
                            echo("                    StartedProcessingDate\n");
                            echo("                        " . $feedSubmissionInfo->getStartedProcessingDate()->format(DATE_FORMAT) . "\n");
                        }
                        if ($feedSubmissionInfo->isSetCompletedProcessingDate()) 
                        {
                            echo("                    CompletedProcessingDate\n");
                            echo("                        " . $feedSubmissionInfo->getCompletedProcessingDate()->format(DATE_FORMAT) . "\n");
                        }
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

                echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
     } catch (MarketplaceWebService_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
         echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }
?>

                                                    
