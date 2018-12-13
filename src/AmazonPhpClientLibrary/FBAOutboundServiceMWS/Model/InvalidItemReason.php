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
 * FBAOutboundServiceMWS_Model_InvalidItemReason
 * 
 * Properties:
 * <ul>
 * 
 * <li>InvalidItemReasonCode: string</li>
 * <li>Description: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_InvalidItemReason extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InvalidItemReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InvalidItemReasonCode property.
     *
     * @return String InvalidItemReasonCode.
     */
    public function getInvalidItemReasonCode()
    {
        return $this->_fields['InvalidItemReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the InvalidItemReasonCode property.
     *
     * @param string invalidItemReasonCode
     * @return this instance
     */
    public function setInvalidItemReasonCode($value)
    {
        $this->_fields['InvalidItemReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvalidItemReasonCode is set.
     *
     * @return true if InvalidItemReasonCode is set.
     */
    public function isSetInvalidItemReasonCode()
    {
                return !is_null($this->_fields['InvalidItemReasonCode']['FieldValue']);
            }

    /**
     * Set the value of InvalidItemReasonCode, return this.
     *
     * @param invalidItemReasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvalidItemReasonCode($value)
    {
        $this->setInvalidItemReasonCode($value);
        return $this;
    }

    /**
     * Get the value of the Description property.
     *
     * @return String Description.
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @return this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set.
     */
    public function isSetDescription()
    {
                return !is_null($this->_fields['Description']['FieldValue']);
            }

    /**
     * Set the value of Description, return this.
     *
     * @param description
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }

}
