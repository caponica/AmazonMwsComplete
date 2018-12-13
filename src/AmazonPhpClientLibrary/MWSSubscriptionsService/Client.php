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
 *  @see MWSSubscriptionsService_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php');

/**
 * MWSSubscriptionsService_Client is an implementation of MWSSubscriptionsService
 *
 */
class MWSSubscriptionsService_Client implements MWSSubscriptionsService_Interface
{

    const SERVICE_VERSION = '2013-07-01';
    const MWS_CLIENT_VERSION = '2013-11-01';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => null,
                               'UserAgent' => 'MWSSubscriptionsService PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'ProxyUsername' => null,
                               'ProxyPassword' => null,
                               'MaxErrorRetry' => 3,
                               'Headers' => array()
                               );


    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_CreateSubscription request or MWSSubscriptionsService_Model_CreateSubscription object itself
     * @see MWSSubscriptionsService_Model_CreateSubscriptionInput
     * @return MWSSubscriptionsService_Model_CreateSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function createSubscription($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_CreateSubscriptionInput)) {
            require_once (dirname(__FILE__) . '/Model/CreateSubscriptionInput.php');
            $request = new MWSSubscriptionsService_Model_CreateSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateSubscription';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/CreateSubscriptionResponse.php');
        $response = MWSSubscriptionsService_Model_CreateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert CreateSubscriptionInput to name value pairs
     */
    private function _convertCreateSubscription($request) {

        $parameters = array();
        $parameters['Action'] = 'CreateSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSubscription()) {
            $SubscriptionCreateSubscriptionInput = $request->getSubscription();
            foreach  ($SubscriptionCreateSubscriptionInput->getNotificationType() as $NotificationTypeSubscriptionIndex => $NotificationTypeSubscription) {
                $parameters['Subscription' . '.' . 'NotificationType' . '.'  . ($NotificationTypeSubscriptionIndex + 1)] =  $NotificationTypeSubscription;
            }
        }

        return $parameters;
    }


    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_DeleteSubscription request or MWSSubscriptionsService_Model_DeleteSubscription object itself
     * @see MWSSubscriptionsService_Model_DeleteSubscriptionInput
     * @return MWSSubscriptionsService_Model_DeleteSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function deleteSubscription($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_DeleteSubscriptionInput)) {
            require_once (dirname(__FILE__) . '/Model/DeleteSubscriptionInput.php');
            $request = new MWSSubscriptionsService_Model_DeleteSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeleteSubscription';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/DeleteSubscriptionResponse.php');
        $response = MWSSubscriptionsService_Model_DeleteSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert DeleteSubscriptionInput to name value pairs
     */
    private function _convertDeleteSubscription($request) {

        $parameters = array();
        $parameters['Action'] = 'DeleteSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetNotificationType()) {
            $parameters['NotificationType'] =  $request->getNotificationType();
        }
        if ($request->isSetDestination()) {
            $DestinationDeleteSubscriptionInput = $request->getDestination();
            foreach  ($DestinationDeleteSubscriptionInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }


    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_DeregisterDestination request or MWSSubscriptionsService_Model_DeregisterDestination object itself
     * @see MWSSubscriptionsService_Model_DeregisterDestinationInput
     * @return MWSSubscriptionsService_Model_DeregisterDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function deregisterDestination($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_DeregisterDestinationInput)) {
            require_once (dirname(__FILE__) . '/Model/DeregisterDestinationInput.php');
            $request = new MWSSubscriptionsService_Model_DeregisterDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeregisterDestination';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/DeregisterDestinationResponse.php');
        $response = MWSSubscriptionsService_Model_DeregisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert DeregisterDestinationInput to name value pairs
     */
    private function _convertDeregisterDestination($request) {

        $parameters = array();
        $parameters['Action'] = 'DeregisterDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationDeregisterDestinationInput = $request->getDestination();
            foreach  ($DestinationDeregisterDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }


    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_GetSubscription request or MWSSubscriptionsService_Model_GetSubscription object itself
     * @see MWSSubscriptionsService_Model_GetSubscriptionInput
     * @return MWSSubscriptionsService_Model_GetSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function getSubscription($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_GetSubscriptionInput)) {
            require_once (dirname(__FILE__) . '/Model/GetSubscriptionInput.php');
            $request = new MWSSubscriptionsService_Model_GetSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetSubscription';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetSubscriptionResponse.php');
        $response = MWSSubscriptionsService_Model_GetSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetSubscriptionInput to name value pairs
     */
    private function _convertGetSubscription($request) {

        $parameters = array();
        $parameters['Action'] = 'GetSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetNotificationType()) {
            $parameters['NotificationType'] =  $request->getNotificationType();
        }
        if ($request->isSetDestination()) {
            $DestinationGetSubscriptionInput = $request->getDestination();
            foreach  ($DestinationGetSubscriptionInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }


    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_ListRegisteredDestinations request or MWSSubscriptionsService_Model_ListRegisteredDestinations object itself
     * @see MWSSubscriptionsService_Model_ListRegisteredDestinationsInput
     * @return MWSSubscriptionsService_Model_ListRegisteredDestinationsResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function listRegisteredDestinations($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_ListRegisteredDestinationsInput)) {
            require_once (dirname(__FILE__) . '/Model/ListRegisteredDestinationsInput.php');
            $request = new MWSSubscriptionsService_Model_ListRegisteredDestinationsInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRegisteredDestinations';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/ListRegisteredDestinationsResponse.php');
        $response = MWSSubscriptionsService_Model_ListRegisteredDestinationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListRegisteredDestinationsInput to name value pairs
     */
    private function _convertListRegisteredDestinations($request) {

        $parameters = array();
        $parameters['Action'] = 'ListRegisteredDestinations';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }


    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_ListSubscriptions request or MWSSubscriptionsService_Model_ListSubscriptions object itself
     * @see MWSSubscriptionsService_Model_ListSubscriptionsInput
     * @return MWSSubscriptionsService_Model_ListSubscriptionsResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function listSubscriptions($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_ListSubscriptionsInput)) {
            require_once (dirname(__FILE__) . '/Model/ListSubscriptionsInput.php');
            $request = new MWSSubscriptionsService_Model_ListSubscriptionsInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListSubscriptions';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/ListSubscriptionsResponse.php');
        $response = MWSSubscriptionsService_Model_ListSubscriptionsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListSubscriptionsInput to name value pairs
     */
    private function _convertListSubscriptions($request) {

        $parameters = array();
        $parameters['Action'] = 'ListSubscriptions';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }


    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_RegisterDestination request or MWSSubscriptionsService_Model_RegisterDestination object itself
     * @see MWSSubscriptionsService_Model_RegisterDestinationInput
     * @return MWSSubscriptionsService_Model_RegisterDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function registerDestination($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_RegisterDestinationInput)) {
            require_once (dirname(__FILE__) . '/Model/RegisterDestinationInput.php');
            $request = new MWSSubscriptionsService_Model_RegisterDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'RegisterDestination';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/RegisterDestinationResponse.php');
        $response = MWSSubscriptionsService_Model_RegisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert RegisterDestinationInput to name value pairs
     */
    private function _convertRegisterDestination($request) {

        $parameters = array();
        $parameters['Action'] = 'RegisterDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationRegisterDestinationInput = $request->getDestination();
            foreach  ($DestinationRegisterDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }


    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_SendTestNotificationToDestination request or MWSSubscriptionsService_Model_SendTestNotificationToDestination object itself
     * @see MWSSubscriptionsService_Model_SendTestNotificationToDestinationInput
     * @return MWSSubscriptionsService_Model_SendTestNotificationToDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function sendTestNotificationToDestination($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_SendTestNotificationToDestinationInput)) {
            require_once (dirname(__FILE__) . '/Model/SendTestNotificationToDestinationInput.php');
            $request = new MWSSubscriptionsService_Model_SendTestNotificationToDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'SendTestNotificationToDestination';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/SendTestNotificationToDestinationResponse.php');
        $response = MWSSubscriptionsService_Model_SendTestNotificationToDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert SendTestNotificationToDestinationInput to name value pairs
     */
    private function _convertSendTestNotificationToDestination($request) {

        $parameters = array();
        $parameters['Action'] = 'SendTestNotificationToDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationSendTestNotificationToDestinationInput = $request->getDestination();
            foreach  ($DestinationSendTestNotificationToDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }


    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_UpdateSubscription request or MWSSubscriptionsService_Model_UpdateSubscription object itself
     * @see MWSSubscriptionsService_Model_UpdateSubscriptionInput
     * @return MWSSubscriptionsService_Model_UpdateSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function updateSubscription($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_UpdateSubscriptionInput)) {
            require_once (dirname(__FILE__) . '/Model/UpdateSubscriptionInput.php');
            $request = new MWSSubscriptionsService_Model_UpdateSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateSubscription';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/UpdateSubscriptionResponse.php');
        $response = MWSSubscriptionsService_Model_UpdateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert UpdateSubscriptionInput to name value pairs
     */
    private function _convertUpdateSubscription($request) {

        $parameters = array();
        $parameters['Action'] = 'UpdateSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSubscription()) {
            $SubscriptionUpdateSubscriptionInput = $request->getSubscription();
            foreach  ($SubscriptionUpdateSubscriptionInput->getNotificationType() as $NotificationTypeSubscriptionIndex => $NotificationTypeSubscription) {
                $parameters['Subscription' . '.' . 'NotificationType' . '.'  . ($NotificationTypeSubscriptionIndex + 1)] =  $NotificationTypeSubscription;
            }
        }

        return $parameters;
    }


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSSubscriptionsService_Model_GetServiceStatus request or MWSSubscriptionsService_Model_GetServiceStatus object itself
     * @see MWSSubscriptionsService_Model_GetServiceStatusRequest
     * @return MWSSubscriptionsService_Model_GetServiceStatusResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof MWSSubscriptionsService_Model_GetServiceStatusRequest)) {
            require_once (dirname(__FILE__) . '/Model/GetServiceStatusRequest.php');
            $request = new MWSSubscriptionsService_Model_GetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        $response = MWSSubscriptionsService_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request) {

        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }

        return $parameters;
    }



    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        if (PHP_VERSION_ID < 50600) {
            iconv_set_encoding('output_encoding', 'UTF-8');
            iconv_set_encoding('input_encoding', 'UTF-8');
            iconv_set_encoding('internal_encoding', 'UTF-8');
        } else {
            ini_set('default_charset', 'UTF-8');
        }

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }

    private function setUserAgentHeader(
        $applicationName,
        $applicationVersion,
        $attributes = null) {

        if (is_null($attributes)) {
            $attributes = array ();
        }

        $this->_config['UserAgent'] = 
            $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null) {
        if (is_null($applicationName) || $applicationName === "") {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent = 
            $this->quoteApplicationName($applicationName)
            . '/'
            . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for $key cannot be null or empty.");
            }

            $userAgent .= '; '
                . $this->quoteAttributeName($key)
                . '='
                . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

   /**
    * Collapse multiple whitespace characters into a single ' ' character.
    * @param $s
    * @return string
    */
   private function collapseWhitespace($s) {
       return preg_replace('/ {2,}|\s/', ' ', $s);
   }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\//', '\\/', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);

        return $quotedString;
    }


    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                require_once (dirname(__FILE__) . '/Exception.php');
                throw new MWSSubscriptionsService_Exception(
                    array ('ErrorCode' => 'InvalidServiceURL',
                           'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status = $response['Status'];
                if ($status == 200) {
                    return array('ResponseBody' => $response['ResponseBody'],
                      'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'],
                    $status, $response['ResponseHeaderMetadata']);
            }
        } catch (MWSSubscriptionsService_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            require_once (dirname(__FILE__) . '/Exception.php');
            throw new MWSSubscriptionsService_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if ($xmlBody !== false) {  // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }

        require_once (dirname(__FILE__) . '/Exception.php');
        return new MWSSubscriptionsService_Exception($exProps);
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
                $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach($allHeaders as $name => $val) {
            $str = $name . ": ";
            if(isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1)
        {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }
        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null)
        {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = "";
        $response = curl_exec($ch);

        if($response === false) {
            require_once (dirname(__FILE__) . '/Exception.php');
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            curl_close($ch);
            throw new MWSSubscriptionsService_Exception($exProps);
        }

        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }
    
    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in 
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     */
    private function _extractHeadersAndBody($response){
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; 
                $count < count($responseComponents) && $body == null; 
                $count++) {
            
            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);
            
            if($responseStatus != null && 
                    $this->_httpHeadersHaveContent($headers)){
                
                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }
        
        //If the body is null here then we were unable to parse the response and will throw an exception
        if($body == null){
            require_once (dirname(__FILE__) . '/Exception.php');
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new MWSSubscriptionsService_Exception($exProps);
        }

        return array(
                'Status' => $responseStatus, 
                'ResponseBody' => $body, 
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }
    
    /**
     * parse the status line of a header string for the proper format and
     * return the status code
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     */
    private function _extractHttpStatusCode($headers){
    	$statusCode = null; 
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
        	//The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2]; 
        }
        return $statusCode;
    }
    
    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header
     */
    private function _httpHeadersHaveContent($headers){
        return (1 === preg_match("/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|$)/", $headers) ||
                1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|$)/i", $headers));
    }
    
    /**
    *  extract a ResponseHeaderMetadata object from the raw headers
    */
    private function _extractResponseHeaderMetadata($rawHeaders){
        $inputHeaders = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers = array();
        $headers['x-mws-request-id'] = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp'] = null;
        $headers['x-mws-quota-max'] = null;
        $headers['x-mws-quota-remaining'] = null;
        $headers['x-mws-quota-resetsOn'] = null;

        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode (': ', $currentHeader);
            if (isset($keyValue[1])) {
                list ($key, $value) = $keyValue;
                if (isset($headers[$key]) && $headers[$key]!==null) {
                    $headers[$key] = $headers[$key] . "," . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }
 
        require_once(dirname(__FILE__) . '/Model/ResponseHeaderMetadata.php');
        return new MWSSubscriptionsService_Model_ResponseHeaderMetadata(
          $headers['x-mws-request-id'],
          $headers['x-mws-response-context'],
          $headers['x-mws-timestamp'],
          $headers['x-mws-quota-max'],
          $headers['x-mws-quota-remaining'],
          $headers['x-mws-quota-resetsOn']);
    }

    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     * @param $ch curl handle
     */
    protected function setSSLCurlOptions($ch) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    }

    /**
     * Exponential sleep on failed request
     *
     * @param retries current retry
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000);
            usleep($delay);
            return true;
        } 
        return false;
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (2 == $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
        return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }

    /**
     * Formats date as ISO 8601 timestamp
     */
    private function getFormattedTimestamp($dateTime)
    {
        return $dateTime->format(DATE_ISO8601);
    }

}
