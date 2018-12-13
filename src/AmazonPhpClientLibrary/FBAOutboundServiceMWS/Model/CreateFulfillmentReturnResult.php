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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReturnItemList: FBAOutboundServiceMWS_Model_ReturnItemList</li>
 * <li>InvalidReturnItemList: FBAOutboundServiceMWS_Model_InvalidReturnItemList</li>
 * <li>ReturnAuthorizationList: FBAOutboundServiceMWS_Model_ReturnAuthorizationList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResult extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ReturnItemList' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ReturnItemList'),
    'InvalidReturnItemList' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_InvalidReturnItemList'),
    'ReturnAuthorizationList' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ReturnAuthorizationList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ReturnItemList property.
     *
     * @return ReturnItemList ReturnItemList.
     */
    public function getReturnItemList()
    {
        return $this->_fields['ReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnItemList property.
     *
     * @param FBAOutboundServiceMWS_Model_ReturnItemList returnItemList
     * @return this instance
     */
    public function setReturnItemList($value)
    {
        $this->_fields['ReturnItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnItemList is set.
     *
     * @return true if ReturnItemList is set.
     */
    public function isSetReturnItemList()
    {
                return !is_null($this->_fields['ReturnItemList']['FieldValue']);
            }

    /**
     * Set the value of ReturnItemList, return this.
     *
     * @param returnItemList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnItemList($value)
    {
        $this->setReturnItemList($value);
        return $this;
    }

    /**
     * Get the value of the InvalidReturnItemList property.
     *
     * @return InvalidReturnItemList InvalidReturnItemList.
     */
    public function getInvalidReturnItemList()
    {
        return $this->_fields['InvalidReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidReturnItemList property.
     *
     * @param FBAOutboundServiceMWS_Model_InvalidReturnItemList invalidReturnItemList
     * @return this instance
     */
    public function setInvalidReturnItemList($value)
    {
        $this->_fields['InvalidReturnItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvalidReturnItemList is set.
     *
     * @return true if InvalidReturnItemList is set.
     */
    public function isSetInvalidReturnItemList()
    {
                return !is_null($this->_fields['InvalidReturnItemList']['FieldValue']);
            }

    /**
     * Set the value of InvalidReturnItemList, return this.
     *
     * @param invalidReturnItemList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvalidReturnItemList($value)
    {
        $this->setInvalidReturnItemList($value);
        return $this;
    }

    /**
     * Get the value of the ReturnAuthorizationList property.
     *
     * @return ReturnAuthorizationList ReturnAuthorizationList.
     */
    public function getReturnAuthorizationList()
    {
        return $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnAuthorizationList property.
     *
     * @param FBAOutboundServiceMWS_Model_ReturnAuthorizationList returnAuthorizationList
     * @return this instance
     */
    public function setReturnAuthorizationList($value)
    {
        $this->_fields['ReturnAuthorizationList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnAuthorizationList is set.
     *
     * @return true if ReturnAuthorizationList is set.
     */
    public function isSetReturnAuthorizationList()
    {
                return !is_null($this->_fields['ReturnAuthorizationList']['FieldValue']);
            }

    /**
     * Set the value of ReturnAuthorizationList, return this.
     *
     * @param returnAuthorizationList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnAuthorizationList($value)
    {
        $this->setReturnAuthorizationList($value);
        return $this;
    }

}
