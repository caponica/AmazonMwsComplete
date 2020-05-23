<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2020-05-11
 * Generated: Fri May 08 09:10:38 GMT 2020
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceOrders_Model_BuyerIdentificationInformation
 * 
 * Properties:
 * <ul>
 * 
 * <li>BuyerCitizenId: string</li>
 * <li>BuyerLegalName: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_BuyerIdentificationInformation extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'BuyerCitizenId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'BuyerLegalName' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the BuyerCitizenId property.
     *
     * @return String BuyerCitizenId.
     */
    public function getBuyerCitizenId()
    {
        return $this->_fields['BuyerCitizenId']['FieldValue'];
    }

    /**
     * Set the value of the BuyerCitizenId property.
     *
     * @param string buyerCitizenId
     * @return this instance
     */
    public function setBuyerCitizenId($value)
    {
        $this->_fields['BuyerCitizenId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerCitizenId is set.
     *
     * @return true if BuyerCitizenId is set.
     */
    public function isSetBuyerCitizenId()
    {
                return !is_null($this->_fields['BuyerCitizenId']['FieldValue']);
            }

    /**
     * Set the value of BuyerCitizenId, return this.
     *
     * @param buyerCitizenId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBuyerCitizenId($value)
    {
        $this->setBuyerCitizenId($value);
        return $this;
    }

    /**
     * Get the value of the BuyerLegalName property.
     *
     * @return String BuyerLegalName.
     */
    public function getBuyerLegalName()
    {
        return $this->_fields['BuyerLegalName']['FieldValue'];
    }

    /**
     * Set the value of the BuyerLegalName property.
     *
     * @param string buyerLegalName
     * @return this instance
     */
    public function setBuyerLegalName($value)
    {
        $this->_fields['BuyerLegalName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerLegalName is set.
     *
     * @return true if BuyerLegalName is set.
     */
    public function isSetBuyerLegalName()
    {
                return !is_null($this->_fields['BuyerLegalName']['FieldValue']);
            }

    /**
     * Set the value of BuyerLegalName, return this.
     *
     * @param buyerLegalName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBuyerLegalName($value)
    {
        $this->setBuyerLegalName($value);
        return $this;
    }

}
