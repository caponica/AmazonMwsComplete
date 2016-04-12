<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:38 GMT 2015
 */

interface  MWSCartService_Interface
{

    /**
     * Get Carts
     * Returns cart information for
     *         one or more customers, given a seller-directed customer ID.
     *         There is a maximum number of customer IDs supported per request.
     *         See service documentation for that limit.
     *
     * @param mixed $request array of parameters for MWSCartService_Model_GetCarts request or MWSCartService_Model_GetCarts object itself
     * @see MWSCartService_Model_GetCartsRequest
     * @return MWSCartService_Model_GetCartsResponse
     *
     * @throws MWSCartService_Exception
     */
    public function getCarts($request);


    /**
     * List Carts
     * Returns a list of customer records based on the criteria in the
     *         request. In the case there are more cart results than can be returned
     *         in a single response, a next token is provided which can be used
     *         to obtain more results via ListCartsByNextToken.
     *
     * @param mixed $request array of parameters for MWSCartService_Model_ListCarts request or MWSCartService_Model_ListCarts object itself
     * @see MWSCartService_Model_ListCartsRequest
     * @return MWSCartService_Model_ListCartsResponse
     *
     * @throws MWSCartService_Exception
     */
    public function listCarts($request);


    /**
     * List Carts By Next Token
     * Returns the next page of results based on the next token given from a previous call to
     *         ListCarts or ListCartsByNextToken. The output includes a next token
     *         that can be used to obtain the next page of results, if there are any.
     *
     * @param mixed $request array of parameters for MWSCartService_Model_ListCartsByNextToken request or MWSCartService_Model_ListCartsByNextToken object itself
     * @see MWSCartService_Model_ListCartsByNextTokenRequest
     * @return MWSCartService_Model_ListCartsByNextTokenResponse
     *
     * @throws MWSCartService_Exception
     */
    public function listCartsByNextToken($request);


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSCartService_Model_GetServiceStatus request or MWSCartService_Model_GetServiceStatus object itself
     * @see MWSCartService_Model_GetServiceStatusRequest
     * @return MWSCartService_Model_GetServiceStatusResponse
     *
     * @throws MWSCartService_Exception
     */
    public function getServiceStatus($request);

}