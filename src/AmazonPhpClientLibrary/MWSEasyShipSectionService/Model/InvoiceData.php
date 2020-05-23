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
 * MWSEasyShipSectionService_Model_InvoiceData
 * 
 * Properties:
 * <ul>
 * 
 * <li>InvoiceNumber: string</li>
 * <li>InvoiceDate: string</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_InvoiceData extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InvoiceNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
    'InvoiceDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InvoiceNumber property.
     *
     * @return String InvoiceNumber.
     */
    public function getInvoiceNumber()
    {
        return $this->_fields['InvoiceNumber']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceNumber property.
     *
     * @param string invoiceNumber
     * @return this instance
     */
    public function setInvoiceNumber($value)
    {
        $this->_fields['InvoiceNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceNumber is set.
     *
     * @return true if InvoiceNumber is set.
     */
    public function isSetInvoiceNumber()
    {
                return !is_null($this->_fields['InvoiceNumber']['FieldValue']);
            }

    /**
     * Set the value of InvoiceNumber, return this.
     *
     * @param invoiceNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvoiceNumber($value)
    {
        $this->setInvoiceNumber($value);
        return $this;
    }

    /**
     * Get the value of the InvoiceDate property.
     *
     * @return XMLGregorianCalendar InvoiceDate.
     */
    public function getInvoiceDate()
    {
        return $this->_fields['InvoiceDate']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceDate property.
     *
     * @param string invoiceDate
     * @return this instance
     */
    public function setInvoiceDate($value)
    {
        $this->_fields['InvoiceDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceDate is set.
     *
     * @return true if InvoiceDate is set.
     */
    public function isSetInvoiceDate()
    {
                return !is_null($this->_fields['InvoiceDate']['FieldValue']);
            }

    /**
     * Set the value of InvoiceDate, return this.
     *
     * @param invoiceDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvoiceDate($value)
    {
        $this->setInvoiceDate($value);
        return $this;
    }

}
