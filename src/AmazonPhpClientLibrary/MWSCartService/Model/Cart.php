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
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:38 GMT 2015
 */

/**
 *  @see MWSCartService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCartService_Model_Cart
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceId: string</li>
 * <li>NumberOfActiveItems: int</li>
 * <li>NumberOfSavedItems: int</li>
 * <li>CustomerId: string</li>
 * <li>CartType: string</li>
 * <li>ActiveCartItemList: array</li>
 * <li>SavedCartItemList: array</li>
 * <li>LastUpdatedDate: string</li>
 * <li>SessionId: string</li>
 * <li>CartId: string</li>
 *
 * </ul>
 */

 class MWSCartService_Model_Cart extends MWSCartService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'NumberOfActiveItems' => array('FieldValue' => null, 'FieldType' => 'int'),
    'NumberOfSavedItems' => array('FieldValue' => null, 'FieldType' => 'int'),
    'CustomerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CartType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ActiveCartItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSCartService_Model_CartItem'), 'ListMemberName' => 'CartItem'),
    'SavedCartItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSCartService_Model_CartItem'), 'ListMemberName' => 'CartItem'),
    'LastUpdatedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SessionId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CartId' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
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
     * Get the value of the NumberOfActiveItems property.
     *
     * @return Integer NumberOfActiveItems.
     */
    public function getNumberOfActiveItems()
    {
        return $this->_fields['NumberOfActiveItems']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfActiveItems property.
     *
     * @param int numberOfActiveItems
     * @return this instance
     */
    public function setNumberOfActiveItems($value)
    {
        $this->_fields['NumberOfActiveItems']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfActiveItems is set.
     *
     * @return true if NumberOfActiveItems is set.
     */
    public function isSetNumberOfActiveItems()
    {
                return !is_null($this->_fields['NumberOfActiveItems']['FieldValue']);
            }

    /**
     * Set the value of NumberOfActiveItems, return this.
     *
     * @param numberOfActiveItems
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfActiveItems($value)
    {
        $this->setNumberOfActiveItems($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfSavedItems property.
     *
     * @return Integer NumberOfSavedItems.
     */
    public function getNumberOfSavedItems()
    {
        return $this->_fields['NumberOfSavedItems']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfSavedItems property.
     *
     * @param int numberOfSavedItems
     * @return this instance
     */
    public function setNumberOfSavedItems($value)
    {
        $this->_fields['NumberOfSavedItems']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfSavedItems is set.
     *
     * @return true if NumberOfSavedItems is set.
     */
    public function isSetNumberOfSavedItems()
    {
                return !is_null($this->_fields['NumberOfSavedItems']['FieldValue']);
            }

    /**
     * Set the value of NumberOfSavedItems, return this.
     *
     * @param numberOfSavedItems
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfSavedItems($value)
    {
        $this->setNumberOfSavedItems($value);
        return $this;
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
     * Get the value of the CartType property.
     *
     * @return String CartType.
     */
    public function getCartType()
    {
        return $this->_fields['CartType']['FieldValue'];
    }

    /**
     * Set the value of the CartType property.
     *
     * @param string cartType
     * @return this instance
     */
    public function setCartType($value)
    {
        $this->_fields['CartType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CartType is set.
     *
     * @return true if CartType is set.
     */
    public function isSetCartType()
    {
                return !is_null($this->_fields['CartType']['FieldValue']);
            }

    /**
     * Set the value of CartType, return this.
     *
     * @param cartType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCartType($value)
    {
        $this->setCartType($value);
        return $this;
    }

    /**
     * Get the value of the ActiveCartItemList property.
     *
     * @return List<CartItem> ActiveCartItemList.
     */
    public function getActiveCartItemList()
    {
        if ($this->_fields['ActiveCartItemList']['FieldValue'] == null)
        {
            $this->_fields['ActiveCartItemList']['FieldValue'] = array();
        }
        return $this->_fields['ActiveCartItemList']['FieldValue'];
    }

    /**
     * Set the value of the ActiveCartItemList property.
     *
     * @param array activeCartItemList
     * @return this instance
     */
    public function setActiveCartItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ActiveCartItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ActiveCartItemList.
     */
    public function unsetActiveCartItemList()
    {
        $this->_fields['ActiveCartItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if ActiveCartItemList is set.
     *
     * @return true if ActiveCartItemList is set.
     */
    public function isSetActiveCartItemList()
    {
                return !empty($this->_fields['ActiveCartItemList']['FieldValue']);
            }

    /**
     * Add values for ActiveCartItemList, return this.
     *
     * @param activeCartItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withActiveCartItemList()
    {
        foreach (func_get_args() as $ActiveCartItemList)
        {
            $this->_fields['ActiveCartItemList']['FieldValue'][] = $ActiveCartItemList;
        }
        return $this;
    }

    /**
     * Get the value of the SavedCartItemList property.
     *
     * @return List<CartItem> SavedCartItemList.
     */
    public function getSavedCartItemList()
    {
        if ($this->_fields['SavedCartItemList']['FieldValue'] == null)
        {
            $this->_fields['SavedCartItemList']['FieldValue'] = array();
        }
        return $this->_fields['SavedCartItemList']['FieldValue'];
    }

    /**
     * Set the value of the SavedCartItemList property.
     *
     * @param array savedCartItemList
     * @return this instance
     */
    public function setSavedCartItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SavedCartItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SavedCartItemList.
     */
    public function unsetSavedCartItemList()
    {
        $this->_fields['SavedCartItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if SavedCartItemList is set.
     *
     * @return true if SavedCartItemList is set.
     */
    public function isSetSavedCartItemList()
    {
                return !empty($this->_fields['SavedCartItemList']['FieldValue']);
            }

    /**
     * Add values for SavedCartItemList, return this.
     *
     * @param savedCartItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSavedCartItemList()
    {
        foreach (func_get_args() as $SavedCartItemList)
        {
            $this->_fields['SavedCartItemList']['FieldValue'][] = $SavedCartItemList;
        }
        return $this;
    }

    /**
     * Get the value of the LastUpdatedDate property.
     *
     * @return XMLGregorianCalendar LastUpdatedDate.
     */
    public function getLastUpdatedDate()
    {
        return $this->_fields['LastUpdatedDate']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedDate property.
     *
     * @param string lastUpdatedDate
     * @return this instance
     */
    public function setLastUpdatedDate($value)
    {
        $this->_fields['LastUpdatedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedDate is set.
     *
     * @return true if LastUpdatedDate is set.
     */
    public function isSetLastUpdatedDate()
    {
                return !is_null($this->_fields['LastUpdatedDate']['FieldValue']);
            }

    /**
     * Set the value of LastUpdatedDate, return this.
     *
     * @param lastUpdatedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdatedDate($value)
    {
        $this->setLastUpdatedDate($value);
        return $this;
    }

    /**
     * Get the value of the SessionId property.
     *
     * @return String SessionId.
     */
    public function getSessionId()
    {
        return $this->_fields['SessionId']['FieldValue'];
    }

    /**
     * Set the value of the SessionId property.
     *
     * @param string sessionId
     * @return this instance
     */
    public function setSessionId($value)
    {
        $this->_fields['SessionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SessionId is set.
     *
     * @return true if SessionId is set.
     */
    public function isSetSessionId()
    {
                return !is_null($this->_fields['SessionId']['FieldValue']);
            }

    /**
     * Set the value of SessionId, return this.
     *
     * @param sessionId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSessionId($value)
    {
        $this->setSessionId($value);
        return $this;
    }

    /**
     * Get the value of the CartId property.
     *
     * @return String CartId.
     */
    public function getCartId()
    {
        return $this->_fields['CartId']['FieldValue'];
    }

    /**
     * Set the value of the CartId property.
     *
     * @param string cartId
     * @return this instance
     */
    public function setCartId($value)
    {
        $this->_fields['CartId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CartId is set.
     *
     * @return true if CartId is set.
     */
    public function isSetCartId()
    {
                return !is_null($this->_fields['CartId']['FieldValue']);
            }

    /**
     * Set the value of CartId, return this.
     *
     * @param cartId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCartId($value)
    {
        $this->setCartId($value);
        return $this;
    }

}
