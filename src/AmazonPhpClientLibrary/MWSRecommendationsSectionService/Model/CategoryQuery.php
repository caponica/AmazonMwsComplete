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
 *  @see MWSRecommendationsSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSRecommendationsSectionService_Model_CategoryQuery
 * 
 * Properties:
 * <ul>
 * 
 * <li>RecommendationCategory: string</li>
 * <li>FilterOptions: array</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_CategoryQuery extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'RecommendationCategory' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FilterOptions' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'FilterOption'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the RecommendationCategory property.
     *
     * @return String RecommendationCategory.
     */
    public function getRecommendationCategory()
    {
        return $this->_fields['RecommendationCategory']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationCategory property.
     *
     * @param string recommendationCategory
     * @return this instance
     */
    public function setRecommendationCategory($value)
    {
        $this->_fields['RecommendationCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationCategory is set.
     *
     * @return true if RecommendationCategory is set.
     */
    public function isSetRecommendationCategory()
    {
                return !is_null($this->_fields['RecommendationCategory']['FieldValue']);
            }

    /**
     * Set the value of RecommendationCategory, return this.
     *
     * @param recommendationCategory
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationCategory($value)
    {
        $this->setRecommendationCategory($value);
        return $this;
    }

    /**
     * Get the value of the FilterOptions property.
     *
     * @return List<String> FilterOptions.
     */
    public function getFilterOptions()
    {
        if ($this->_fields['FilterOptions']['FieldValue'] == null)
        {
            $this->_fields['FilterOptions']['FieldValue'] = array();
        }
        return $this->_fields['FilterOptions']['FieldValue'];
    }

    /**
     * Set the value of the FilterOptions property.
     *
     * @param array filterOptions
     * @return this instance
     */
    public function setFilterOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FilterOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FilterOptions.
     */
    public function unsetFilterOptions()
    {
        $this->_fields['FilterOptions']['FieldValue'] = array();
    }

    /**
     * Check to see if FilterOptions is set.
     *
     * @return true if FilterOptions is set.
     */
    public function isSetFilterOptions()
    {
                return !empty($this->_fields['FilterOptions']['FieldValue']);
            }

    /**
     * Add values for FilterOptions, return this.
     *
     * @param filterOptions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFilterOptions()
    {
        foreach (func_get_args() as $FilterOptions)
        {
            $this->_fields['FilterOptions']['FieldValue'][] = $FilterOptions;
        }
        return $this;
    }

}
