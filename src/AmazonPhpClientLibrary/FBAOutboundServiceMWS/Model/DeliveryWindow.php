<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-02-01
 * Generated: Fri Jan 08 13:26:48 PST 2016
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_DeliveryWindow
 * 
 * Properties:
 * <ul>
 * 
 * <li>StartDateTime: string</li>
 * <li>EndDateTime: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_DeliveryWindow extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'StartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EndDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the StartDateTime property.
     *
     * @return XMLGregorianCalendar StartDateTime.
     */
    public function getStartDateTime()
    {
        return $this->_fields['StartDateTime']['FieldValue'];
    }

    /**
     * Set the value of the StartDateTime property.
     *
     * @param string startDateTime
     * @return this instance
     */
    public function setStartDateTime($value)
    {
        $this->_fields['StartDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StartDateTime is set.
     *
     * @return true if StartDateTime is set.
     */
    public function isSetStartDateTime()
    {
                return !is_null($this->_fields['StartDateTime']['FieldValue']);
            }

    /**
     * Set the value of StartDateTime, return this.
     *
     * @param startDateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStartDateTime($value)
    {
        $this->setStartDateTime($value);
        return $this;
    }

    /**
     * Get the value of the EndDateTime property.
     *
     * @return XMLGregorianCalendar EndDateTime.
     */
    public function getEndDateTime()
    {
        return $this->_fields['EndDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EndDateTime property.
     *
     * @param string endDateTime
     * @return this instance
     */
    public function setEndDateTime($value)
    {
        $this->_fields['EndDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EndDateTime is set.
     *
     * @return true if EndDateTime is set.
     */
    public function isSetEndDateTime()
    {
                return !is_null($this->_fields['EndDateTime']['FieldValue']);
            }

    /**
     * Set the value of EndDateTime, return this.
     *
     * @param endDateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEndDateTime($value)
    {
        $this->setEndDateTime($value);
        return $this;
    }

}
