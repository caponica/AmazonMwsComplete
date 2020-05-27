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
 * MarketplaceWebServiceOrders_Model_TaxRegistrationDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>taxRegistrationType: string</li>
 * <li>taxRegistrationId: string</li>
 * <li>taxRegistrationAuthority: MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_TaxRegistrationDetails extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'taxRegistrationType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'taxRegistrationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'taxRegistrationAuthority' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the taxRegistrationType property.
     *
     * @return String taxRegistrationType.
     */
    public function gettaxRegistrationType()
    {
        return $this->_fields['taxRegistrationType']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationType property.
     *
     * @param string taxRegistrationType
     * @return this instance
     */
    public function settaxRegistrationType($value)
    {
        $this->_fields['taxRegistrationType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if taxRegistrationType is set.
     *
     * @return true if taxRegistrationType is set.
     */
    public function isSettaxRegistrationType()
    {
                return !is_null($this->_fields['taxRegistrationType']['FieldValue']);
            }

    /**
     * Set the value of taxRegistrationType, return this.
     *
     * @param taxRegistrationType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withtaxRegistrationType($value)
    {
        $this->settaxRegistrationType($value);
        return $this;
    }

    /**
     * Get the value of the taxRegistrationId property.
     *
     * @return String taxRegistrationId.
     */
    public function gettaxRegistrationId()
    {
        return $this->_fields['taxRegistrationId']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationId property.
     *
     * @param string taxRegistrationId
     * @return this instance
     */
    public function settaxRegistrationId($value)
    {
        $this->_fields['taxRegistrationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if taxRegistrationId is set.
     *
     * @return true if taxRegistrationId is set.
     */
    public function isSettaxRegistrationId()
    {
                return !is_null($this->_fields['taxRegistrationId']['FieldValue']);
            }

    /**
     * Set the value of taxRegistrationId, return this.
     *
     * @param taxRegistrationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withtaxRegistrationId($value)
    {
        $this->settaxRegistrationId($value);
        return $this;
    }

    /**
     * Get the value of the taxRegistrationAuthority property.
     *
     * @return TaxRegistrationAuthority taxRegistrationAuthority.
     */
    public function gettaxRegistrationAuthority()
    {
        return $this->_fields['taxRegistrationAuthority']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationAuthority property.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority taxRegistrationAuthority
     * @return this instance
     */
    public function settaxRegistrationAuthority($value)
    {
        $this->_fields['taxRegistrationAuthority']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if taxRegistrationAuthority is set.
     *
     * @return true if taxRegistrationAuthority is set.
     */
    public function isSettaxRegistrationAuthority()
    {
                return !is_null($this->_fields['taxRegistrationAuthority']['FieldValue']);
            }

    /**
     * Set the value of taxRegistrationAuthority, return this.
     *
     * @param taxRegistrationAuthority
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withtaxRegistrationAuthority($value)
    {
        $this->settaxRegistrationAuthority($value);
        return $this;
    }

}
