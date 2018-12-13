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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

interface  MarketplaceWebServiceSellers_Interface
{

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *         takes no input.
     *         All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceSellers_Model_GetServiceStatus request or MarketplaceWebServiceSellers_Model_GetServiceStatus object itself
     * @see MarketplaceWebServiceSellers_Model_GetServiceStatusRequest
     * @return MarketplaceWebServiceSellers_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function getServiceStatus($request);


    /**
     * List Marketplace Participations
     * Returns a list of marketplaces that the seller submitting the request can sell in, 
     *         and a list of participations that include seller-specific information in that marketplace.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceSellers_Model_ListMarketplaceParticipations request or MarketplaceWebServiceSellers_Model_ListMarketplaceParticipations object itself
     * @see MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsRequest
     * @return MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function listMarketplaceParticipations($request);


    /**
     * List Marketplace Participations By Next Token
     * Returns the next page of marketplaces and participations using the NextToken value 
     *         that was returned by your previous request to either ListMarketplaceParticipations or
     *         ListMarketplaceParticipationsByNextToken.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsByNextToken request or MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsByNextToken object itself
     * @see MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsByNextTokenRequest
     * @return MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsByNextTokenResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function listMarketplaceParticipationsByNextToken($request);

}