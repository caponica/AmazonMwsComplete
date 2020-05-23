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
 * MWSFinancesService_Model_RemovalShipmentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>OrderId: string</li>
 * <li>TransactionType: string</li>
 * <li>RemovalShipmentItemList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_RemovalShipmentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TransactionType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RemovalShipmentItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_RemovalShipmentItem'), 'ListMemberName' => 'RemovalShipmentItem'),
    );
    parent::__construct($data);
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
     * Get the value of the OrderId property.
     *
     * @return String OrderId.
     */
    public function getOrderId()
    {
        return $this->_fields['OrderId']['FieldValue'];
    }

    /**
     * Set the value of the OrderId property.
     *
     * @param string orderId
     * @return this instance
     */
    public function setOrderId($value)
    {
        $this->_fields['OrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderId is set.
     *
     * @return true if OrderId is set.
     */
    public function isSetOrderId()
    {
                return !is_null($this->_fields['OrderId']['FieldValue']);
            }

    /**
     * Set the value of OrderId, return this.
     *
     * @param orderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrderId($value)
    {
        $this->setOrderId($value);
        return $this;
    }

    /**
     * Get the value of the TransactionType property.
     *
     * @return String TransactionType.
     */
    public function getTransactionType()
    {
        return $this->_fields['TransactionType']['FieldValue'];
    }

    /**
     * Set the value of the TransactionType property.
     *
     * @param string transactionType
     * @return this instance
     */
    public function setTransactionType($value)
    {
        $this->_fields['TransactionType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransactionType is set.
     *
     * @return true if TransactionType is set.
     */
    public function isSetTransactionType()
    {
                return !is_null($this->_fields['TransactionType']['FieldValue']);
            }

    /**
     * Set the value of TransactionType, return this.
     *
     * @param transactionType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransactionType($value)
    {
        $this->setTransactionType($value);
        return $this;
    }

    /**
     * Get the value of the RemovalShipmentItemList property.
     *
     * @return List<RemovalShipmentItem> RemovalShipmentItemList.
     */
    public function getRemovalShipmentItemList()
    {
        if ($this->_fields['RemovalShipmentItemList']['FieldValue'] == null)
        {
            $this->_fields['RemovalShipmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['RemovalShipmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the RemovalShipmentItemList property.
     *
     * @param array removalShipmentItemList
     * @return this instance
     */
    public function setRemovalShipmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RemovalShipmentItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RemovalShipmentItemList.
     */
    public function unsetRemovalShipmentItemList()
    {
        $this->_fields['RemovalShipmentItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if RemovalShipmentItemList is set.
     *
     * @return true if RemovalShipmentItemList is set.
     */
    public function isSetRemovalShipmentItemList()
    {
                return !empty($this->_fields['RemovalShipmentItemList']['FieldValue']);
            }

    /**
     * Add values for RemovalShipmentItemList, return this.
     *
     * @param removalShipmentItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRemovalShipmentItemList()
    {
        foreach (func_get_args() as $RemovalShipmentItemList)
        {
            $this->_fields['RemovalShipmentItemList']['FieldValue'][] = $RemovalShipmentItemList;
        }
        return $this;
    }

}
