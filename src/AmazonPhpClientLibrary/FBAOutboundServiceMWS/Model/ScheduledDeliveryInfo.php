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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-02-01
 * Generated: Fri Jan 08 13:26:48 PST 2016
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_ScheduledDeliveryInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeliveryTimeZone: string</li>
 * <li>DeliveryWindows: FBAOutboundServiceMWS_Model_DeliveryWindowList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_ScheduledDeliveryInfo extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DeliveryTimeZone' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DeliveryWindows' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_DeliveryWindowList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryTimeZone property.
     *
     * @return String DeliveryTimeZone.
     */
    public function getDeliveryTimeZone()
    {
        return $this->_fields['DeliveryTimeZone']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryTimeZone property.
     *
     * @param string deliveryTimeZone
     * @return this instance
     */
    public function setDeliveryTimeZone($value)
    {
        $this->_fields['DeliveryTimeZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryTimeZone is set.
     *
     * @return true if DeliveryTimeZone is set.
     */
    public function isSetDeliveryTimeZone()
    {
                return !is_null($this->_fields['DeliveryTimeZone']['FieldValue']);
            }

    /**
     * Set the value of DeliveryTimeZone, return this.
     *
     * @param deliveryTimeZone
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryTimeZone($value)
    {
        $this->setDeliveryTimeZone($value);
        return $this;
    }

    /**
     * Get the value of the DeliveryWindows property.
     *
     * @return DeliveryWindowList DeliveryWindows.
     */
    public function getDeliveryWindows()
    {
        return $this->_fields['DeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryWindows property.
     *
     * @param FBAOutboundServiceMWS_Model_DeliveryWindowList deliveryWindows
     * @return this instance
     */
    public function setDeliveryWindows($value)
    {
        $this->_fields['DeliveryWindows']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryWindows is set.
     *
     * @return true if DeliveryWindows is set.
     */
    public function isSetDeliveryWindows()
    {
                return !is_null($this->_fields['DeliveryWindows']['FieldValue']);
            }

    /**
     * Set the value of DeliveryWindows, return this.
     *
     * @param deliveryWindows
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryWindows($value)
    {
        $this->setDeliveryWindows($value);
        return $this;
    }

}
