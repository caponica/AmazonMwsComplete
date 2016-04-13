<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Customer Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:32:14 GMT 2015
 */

/**
 *  @see MWSCustomerService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCustomerService_Model_Customer
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerId: string</li>
 * <li>ShippingAddressList: array</li>
 * <li>PrimaryContactInfo: MWSCustomerService_Model_CustomerPrimaryContactInfo</li>
 * <li>AccountType: string</li>
 * <li>AssociatedMarketplaces: array</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_Customer extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CustomerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingAddressList' => array('FieldValue' => array(), 'FieldType' => array('MWSCustomerService_Model_Address'), 'ListMemberName' => 'ShippingAddress'),
    'PrimaryContactInfo' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_CustomerPrimaryContactInfo'),
    'AccountType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AssociatedMarketplaces' => array('FieldValue' => array(), 'FieldType' => array('MWSCustomerService_Model_MarketplaceDomain'), 'ListMemberName' => 'MarketplaceDomain'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CustomerId property.
     *
     * @return String CustomerId.
     */
    public function getCustomerId()
    {
        return $this->_fields['CustomerId']['FieldValue'];
    }

    /**
     * Set the value of the CustomerId property.
     *
     * @param string customerId
     * @return this instance
     */
    public function setCustomerId($value)
    {
        $this->_fields['CustomerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CustomerId is set.
     *
     * @return true if CustomerId is set.
     */
    public function isSetCustomerId()
    {
                return !is_null($this->_fields['CustomerId']['FieldValue']);
            }

    /**
     * Set the value of CustomerId, return this.
     *
     * @param customerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCustomerId($value)
    {
        $this->setCustomerId($value);
        return $this;
    }

    /**
     * Get the value of the ShippingAddressList property.
     *
     * @return List<Address> ShippingAddressList.
     */
    public function getShippingAddressList()
    {
        if ($this->_fields['ShippingAddressList']['FieldValue'] == null)
        {
            $this->_fields['ShippingAddressList']['FieldValue'] = array();
        }
        return $this->_fields['ShippingAddressList']['FieldValue'];
    }

    /**
     * Set the value of the ShippingAddressList property.
     *
     * @param array shippingAddressList
     * @return this instance
     */
    public function setShippingAddressList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShippingAddressList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShippingAddressList.
     */
    public function unsetShippingAddressList()
    {
        $this->_fields['ShippingAddressList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShippingAddressList is set.
     *
     * @return true if ShippingAddressList is set.
     */
    public function isSetShippingAddressList()
    {
                return !empty($this->_fields['ShippingAddressList']['FieldValue']);
            }

    /**
     * Add values for ShippingAddressList, return this.
     *
     * @param shippingAddressList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShippingAddressList()
    {
        foreach (func_get_args() as $ShippingAddressList)
        {
            $this->_fields['ShippingAddressList']['FieldValue'][] = $ShippingAddressList;
        }
        return $this;
    }

    /**
     * Get the value of the PrimaryContactInfo property.
     *
     * @return CustomerPrimaryContactInfo PrimaryContactInfo.
     */
    public function getPrimaryContactInfo()
    {
        return $this->_fields['PrimaryContactInfo']['FieldValue'];
    }

    /**
     * Set the value of the PrimaryContactInfo property.
     *
     * @param MWSCustomerService_Model_CustomerPrimaryContactInfo primaryContactInfo
     * @return this instance
     */
    public function setPrimaryContactInfo($value)
    {
        $this->_fields['PrimaryContactInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PrimaryContactInfo is set.
     *
     * @return true if PrimaryContactInfo is set.
     */
    public function isSetPrimaryContactInfo()
    {
                return !is_null($this->_fields['PrimaryContactInfo']['FieldValue']);
            }

    /**
     * Set the value of PrimaryContactInfo, return this.
     *
     * @param primaryContactInfo
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPrimaryContactInfo($value)
    {
        $this->setPrimaryContactInfo($value);
        return $this;
    }

    /**
     * Get the value of the AccountType property.
     *
     * @return String AccountType.
     */
    public function getAccountType()
    {
        return $this->_fields['AccountType']['FieldValue'];
    }

    /**
     * Set the value of the AccountType property.
     *
     * @param string accountType
     * @return this instance
     */
    public function setAccountType($value)
    {
        $this->_fields['AccountType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AccountType is set.
     *
     * @return true if AccountType is set.
     */
    public function isSetAccountType()
    {
                return !is_null($this->_fields['AccountType']['FieldValue']);
            }

    /**
     * Set the value of AccountType, return this.
     *
     * @param accountType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAccountType($value)
    {
        $this->setAccountType($value);
        return $this;
    }

    /**
     * Get the value of the AssociatedMarketplaces property.
     *
     * @return List<MarketplaceDomain> AssociatedMarketplaces.
     */
    public function getAssociatedMarketplaces()
    {
        if ($this->_fields['AssociatedMarketplaces']['FieldValue'] == null)
        {
            $this->_fields['AssociatedMarketplaces']['FieldValue'] = array();
        }
        return $this->_fields['AssociatedMarketplaces']['FieldValue'];
    }

    /**
     * Set the value of the AssociatedMarketplaces property.
     *
     * @param array associatedMarketplaces
     * @return this instance
     */
    public function setAssociatedMarketplaces($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AssociatedMarketplaces']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AssociatedMarketplaces.
     */
    public function unsetAssociatedMarketplaces()
    {
        $this->_fields['AssociatedMarketplaces']['FieldValue'] = array();
    }

    /**
     * Check to see if AssociatedMarketplaces is set.
     *
     * @return true if AssociatedMarketplaces is set.
     */
    public function isSetAssociatedMarketplaces()
    {
                return !empty($this->_fields['AssociatedMarketplaces']['FieldValue']);
            }

    /**
     * Add values for AssociatedMarketplaces, return this.
     *
     * @param associatedMarketplaces
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAssociatedMarketplaces()
    {
        foreach (func_get_args() as $AssociatedMarketplaces)
        {
            $this->_fields['AssociatedMarketplaces']['FieldValue'][] = $AssociatedMarketplaces;
        }
        return $this;
    }

}
