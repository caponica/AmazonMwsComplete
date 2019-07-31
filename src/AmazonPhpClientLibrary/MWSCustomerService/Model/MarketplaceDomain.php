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
 * MWSCustomerService_Model_MarketplaceDomain
 * 
 * Properties:
 * <ul>
 * 
 * <li>DomainName: string</li>
 * <li>Origin: bool</li>
 * <li>AssociatedOn: string</li>
 * <li>LastUpdatedOn: string</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_MarketplaceDomain extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DomainName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Origin' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'AssociatedOn' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LastUpdatedOn' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DomainName property.
     *
     * @return String DomainName.
     */
    public function getDomainName()
    {
        return $this->_fields['DomainName']['FieldValue'];
    }

    /**
     * Set the value of the DomainName property.
     *
     * @param string domainName
     * @return this instance
     */
    public function setDomainName($value)
    {
        $this->_fields['DomainName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DomainName is set.
     *
     * @return true if DomainName is set.
     */
    public function isSetDomainName()
    {
                return !is_null($this->_fields['DomainName']['FieldValue']);
            }

    /**
     * Set the value of DomainName, return this.
     *
     * @param domainName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDomainName($value)
    {
        $this->setDomainName($value);
        return $this;
    }

    /**
     * Check the value of Origin.
     *
     * @return true if Origin is set to true.
     */
    public function isOrigin()
    {
        return !is_null($this->_fields['Origin']['FieldValue']) && $this->_fields['Origin']['FieldValue'];
    }

    /**
     * Get the value of the Origin property.
     *
     * @return Boolean Origin.
     */
    public function getOrigin()
    {
        return $this->_fields['Origin']['FieldValue'];
    }

    /**
     * Set the value of the Origin property.
     *
     * @param bool origin
     * @return this instance
     */
    public function setOrigin($value)
    {
        $this->_fields['Origin']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Origin is set.
     *
     * @return true if Origin is set.
     */
    public function isSetOrigin()
    {
                return !is_null($this->_fields['Origin']['FieldValue']);
            }

    /**
     * Set the value of Origin, return this.
     *
     * @param origin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrigin($value)
    {
        $this->setOrigin($value);
        return $this;
    }

    /**
     * Get the value of the AssociatedOn property.
     *
     * @return XMLGregorianCalendar AssociatedOn.
     */
    public function getAssociatedOn()
    {
        return $this->_fields['AssociatedOn']['FieldValue'];
    }

    /**
     * Set the value of the AssociatedOn property.
     *
     * @param string associatedOn
     * @return this instance
     */
    public function setAssociatedOn($value)
    {
        $this->_fields['AssociatedOn']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AssociatedOn is set.
     *
     * @return true if AssociatedOn is set.
     */
    public function isSetAssociatedOn()
    {
                return !is_null($this->_fields['AssociatedOn']['FieldValue']);
            }

    /**
     * Set the value of AssociatedOn, return this.
     *
     * @param associatedOn
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAssociatedOn($value)
    {
        $this->setAssociatedOn($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedOn property.
     *
     * @return XMLGregorianCalendar LastUpdatedOn.
     */
    public function getLastUpdatedOn()
    {
        return $this->_fields['LastUpdatedOn']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedOn property.
     *
     * @param string lastUpdatedOn
     * @return this instance
     */
    public function setLastUpdatedOn($value)
    {
        $this->_fields['LastUpdatedOn']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedOn is set.
     *
     * @return true if LastUpdatedOn is set.
     */
    public function isSetLastUpdatedOn()
    {
                return !is_null($this->_fields['LastUpdatedOn']['FieldValue']);
            }

    /**
     * Set the value of LastUpdatedOn, return this.
     *
     * @param lastUpdatedOn
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdatedOn($value)
    {
        $this->setLastUpdatedOn($value);
        return $this;
    }

}
