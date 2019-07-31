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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_ListFinancialEventsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MaxResultsPerPage: int</li>
 * <li>AmazonOrderId: string</li>
 * <li>FinancialEventGroupId: string</li>
 * <li>PostedAfter: string</li>
 * <li>PostedBefore: string</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ListFinancialEventsRequest extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'),
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FinancialEventGroupId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the MaxResultsPerPage property.
     *
     * @return Integer MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @return this instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
                return !is_null($this->_fields['MaxResultsPerPage']['FieldValue']);
            }

    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param maxResultsPerPage
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMaxResultsPerPage($value)
    {
        $this->setMaxResultsPerPage($value);
        return $this;
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupId property.
     *
     * @return String FinancialEventGroupId.
     */
    public function getFinancialEventGroupId()
    {
        return $this->_fields['FinancialEventGroupId']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupId property.
     *
     * @param string financialEventGroupId
     * @return this instance
     */
    public function setFinancialEventGroupId($value)
    {
        $this->_fields['FinancialEventGroupId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEventGroupId is set.
     *
     * @return true if FinancialEventGroupId is set.
     */
    public function isSetFinancialEventGroupId()
    {
                return !is_null($this->_fields['FinancialEventGroupId']['FieldValue']);
            }

    /**
     * Set the value of FinancialEventGroupId, return this.
     *
     * @param financialEventGroupId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEventGroupId($value)
    {
        $this->setFinancialEventGroupId($value);
        return $this;
    }

    /**
     * Get the value of the PostedAfter property.
     *
     * @return XMLGregorianCalendar PostedAfter.
     */
    public function getPostedAfter()
    {
        return $this->_fields['PostedAfter']['FieldValue'];
    }

    /**
     * Set the value of the PostedAfter property.
     *
     * @param string postedAfter
     * @return this instance
     */
    public function setPostedAfter($value)
    {
        $this->_fields['PostedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedAfter is set.
     *
     * @return true if PostedAfter is set.
     */
    public function isSetPostedAfter()
    {
                return !is_null($this->_fields['PostedAfter']['FieldValue']);
            }

    /**
     * Set the value of PostedAfter, return this.
     *
     * @param postedAfter
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedAfter($value)
    {
        $this->setPostedAfter($value);
        return $this;
    }

    /**
     * Get the value of the PostedBefore property.
     *
     * @return XMLGregorianCalendar PostedBefore.
     */
    public function getPostedBefore()
    {
        return $this->_fields['PostedBefore']['FieldValue'];
    }

    /**
     * Set the value of the PostedBefore property.
     *
     * @param string postedBefore
     * @return this instance
     */
    public function setPostedBefore($value)
    {
        $this->_fields['PostedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedBefore is set.
     *
     * @return true if PostedBefore is set.
     */
    public function isSetPostedBefore()
    {
                return !is_null($this->_fields['PostedBefore']['FieldValue']);
            }

    /**
     * Set the value of PostedBefore, return this.
     *
     * @param postedBefore
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedBefore($value)
    {
        $this->setPostedBefore($value);
        return $this;
    }

}
