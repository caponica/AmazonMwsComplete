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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_ItemLevelFields
 * 
 * Properties:
 * <ul>
 * 
 * <li>Asin: string</li>
 * <li>AdditionalInputs: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_ItemLevelFields extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Asin' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AdditionalInputs' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_AdditionalInputs'), 'ListMemberName' => 'member'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Asin property.
     *
     * @return String Asin.
     */
    public function getAsin()
    {
        return $this->_fields['Asin']['FieldValue'];
    }

    /**
     * Set the value of the Asin property.
     *
     * @param string asin
     * @return this instance
     */
    public function setAsin($value)
    {
        $this->_fields['Asin']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Asin is set.
     *
     * @return true if Asin is set.
     */
    public function isSetAsin()
    {
                return !is_null($this->_fields['Asin']['FieldValue']);
            }

    /**
     * Set the value of Asin, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAsin($value)
    {
        $this->setAsin($value);
        return $this;
    }

    /**
     * Get the value of the AdditionalInputs property.
     *
     * @return List<AdditionalInputs> AdditionalInputs.
     */
    public function getAdditionalInputs()
    {
        if ($this->_fields['AdditionalInputs']['FieldValue'] == null)
        {
            $this->_fields['AdditionalInputs']['FieldValue'] = array();
        }
        return $this->_fields['AdditionalInputs']['FieldValue'];
    }

    /**
     * Set the value of the AdditionalInputs property.
     *
     * @param array additionalInputs
     * @return this instance
     */
    public function setAdditionalInputs($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AdditionalInputs']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AdditionalInputs.
     */
    public function unsetAdditionalInputs()
    {
        $this->_fields['AdditionalInputs']['FieldValue'] = array();
    }

    /**
     * Check to see if AdditionalInputs is set.
     *
     * @return true if AdditionalInputs is set.
     */
    public function isSetAdditionalInputs()
    {
                return !empty($this->_fields['AdditionalInputs']['FieldValue']);
            }

    /**
     * Add values for AdditionalInputs, return this.
     *
     * @param additionalInputs
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAdditionalInputs()
    {
        foreach (func_get_args() as $AdditionalInputs)
        {
            $this->_fields['AdditionalInputs']['FieldValue'][] = $AdditionalInputs;
        }
        return $this;
    }

}
