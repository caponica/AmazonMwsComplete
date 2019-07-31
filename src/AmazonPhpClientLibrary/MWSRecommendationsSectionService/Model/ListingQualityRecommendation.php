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
 * MWSRecommendationsSectionService_Model_ListingQualityRecommendation
 * 
 * Properties:
 * <ul>
 * 
 * <li>QualitySet: string</li>
 * <li>DefectGroup: string</li>
 * <li>DefectAttribute: string</li>
 * <li>ItemIdentifier: MWSRecommendationsSectionService_Model_ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_ListingQualityRecommendation extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'QualitySet' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DefectGroup' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DefectAttribute' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ProductIdentifier'),
    'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the QualitySet property.
     *
     * @return String QualitySet.
     */
    public function getQualitySet()
    {
        return $this->_fields['QualitySet']['FieldValue'];
    }

    /**
     * Set the value of the QualitySet property.
     *
     * @param string qualitySet
     * @return this instance
     */
    public function setQualitySet($value)
    {
        $this->_fields['QualitySet']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QualitySet is set.
     *
     * @return true if QualitySet is set.
     */
    public function isSetQualitySet()
    {
                return !is_null($this->_fields['QualitySet']['FieldValue']);
            }

    /**
     * Set the value of QualitySet, return this.
     *
     * @param qualitySet
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQualitySet($value)
    {
        $this->setQualitySet($value);
        return $this;
    }

    /**
     * Get the value of the DefectGroup property.
     *
     * @return String DefectGroup.
     */
    public function getDefectGroup()
    {
        return $this->_fields['DefectGroup']['FieldValue'];
    }

    /**
     * Set the value of the DefectGroup property.
     *
     * @param string defectGroup
     * @return this instance
     */
    public function setDefectGroup($value)
    {
        $this->_fields['DefectGroup']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DefectGroup is set.
     *
     * @return true if DefectGroup is set.
     */
    public function isSetDefectGroup()
    {
                return !is_null($this->_fields['DefectGroup']['FieldValue']);
            }

    /**
     * Set the value of DefectGroup, return this.
     *
     * @param defectGroup
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDefectGroup($value)
    {
        $this->setDefectGroup($value);
        return $this;
    }

    /**
     * Get the value of the DefectAttribute property.
     *
     * @return String DefectAttribute.
     */
    public function getDefectAttribute()
    {
        return $this->_fields['DefectAttribute']['FieldValue'];
    }

    /**
     * Set the value of the DefectAttribute property.
     *
     * @param string defectAttribute
     * @return this instance
     */
    public function setDefectAttribute($value)
    {
        $this->_fields['DefectAttribute']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DefectAttribute is set.
     *
     * @return true if DefectAttribute is set.
     */
    public function isSetDefectAttribute()
    {
                return !is_null($this->_fields['DefectAttribute']['FieldValue']);
            }

    /**
     * Set the value of DefectAttribute, return this.
     *
     * @param defectAttribute
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDefectAttribute($value)
    {
        $this->setDefectAttribute($value);
        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param MWSRecommendationsSectionService_Model_ProductIdentifier itemIdentifier
     * @return this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
                return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
            }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return String ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
                return !is_null($this->_fields['ItemName']['FieldValue']);
            }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemName($value)
    {
        $this->setItemName($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return String RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
                return !is_null($this->_fields['RecommendationId']['FieldValue']);
            }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return String RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
                return !is_null($this->_fields['RecommendationReason']['FieldValue']);
            }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);
        return $this;
    }

}
