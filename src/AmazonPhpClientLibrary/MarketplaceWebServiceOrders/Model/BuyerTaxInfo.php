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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceOrders_Model_BuyerTaxInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompanyLegalName: string</li>
 * <li>TaxingRegion: string</li>
 * <li>TaxClassifications: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_BuyerTaxInfo extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CompanyLegalName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TaxingRegion' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TaxClassifications' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceOrders_Model_TaxClassification'), 'ListMemberName' => 'TaxClassification'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CompanyLegalName property.
     *
     * @return String CompanyLegalName.
     */
    public function getCompanyLegalName()
    {
        return $this->_fields['CompanyLegalName']['FieldValue'];
    }

    /**
     * Set the value of the CompanyLegalName property.
     *
     * @param string companyLegalName
     * @return this instance
     */
    public function setCompanyLegalName($value)
    {
        $this->_fields['CompanyLegalName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CompanyLegalName is set.
     *
     * @return true if CompanyLegalName is set.
     */
    public function isSetCompanyLegalName()
    {
                return !is_null($this->_fields['CompanyLegalName']['FieldValue']);
            }

    /**
     * Set the value of CompanyLegalName, return this.
     *
     * @param companyLegalName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCompanyLegalName($value)
    {
        $this->setCompanyLegalName($value);
        return $this;
    }

    /**
     * Get the value of the TaxingRegion property.
     *
     * @return String TaxingRegion.
     */
    public function getTaxingRegion()
    {
        return $this->_fields['TaxingRegion']['FieldValue'];
    }

    /**
     * Set the value of the TaxingRegion property.
     *
     * @param string taxingRegion
     * @return this instance
     */
    public function setTaxingRegion($value)
    {
        $this->_fields['TaxingRegion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxingRegion is set.
     *
     * @return true if TaxingRegion is set.
     */
    public function isSetTaxingRegion()
    {
                return !is_null($this->_fields['TaxingRegion']['FieldValue']);
            }

    /**
     * Set the value of TaxingRegion, return this.
     *
     * @param taxingRegion
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxingRegion($value)
    {
        $this->setTaxingRegion($value);
        return $this;
    }

    /**
     * Get the value of the TaxClassifications property.
     *
     * @return List<TaxClassification> TaxClassifications.
     */
    public function getTaxClassifications()
    {
        if ($this->_fields['TaxClassifications']['FieldValue'] == null)
        {
            $this->_fields['TaxClassifications']['FieldValue'] = array();
        }
        return $this->_fields['TaxClassifications']['FieldValue'];
    }

    /**
     * Set the value of the TaxClassifications property.
     *
     * @param array taxClassifications
     * @return this instance
     */
    public function setTaxClassifications($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['TaxClassifications']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear TaxClassifications.
     */
    public function unsetTaxClassifications()
    {
        $this->_fields['TaxClassifications']['FieldValue'] = array();
    }

    /**
     * Check to see if TaxClassifications is set.
     *
     * @return true if TaxClassifications is set.
     */
    public function isSetTaxClassifications()
    {
                return !empty($this->_fields['TaxClassifications']['FieldValue']);
            }

    /**
     * Add values for TaxClassifications, return this.
     *
     * @param taxClassifications
     *             New values to add.
     *
     * @return This instance.
     */
    public function withTaxClassifications()
    {
        foreach (func_get_args() as $TaxClassifications)
        {
            $this->_fields['TaxClassifications']['FieldValue'][] = $TaxClassifications;
        }
        return $this;
    }

}
