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
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2013-11-01
 * Generated: Tue Oct 02 08:13:42 PDT 2018
 */

/**
 *  @see MWSSubscriptionsService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSSubscriptionsService_Model_Destination
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeliveryChannel: string</li>
 * <li>AttributeList: MWSSubscriptionsService_Model_AttributeKeyValueList</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_Destination extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DeliveryChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AttributeList' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_AttributeKeyValueList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryChannel property.
     *
     * @return String DeliveryChannel.
     */
    public function getDeliveryChannel()
    {
        return $this->_fields['DeliveryChannel']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryChannel property.
     *
     * @param string deliveryChannel
     * @return this instance
     */
    public function setDeliveryChannel($value)
    {
        $this->_fields['DeliveryChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryChannel is set.
     *
     * @return true if DeliveryChannel is set.
     */
    public function isSetDeliveryChannel()
    {
                return !is_null($this->_fields['DeliveryChannel']['FieldValue']);
            }

    /**
     * Set the value of DeliveryChannel, return this.
     *
     * @param deliveryChannel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryChannel($value)
    {
        $this->setDeliveryChannel($value);
        return $this;
    }

    /**
     * Get the value of the AttributeList property.
     *
     * @return AttributeKeyValueList AttributeList.
     */
    public function getAttributeList()
    {
        return $this->_fields['AttributeList']['FieldValue'];
    }

    /**
     * Set the value of the AttributeList property.
     *
     * @param MWSSubscriptionsService_Model_AttributeKeyValueList attributeList
     * @return this instance
     */
    public function setAttributeList($value)
    {
        $this->_fields['AttributeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AttributeList is set.
     *
     * @return true if AttributeList is set.
     */
    public function isSetAttributeList()
    {
                return !is_null($this->_fields['AttributeList']['FieldValue']);
            }

    /**
     * Set the value of AttributeList, return this.
     *
     * @param attributeList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAttributeList($value)
    {
        $this->setAttributeList($value);
        return $this;
    }

}
