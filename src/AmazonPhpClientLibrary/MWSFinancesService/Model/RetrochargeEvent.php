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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_RetrochargeEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>RetrochargeEventType: string</li>
 * <li>AmazonOrderId: string</li>
 * <li>PostedDate: string</li>
 * <li>BaseTax: MWSFinancesService_Model_Currency</li>
 * <li>ShippingTax: MWSFinancesService_Model_Currency</li>
 * <li>MarketplaceName: string</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_RetrochargeEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'RetrochargeEventType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'BaseTax' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'ShippingTax' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'MarketplaceName' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the RetrochargeEventType property.
     *
     * @return String RetrochargeEventType.
     */
    public function getRetrochargeEventType()
    {
        return $this->_fields['RetrochargeEventType']['FieldValue'];
    }

    /**
     * Set the value of the RetrochargeEventType property.
     *
     * @param string retrochargeEventType
     * @return this instance
     */
    public function setRetrochargeEventType($value)
    {
        $this->_fields['RetrochargeEventType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RetrochargeEventType is set.
     *
     * @return true if RetrochargeEventType is set.
     */
    public function isSetRetrochargeEventType()
    {
                return !is_null($this->_fields['RetrochargeEventType']['FieldValue']);
            }

    /**
     * Set the value of RetrochargeEventType, return this.
     *
     * @param retrochargeEventType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRetrochargeEventType($value)
    {
        $this->setRetrochargeEventType($value);
        return $this;
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
                return !is_null($this->_fields['PostedDate']['FieldValue']);
            }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }

    /**
     * Get the value of the BaseTax property.
     *
     * @return Currency BaseTax.
     */
    public function getBaseTax()
    {
        return $this->_fields['BaseTax']['FieldValue'];
    }

    /**
     * Set the value of the BaseTax property.
     *
     * @param MWSFinancesService_Model_Currency baseTax
     * @return this instance
     */
    public function setBaseTax($value)
    {
        $this->_fields['BaseTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BaseTax is set.
     *
     * @return true if BaseTax is set.
     */
    public function isSetBaseTax()
    {
                return !is_null($this->_fields['BaseTax']['FieldValue']);
            }

    /**
     * Set the value of BaseTax, return this.
     *
     * @param baseTax
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBaseTax($value)
    {
        $this->setBaseTax($value);
        return $this;
    }

    /**
     * Get the value of the ShippingTax property.
     *
     * @return Currency ShippingTax.
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTax property.
     *
     * @param MWSFinancesService_Model_Currency shippingTax
     * @return this instance
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingTax is set.
     *
     * @return true if ShippingTax is set.
     */
    public function isSetShippingTax()
    {
                return !is_null($this->_fields['ShippingTax']['FieldValue']);
            }

    /**
     * Set the value of ShippingTax, return this.
     *
     * @param shippingTax
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingTax($value)
    {
        $this->setShippingTax($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceName property.
     *
     * @return String MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set.
     */
    public function isSetMarketplaceName()
    {
                return !is_null($this->_fields['MarketplaceName']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);
        return $this;
    }

}
