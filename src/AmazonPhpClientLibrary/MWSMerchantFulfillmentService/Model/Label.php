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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_Label
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomTextForLabel: string</li>
 * <li>Dimensions: MWSMerchantFulfillmentService_Model_LabelDimensions</li>
 * <li>FileContents: MWSMerchantFulfillmentService_Model_FileContents</li>
 * <li>LabelFormat: string</li>
 * <li>StandardIdForLabel: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_Label extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CustomTextForLabel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Dimensions' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_LabelDimensions'),
    'FileContents' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_FileContents'),
    'LabelFormat' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StandardIdForLabel' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CustomTextForLabel property.
     *
     * @return String CustomTextForLabel.
     */
    public function getCustomTextForLabel()
    {
        return $this->_fields['CustomTextForLabel']['FieldValue'];
    }

    /**
     * Set the value of the CustomTextForLabel property.
     *
     * @param string customTextForLabel
     * @return this instance
     */
    public function setCustomTextForLabel($value)
    {
        $this->_fields['CustomTextForLabel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CustomTextForLabel is set.
     *
     * @return true if CustomTextForLabel is set.
     */
    public function isSetCustomTextForLabel()
    {
                return !is_null($this->_fields['CustomTextForLabel']['FieldValue']);
            }

    /**
     * Set the value of CustomTextForLabel, return this.
     *
     * @param customTextForLabel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCustomTextForLabel($value)
    {
        $this->setCustomTextForLabel($value);
        return $this;
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return LabelDimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param MWSMerchantFulfillmentService_Model_LabelDimensions dimensions
     * @return this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set.
     */
    public function isSetDimensions()
    {
                return !is_null($this->_fields['Dimensions']['FieldValue']);
            }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }

    /**
     * Get the value of the FileContents property.
     *
     * @return FileContents FileContents.
     */
    public function getFileContents()
    {
        return $this->_fields['FileContents']['FieldValue'];
    }

    /**
     * Set the value of the FileContents property.
     *
     * @param MWSMerchantFulfillmentService_Model_FileContents fileContents
     * @return this instance
     */
    public function setFileContents($value)
    {
        $this->_fields['FileContents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FileContents is set.
     *
     * @return true if FileContents is set.
     */
    public function isSetFileContents()
    {
                return !is_null($this->_fields['FileContents']['FieldValue']);
            }

    /**
     * Set the value of FileContents, return this.
     *
     * @param fileContents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFileContents($value)
    {
        $this->setFileContents($value);
        return $this;
    }

    /**
     * Get the value of the LabelFormat property.
     *
     * @return String LabelFormat.
     */
    public function getLabelFormat()
    {
        return $this->_fields['LabelFormat']['FieldValue'];
    }

    /**
     * Set the value of the LabelFormat property.
     *
     * @param string labelFormat
     * @return this instance
     */
    public function setLabelFormat($value)
    {
        $this->_fields['LabelFormat']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LabelFormat is set.
     *
     * @return true if LabelFormat is set.
     */
    public function isSetLabelFormat()
    {
                return !is_null($this->_fields['LabelFormat']['FieldValue']);
            }

    /**
     * Set the value of LabelFormat, return this.
     *
     * @param labelFormat
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLabelFormat($value)
    {
        $this->setLabelFormat($value);
        return $this;
    }

    /**
     * Get the value of the StandardIdForLabel property.
     *
     * @return String StandardIdForLabel.
     */
    public function getStandardIdForLabel()
    {
        return $this->_fields['StandardIdForLabel']['FieldValue'];
    }

    /**
     * Set the value of the StandardIdForLabel property.
     *
     * @param string standardIdForLabel
     * @return this instance
     */
    public function setStandardIdForLabel($value)
    {
        $this->_fields['StandardIdForLabel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StandardIdForLabel is set.
     *
     * @return true if StandardIdForLabel is set.
     */
    public function isSetStandardIdForLabel()
    {
                return !is_null($this->_fields['StandardIdForLabel']['FieldValue']);
            }

    /**
     * Set the value of StandardIdForLabel, return this.
     *
     * @param standardIdForLabel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStandardIdForLabel($value)
    {
        $this->setStandardIdForLabel($value);
        return $this;
    }

}
