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

interface  MWSRecommendationsSectionService_Interface
{

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller. 
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendations request or MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendations object itself
     * @see MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsRequest
     * @return MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function getLastUpdatedTimeForRecommendations($request);


    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_ListRecommendations request or MWSRecommendationsSectionService_Model_ListRecommendations object itself
     * @see MWSRecommendationsSectionService_Model_ListRecommendationsRequest
     * @return MWSRecommendationsSectionService_Model_ListRecommendationsResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function listRecommendations($request);


    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_ListRecommendationsByNextToken request or MWSRecommendationsSectionService_Model_ListRecommendationsByNextToken object itself
     * @see MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenRequest
     * @return MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function listRecommendationsByNextToken($request);


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSRecommendationsSectionService_Model_GetServiceStatus request or MWSRecommendationsSectionService_Model_GetServiceStatus object itself
     * @see MWSRecommendationsSectionService_Model_GetServiceStatusRequest
     * @return MWSRecommendationsSectionService_Model_GetServiceStatusResponse
     *
     * @throws MWSRecommendationsSectionService_Exception
     */
    public function getServiceStatus($request);

}