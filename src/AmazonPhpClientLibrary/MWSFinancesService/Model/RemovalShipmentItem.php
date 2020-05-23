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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2020-02-21
 * Generated: Fri Feb 21 09:07:30 PST 2020
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_RemovalShipmentItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>RemovalShipmentItemId: string</li>
 * <li>TaxCollectionModel: string</li>
 * <li>FufillmentNetworkSKU: string</li>
 * <li>Quantity: int</li>
 * <li>Revenue: MWSFinancesService_Model_Currency</li>
 * <li>FeeAmount: MWSFinancesService_Model_Currency</li>
 * <li>TaxAmount: MWSFinancesService_Model_Currency</li>
 * <li>TaxWithheld: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_RemovalShipmentItem extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'RemovalShipmentItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TaxCollectionModel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FufillmentNetworkSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'Revenue' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'FeeAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxWithheld' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the RemovalShipmentItemId property.
     *
     * @return String RemovalShipmentItemId.
     */
    public function getRemovalShipmentItemId()
    {
        return $this->_fields['RemovalShipmentItemId']['FieldValue'];
    }

    /**
     * Set the value of the RemovalShipmentItemId property.
     *
     * @param string removalShipmentItemId
     * @return this instance
     */
    public function setRemovalShipmentItemId($value)
    {
        $this->_fields['RemovalShipmentItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RemovalShipmentItemId is set.
     *
     * @return true if RemovalShipmentItemId is set.
     */
    public function isSetRemovalShipmentItemId()
    {
                return !is_null($this->_fields['RemovalShipmentItemId']['FieldValue']);
            }

    /**
     * Set the value of RemovalShipmentItemId, return this.
     *
     * @param removalShipmentItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRemovalShipmentItemId($value)
    {
        $this->setRemovalShipmentItemId($value);
        return $this;
    }

    /**
     * Get the value of the TaxCollectionModel property.
     *
     * @return String TaxCollectionModel.
     */
    public function getTaxCollectionModel()
    {
        return $this->_fields['TaxCollectionModel']['FieldValue'];
    }

    /**
     * Set the value of the TaxCollectionModel property.
     *
     * @param string taxCollectionModel
     * @return this instance
     */
    public function setTaxCollectionModel($value)
    {
        $this->_fields['TaxCollectionModel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxCollectionModel is set.
     *
     * @return true if TaxCollectionModel is set.
     */
    public function isSetTaxCollectionModel()
    {
                return !is_null($this->_fields['TaxCollectionModel']['FieldValue']);
            }

    /**
     * Set the value of TaxCollectionModel, return this.
     *
     * @param taxCollectionModel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxCollectionModel($value)
    {
        $this->setTaxCollectionModel($value);
        return $this;
    }

    /**
     * Get the value of the FufillmentNetworkSKU property.
     *
     * @return String FufillmentNetworkSKU.
     */
    public function getFufillmentNetworkSKU()
    {
        return $this->_fields['FufillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Set the value of the FufillmentNetworkSKU property.
     *
     * @param string fufillmentNetworkSKU
     * @return this instance
     */
    public function setFufillmentNetworkSKU($value)
    {
        $this->_fields['FufillmentNetworkSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FufillmentNetworkSKU is set.
     *
     * @return true if FufillmentNetworkSKU is set.
     */
    public function isSetFufillmentNetworkSKU()
    {
                return !is_null($this->_fields['FufillmentNetworkSKU']['FieldValue']);
            }

    /**
     * Set the value of FufillmentNetworkSKU, return this.
     *
     * @param fufillmentNetworkSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFufillmentNetworkSKU($value)
    {
        $this->setFufillmentNetworkSKU($value);
        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return Integer Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
                return !is_null($this->_fields['Quantity']['FieldValue']);
            }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the Revenue property.
     *
     * @return Currency Revenue.
     */
    public function getRevenue()
    {
        return $this->_fields['Revenue']['FieldValue'];
    }

    /**
     * Set the value of the Revenue property.
     *
     * @param MWSFinancesService_Model_Currency revenue
     * @return this instance
     */
    public function setRevenue($value)
    {
        $this->_fields['Revenue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Revenue is set.
     *
     * @return true if Revenue is set.
     */
    public function isSetRevenue()
    {
                return !is_null($this->_fields['Revenue']['FieldValue']);
            }

    /**
     * Set the value of Revenue, return this.
     *
     * @param revenue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRevenue($value)
    {
        $this->setRevenue($value);
        return $this;
    }

    /**
     * Get the value of the FeeAmount property.
     *
     * @return Currency FeeAmount.
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the FeeAmount property.
     *
     * @param MWSFinancesService_Model_Currency feeAmount
     * @return this instance
     */
    public function setFeeAmount($value)
    {
        $this->_fields['FeeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeAmount is set.
     *
     * @return true if FeeAmount is set.
     */
    public function isSetFeeAmount()
    {
                return !is_null($this->_fields['FeeAmount']['FieldValue']);
            }

    /**
     * Set the value of FeeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeAmount($value)
    {
        $this->setFeeAmount($value);
        return $this;
    }

    /**
     * Get the value of the TaxAmount property.
     *
     * @return Currency TaxAmount.
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxAmount property.
     *
     * @param MWSFinancesService_Model_Currency taxAmount
     * @return this instance
     */
    public function setTaxAmount($value)
    {
        $this->_fields['TaxAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxAmount is set.
     *
     * @return true if TaxAmount is set.
     */
    public function isSetTaxAmount()
    {
                return !is_null($this->_fields['TaxAmount']['FieldValue']);
            }

    /**
     * Set the value of TaxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxAmount($value)
    {
        $this->setTaxAmount($value);
        return $this;
    }

    /**
     * Get the value of the TaxWithheld property.
     *
     * @return Currency TaxWithheld.
     */
    public function getTaxWithheld()
    {
        return $this->_fields['TaxWithheld']['FieldValue'];
    }

    /**
     * Set the value of the TaxWithheld property.
     *
     * @param MWSFinancesService_Model_Currency taxWithheld
     * @return this instance
     */
    public function setTaxWithheld($value)
    {
        $this->_fields['TaxWithheld']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxWithheld is set.
     *
     * @return true if TaxWithheld is set.
     */
    public function isSetTaxWithheld()
    {
                return !is_null($this->_fields['TaxWithheld']['FieldValue']);
            }

    /**
     * Set the value of TaxWithheld, return this.
     *
     * @param taxWithheld
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxWithheld($value)
    {
        $this->setTaxWithheld($value);
        return $this;
    }

}
