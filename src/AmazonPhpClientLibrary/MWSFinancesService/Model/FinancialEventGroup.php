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
 * MWSFinancesService_Model_FinancialEventGroup
 * 
 * Properties:
 * <ul>
 * 
 * <li>FinancialEventGroupId: string</li>
 * <li>ProcessingStatus: string</li>
 * <li>FundTransferStatus: string</li>
 * <li>OriginalTotal: MWSFinancesService_Model_Currency</li>
 * <li>ConvertedTotal: MWSFinancesService_Model_Currency</li>
 * <li>FundTransferDate: string</li>
 * <li>TraceId: string</li>
 * <li>AccountTail: string</li>
 * <li>BeginningBalance: MWSFinancesService_Model_Currency</li>
 * <li>FinancialEventGroupStart: string</li>
 * <li>FinancialEventGroupEnd: string</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_FinancialEventGroup extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FinancialEventGroupId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ProcessingStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FundTransferStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OriginalTotal' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'ConvertedTotal' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'FundTransferDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TraceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AccountTail' => array('FieldValue' => null, 'FieldType' => 'string'),
    'BeginningBalance' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'FinancialEventGroupStart' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FinancialEventGroupEnd' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
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
     * Get the value of the ProcessingStatus property.
     *
     * @return String ProcessingStatus.
     */
    public function getProcessingStatus()
    {
        return $this->_fields['ProcessingStatus']['FieldValue'];
    }

    /**
     * Set the value of the ProcessingStatus property.
     *
     * @param string processingStatus
     * @return this instance
     */
    public function setProcessingStatus($value)
    {
        $this->_fields['ProcessingStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProcessingStatus is set.
     *
     * @return true if ProcessingStatus is set.
     */
    public function isSetProcessingStatus()
    {
                return !is_null($this->_fields['ProcessingStatus']['FieldValue']);
            }

    /**
     * Set the value of ProcessingStatus, return this.
     *
     * @param processingStatus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProcessingStatus($value)
    {
        $this->setProcessingStatus($value);
        return $this;
    }

    /**
     * Get the value of the FundTransferStatus property.
     *
     * @return String FundTransferStatus.
     */
    public function getFundTransferStatus()
    {
        return $this->_fields['FundTransferStatus']['FieldValue'];
    }

    /**
     * Set the value of the FundTransferStatus property.
     *
     * @param string fundTransferStatus
     * @return this instance
     */
    public function setFundTransferStatus($value)
    {
        $this->_fields['FundTransferStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FundTransferStatus is set.
     *
     * @return true if FundTransferStatus is set.
     */
    public function isSetFundTransferStatus()
    {
                return !is_null($this->_fields['FundTransferStatus']['FieldValue']);
            }

    /**
     * Set the value of FundTransferStatus, return this.
     *
     * @param fundTransferStatus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFundTransferStatus($value)
    {
        $this->setFundTransferStatus($value);
        return $this;
    }

    /**
     * Get the value of the OriginalTotal property.
     *
     * @return Currency OriginalTotal.
     */
    public function getOriginalTotal()
    {
        return $this->_fields['OriginalTotal']['FieldValue'];
    }

    /**
     * Set the value of the OriginalTotal property.
     *
     * @param MWSFinancesService_Model_Currency originalTotal
     * @return this instance
     */
    public function setOriginalTotal($value)
    {
        $this->_fields['OriginalTotal']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OriginalTotal is set.
     *
     * @return true if OriginalTotal is set.
     */
    public function isSetOriginalTotal()
    {
                return !is_null($this->_fields['OriginalTotal']['FieldValue']);
            }

    /**
     * Set the value of OriginalTotal, return this.
     *
     * @param originalTotal
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOriginalTotal($value)
    {
        $this->setOriginalTotal($value);
        return $this;
    }

    /**
     * Get the value of the ConvertedTotal property.
     *
     * @return Currency ConvertedTotal.
     */
    public function getConvertedTotal()
    {
        return $this->_fields['ConvertedTotal']['FieldValue'];
    }

    /**
     * Set the value of the ConvertedTotal property.
     *
     * @param MWSFinancesService_Model_Currency convertedTotal
     * @return this instance
     */
    public function setConvertedTotal($value)
    {
        $this->_fields['ConvertedTotal']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConvertedTotal is set.
     *
     * @return true if ConvertedTotal is set.
     */
    public function isSetConvertedTotal()
    {
                return !is_null($this->_fields['ConvertedTotal']['FieldValue']);
            }

    /**
     * Set the value of ConvertedTotal, return this.
     *
     * @param convertedTotal
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConvertedTotal($value)
    {
        $this->setConvertedTotal($value);
        return $this;
    }

    /**
     * Get the value of the FundTransferDate property.
     *
     * @return XMLGregorianCalendar FundTransferDate.
     */
    public function getFundTransferDate()
    {
        return $this->_fields['FundTransferDate']['FieldValue'];
    }

    /**
     * Set the value of the FundTransferDate property.
     *
     * @param string fundTransferDate
     * @return this instance
     */
    public function setFundTransferDate($value)
    {
        $this->_fields['FundTransferDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FundTransferDate is set.
     *
     * @return true if FundTransferDate is set.
     */
    public function isSetFundTransferDate()
    {
                return !is_null($this->_fields['FundTransferDate']['FieldValue']);
            }

    /**
     * Set the value of FundTransferDate, return this.
     *
     * @param fundTransferDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFundTransferDate($value)
    {
        $this->setFundTransferDate($value);
        return $this;
    }

    /**
     * Get the value of the TraceId property.
     *
     * @return String TraceId.
     */
    public function getTraceId()
    {
        return $this->_fields['TraceId']['FieldValue'];
    }

    /**
     * Set the value of the TraceId property.
     *
     * @param string traceId
     * @return this instance
     */
    public function setTraceId($value)
    {
        $this->_fields['TraceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TraceId is set.
     *
     * @return true if TraceId is set.
     */
    public function isSetTraceId()
    {
                return !is_null($this->_fields['TraceId']['FieldValue']);
            }

    /**
     * Set the value of TraceId, return this.
     *
     * @param traceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTraceId($value)
    {
        $this->setTraceId($value);
        return $this;
    }

    /**
     * Get the value of the AccountTail property.
     *
     * @return String AccountTail.
     */
    public function getAccountTail()
    {
        return $this->_fields['AccountTail']['FieldValue'];
    }

    /**
     * Set the value of the AccountTail property.
     *
     * @param string accountTail
     * @return this instance
     */
    public function setAccountTail($value)
    {
        $this->_fields['AccountTail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AccountTail is set.
     *
     * @return true if AccountTail is set.
     */
    public function isSetAccountTail()
    {
                return !is_null($this->_fields['AccountTail']['FieldValue']);
            }

    /**
     * Set the value of AccountTail, return this.
     *
     * @param accountTail
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAccountTail($value)
    {
        $this->setAccountTail($value);
        return $this;
    }

    /**
     * Get the value of the BeginningBalance property.
     *
     * @return Currency BeginningBalance.
     */
    public function getBeginningBalance()
    {
        return $this->_fields['BeginningBalance']['FieldValue'];
    }

    /**
     * Set the value of the BeginningBalance property.
     *
     * @param MWSFinancesService_Model_Currency beginningBalance
     * @return this instance
     */
    public function setBeginningBalance($value)
    {
        $this->_fields['BeginningBalance']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BeginningBalance is set.
     *
     * @return true if BeginningBalance is set.
     */
    public function isSetBeginningBalance()
    {
                return !is_null($this->_fields['BeginningBalance']['FieldValue']);
            }

    /**
     * Set the value of BeginningBalance, return this.
     *
     * @param beginningBalance
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBeginningBalance($value)
    {
        $this->setBeginningBalance($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupStart property.
     *
     * @return XMLGregorianCalendar FinancialEventGroupStart.
     */
    public function getFinancialEventGroupStart()
    {
        return $this->_fields['FinancialEventGroupStart']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupStart property.
     *
     * @param string financialEventGroupStart
     * @return this instance
     */
    public function setFinancialEventGroupStart($value)
    {
        $this->_fields['FinancialEventGroupStart']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEventGroupStart is set.
     *
     * @return true if FinancialEventGroupStart is set.
     */
    public function isSetFinancialEventGroupStart()
    {
                return !is_null($this->_fields['FinancialEventGroupStart']['FieldValue']);
            }

    /**
     * Set the value of FinancialEventGroupStart, return this.
     *
     * @param financialEventGroupStart
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEventGroupStart($value)
    {
        $this->setFinancialEventGroupStart($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupEnd property.
     *
     * @return XMLGregorianCalendar FinancialEventGroupEnd.
     */
    public function getFinancialEventGroupEnd()
    {
        return $this->_fields['FinancialEventGroupEnd']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupEnd property.
     *
     * @param string financialEventGroupEnd
     * @return this instance
     */
    public function setFinancialEventGroupEnd($value)
    {
        $this->_fields['FinancialEventGroupEnd']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEventGroupEnd is set.
     *
     * @return true if FinancialEventGroupEnd is set.
     */
    public function isSetFinancialEventGroupEnd()
    {
                return !is_null($this->_fields['FinancialEventGroupEnd']['FieldValue']);
            }

    /**
     * Set the value of FinancialEventGroupEnd, return this.
     *
     * @param financialEventGroupEnd
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEventGroupEnd($value)
    {
        $this->setFinancialEventGroupEnd($value);
        return $this;
    }

}
