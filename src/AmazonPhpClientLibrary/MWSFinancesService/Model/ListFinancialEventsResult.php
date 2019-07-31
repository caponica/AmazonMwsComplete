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
 * MWSFinancesService_Model_ListFinancialEventsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>FinancialEvents: MWSFinancesService_Model_FinancialEvents</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ListFinancialEventsResult extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FinancialEvents' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_FinancialEvents'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEvents property.
     *
     * @return FinancialEvents FinancialEvents.
     */
    public function getFinancialEvents()
    {
        return $this->_fields['FinancialEvents']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEvents property.
     *
     * @param MWSFinancesService_Model_FinancialEvents financialEvents
     * @return this instance
     */
    public function setFinancialEvents($value)
    {
        $this->_fields['FinancialEvents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEvents is set.
     *
     * @return true if FinancialEvents is set.
     */
    public function isSetFinancialEvents()
    {
                return !is_null($this->_fields['FinancialEvents']['FieldValue']);
            }

    /**
     * Set the value of FinancialEvents, return this.
     *
     * @param financialEvents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEvents($value)
    {
        $this->setFinancialEvents($value);
        return $this;
    }

}
