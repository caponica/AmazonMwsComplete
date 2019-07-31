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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Tue Sep 11 14:38:40 PDT 2018
 */

/**
 *  @see FBAInventoryServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInventoryServiceMWS_Model_Timepoint
 * 
 * Properties:
 * <ul>
 * 
 * <li>TimepointType: string</li>
 * <li>DateTime: string</li>
 *
 * </ul>
 */

 class FBAInventoryServiceMWS_Model_Timepoint extends FBAInventoryServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TimepointType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TimepointType property.
     *
     * @return String TimepointType.
     */
    public function getTimepointType()
    {
        return $this->_fields['TimepointType']['FieldValue'];
    }

    /**
     * Set the value of the TimepointType property.
     *
     * @param string timepointType
     * @return this instance
     */
    public function setTimepointType($value)
    {
        $this->_fields['TimepointType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TimepointType is set.
     *
     * @return true if TimepointType is set.
     */
    public function isSetTimepointType()
    {
                return !is_null($this->_fields['TimepointType']['FieldValue']);
            }

    /**
     * Set the value of TimepointType, return this.
     *
     * @param timepointType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTimepointType($value)
    {
        $this->setTimepointType($value);
        return $this;
    }

    /**
     * Get the value of the DateTime property.
     *
     * @return XMLGregorianCalendar DateTime.
     */
    public function getDateTime()
    {
        return $this->_fields['DateTime']['FieldValue'];
    }

    /**
     * Set the value of the DateTime property.
     *
     * @param string dateTime
     * @return this instance
     */
    public function setDateTime($value)
    {
        $this->_fields['DateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DateTime is set.
     *
     * @return true if DateTime is set.
     */
    public function isSetDateTime()
    {
                return !is_null($this->_fields['DateTime']['FieldValue']);
            }

    /**
     * Set the value of DateTime, return this.
     *
     * @param dateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDateTime($value)
    {
        $this->setDateTime($value);
        return $this;
    }

}
