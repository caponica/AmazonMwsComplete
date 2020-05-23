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
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

/**
 *  @see MWSEasyShipSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSEasyShipSectionService_Model_UpdateScheduledPackagesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>ScheduledPackageUpdateDetailsList: array</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_UpdateScheduledPackagesRequest extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ScheduledPackageUpdateDetailsList' => array('FieldValue' => array(), 'FieldType' => array('MWSEasyShipSectionService_Model_ScheduledPackageUpdateDetails'), 'ListMemberName' => 'ScheduledPackageUpdateDetails'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
                return !is_null($this->_fields['SellerId']['FieldValue']);
            }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
                return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
            }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
                return !is_null($this->_fields['MarketplaceId']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the ScheduledPackageUpdateDetailsList property.
     *
     * @return List<ScheduledPackageUpdateDetails> ScheduledPackageUpdateDetailsList.
     */
    public function getScheduledPackageUpdateDetailsList()
    {
        if ($this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] == null)
        {
            $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = array();
        }
        return $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageUpdateDetailsList property.
     *
     * @param array scheduledPackageUpdateDetailsList
     * @return this instance
     */
    public function setScheduledPackageUpdateDetailsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ScheduledPackageUpdateDetailsList.
     */
    public function unsetScheduledPackageUpdateDetailsList()
    {
        $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'] = array();
    }

    /**
     * Check to see if ScheduledPackageUpdateDetailsList is set.
     *
     * @return true if ScheduledPackageUpdateDetailsList is set.
     */
    public function isSetScheduledPackageUpdateDetailsList()
    {
                return !empty($this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue']);
            }

    /**
     * Add values for ScheduledPackageUpdateDetailsList, return this.
     *
     * @param scheduledPackageUpdateDetailsList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withScheduledPackageUpdateDetailsList()
    {
        foreach (func_get_args() as $ScheduledPackageUpdateDetailsList)
        {
            $this->_fields['ScheduledPackageUpdateDetailsList']['FieldValue'][] = $ScheduledPackageUpdateDetailsList;
        }
        return $this;
    }

}
