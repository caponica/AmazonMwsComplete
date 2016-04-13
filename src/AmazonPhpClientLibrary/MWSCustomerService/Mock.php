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
 * @package  MWS Customer Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:32:14 GMT 2015
 */

/**
 *  @see MWSCustomerService_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class MWSCustomerService_Mock implements MWSCustomerService_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Customers By Customer Id
     * Returns customer information for
     *         one or more customers, given a seller-directed customer ID.
     *         There is a maximum number of customer IDs supported per request.
     *         See service documentation for that limit.
     *
     * @param mixed $request array of parameters for MWSCustomerService_Model_GetCustomersByCustomerId request or MWSCustomerService_Model_GetCustomersByCustomerId object itself
     * @see MWSCustomerService_Model_GetCustomersByCustomerId
     * @return MWSCustomerService_Model_GetCustomersByCustomerIdResponse
     *
     * @throws MWSCustomerService_Exception
     */
    public function getCustomersByCustomerId($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetCustomersByCustomerIdResponse.php');
        return MWSCustomerService_Model_GetCustomersByCustomerIdResponse::fromXML($this->_invoke('GetCustomersByCustomerId'));
    }

    /**
     * Get Customers For Customer Id
     * Returns customer information for
     *         one or more customers, given a seller-directed customer ID.
     *         There is a maximum number of customer IDs supported per request.
     *         See service documentation for that limit.
     *
     * @param mixed $request array of parameters for MWSCustomerService_Model_GetCustomersForCustomerId request or MWSCustomerService_Model_GetCustomersForCustomerId object itself
     * @see MWSCustomerService_Model_GetCustomersForCustomerId
     * @return MWSCustomerService_Model_GetCustomersForCustomerIdResponse
     *
     * @throws MWSCustomerService_Exception
     */
    public function getCustomersForCustomerId($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetCustomersForCustomerIdResponse.php');
        return MWSCustomerService_Model_GetCustomersForCustomerIdResponse::fromXML($this->_invoke('GetCustomersForCustomerId'));
    }

    /**
     * List Customers
     * Returns a (potentially
     *         paginated) list of customer records based on the criteria in the
     *         request. The result will be at most a single page of results
     *         plus a next token that can be used to obtain the next page of
     *         results, if any.
     *
     * @param mixed $request array of parameters for MWSCustomerService_Model_ListCustomers request or MWSCustomerService_Model_ListCustomers object itself
     * @see MWSCustomerService_Model_ListCustomers
     * @return MWSCustomerService_Model_ListCustomersResponse
     *
     * @throws MWSCustomerService_Exception
     */
    public function listCustomers($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListCustomersResponse.php');
        return MWSCustomerService_Model_ListCustomersResponse::fromXML($this->_invoke('ListCustomers'));
    }

    /**
     * List Customers By Next Token
     * Returns the next page of results
     *         based on the next token given from a previous call to
     *         ListCustomers or ListCustomersByNextToken, plus a next token
     *         that can be used to obtain the next page of results, if any.
     *
     * @param mixed $request array of parameters for MWSCustomerService_Model_ListCustomersByNextToken request or MWSCustomerService_Model_ListCustomersByNextToken object itself
     * @see MWSCustomerService_Model_ListCustomersByNextToken
     * @return MWSCustomerService_Model_ListCustomersByNextTokenResponse
     *
     * @throws MWSCustomerService_Exception
     */
    public function listCustomersByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListCustomersByNextTokenResponse.php');
        return MWSCustomerService_Model_ListCustomersByNextTokenResponse::fromXML($this->_invoke('ListCustomersByNextToken'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSCustomerService_Model_GetServiceStatus request or MWSCustomerService_Model_GetServiceStatus object itself
     * @see MWSCustomerService_Model_GetServiceStatus
     * @return MWSCustomerService_Model_GetServiceStatusResponse
     *
     * @throws MWSCustomerService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MWSCustomerService_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
