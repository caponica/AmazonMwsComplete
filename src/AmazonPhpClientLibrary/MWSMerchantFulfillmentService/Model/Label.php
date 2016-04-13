<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * Library Version: 2016-03-30
 * Generated: Tue Mar 29 19:00:01 UTC 2016
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
 * <li>Dimensions: MWSMerchantFulfillmentService_Model_LabelDimensions</li>
 * <li>FileContents: MWSMerchantFulfillmentService_Model_FileContents</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_Label extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Dimensions' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_LabelDimensions'),
    'FileContents' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_FileContents'),
    );
    parent::__construct($data);
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

}
