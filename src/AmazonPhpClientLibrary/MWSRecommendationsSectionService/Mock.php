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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

/**
 *  @see MWSRecommendationsSectionService_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class MWSRecommendationsSectionService_Mock implements MWSRecommendationsSectionService_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller. 
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendations request or MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendations object itself
     * @see MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendations
     * @return MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function getLastUpdatedTimeForRecommendations($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetLastUpdatedTimeForRecommendationsResponse.php');
        return MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsResponse::fromXML($this->_invoke('GetLastUpdatedTimeForRecommendations'));
    }

    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_ListRecommendations request or MWSRecommendationsSectionService_Model_ListRecommendations object itself
     * @see MWSRecommendationsSectionService_Model_ListRecommendations
     * @return MWSRecommendationsSectionService_Model_ListRecommendationsResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function listRecommendations($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListRecommendationsResponse.php');
        return MWSRecommendationsSectionService_Model_ListRecommendationsResponse::fromXML($this->_invoke('ListRecommendations'));
    }

    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_ListRecommendationsByNextToken request or MWSRecommendationsSectionService_Model_ListRecommendationsByNextToken object itself
     * @see MWSRecommendationsSectionService_Model_ListRecommendationsByNextToken
     * @return MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function listRecommendationsByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListRecommendationsByNextTokenResponse.php');
        return MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse::fromXML($this->_invoke('ListRecommendationsByNextToken'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_GetServiceStatus request or MWSRecommendationsSectionService_Model_GetServiceStatus object itself
     * @see MWSRecommendationsSectionService_Model_GetServiceStatus
     * @return MWSRecommendationsSectionService_Model_GetServiceStatusResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MWSRecommendationsSectionService_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
