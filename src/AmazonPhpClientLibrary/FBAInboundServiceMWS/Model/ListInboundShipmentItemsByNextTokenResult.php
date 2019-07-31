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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ItemData: FBAInboundServiceMWS_Model_InboundShipmentItemList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ItemData' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_InboundShipmentItemList'),
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ItemData property.
     *
     * @return InboundShipmentItemList ItemData.
     */
    public function getItemData()
    {
        return $this->_fields['ItemData']['FieldValue'];
    }

    /**
     * Set the value of the ItemData property.
     *
     * @param FBAInboundServiceMWS_Model_InboundShipmentItemList itemData
     * @return this instance
     */
    public function setItemData($value)
    {
        $this->_fields['ItemData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemData is set.
     *
     * @return true if ItemData is set.
     */
    public function isSetItemData()
    {
                return !is_null($this->_fields['ItemData']['FieldValue']);
            }

    /**
     * Set the value of ItemData, return this.
     *
     * @param itemData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemData($value)
    {
        $this->setItemData($value);
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

}
