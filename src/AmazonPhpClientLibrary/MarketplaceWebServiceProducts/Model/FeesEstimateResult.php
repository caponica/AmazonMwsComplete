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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceProducts_Model_FeesEstimateResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Status: string</li>
 * <li>FeesEstimateIdentifier: MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier</li>
 * <li>FeesEstimate: MarketplaceWebServiceProducts_Model_FeesEstimate</li>
 * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeesEstimateResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeesEstimateIdentifier' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier'),
    'FeesEstimate' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_FeesEstimate'),
    'Error' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Error'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
                return !is_null($this->_fields['Status']['FieldValue']);
            }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the FeesEstimateIdentifier property.
     *
     * @return FeesEstimateIdentifier FeesEstimateIdentifier.
     */
    public function getFeesEstimateIdentifier()
    {
        return $this->_fields['FeesEstimateIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateIdentifier property.
     *
     * @param MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier feesEstimateIdentifier
     * @return this instance
     */
    public function setFeesEstimateIdentifier($value)
    {
        $this->_fields['FeesEstimateIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimateIdentifier is set.
     *
     * @return true if FeesEstimateIdentifier is set.
     */
    public function isSetFeesEstimateIdentifier()
    {
                return !is_null($this->_fields['FeesEstimateIdentifier']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimateIdentifier, return this.
     *
     * @param feesEstimateIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimateIdentifier($value)
    {
        $this->setFeesEstimateIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the FeesEstimate property.
     *
     * @return FeesEstimate FeesEstimate.
     */
    public function getFeesEstimate()
    {
        return $this->_fields['FeesEstimate']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimate property.
     *
     * @param MarketplaceWebServiceProducts_Model_FeesEstimate feesEstimate
     * @return this instance
     */
    public function setFeesEstimate($value)
    {
        $this->_fields['FeesEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimate is set.
     *
     * @return true if FeesEstimate is set.
     */
    public function isSetFeesEstimate()
    {
                return !is_null($this->_fields['FeesEstimate']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimate, return this.
     *
     * @param feesEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimate($value)
    {
        $this->setFeesEstimate($value);
        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return Error Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of the Error property.
     *
     * @param MarketplaceWebServiceProducts_Model_Error error
     * @return this instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set.
     */
    public function isSetError()
    {
                return !is_null($this->_fields['Error']['FieldValue']);
            }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }

}
