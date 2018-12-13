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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_TrackingEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>EventDate: string</li>
 * <li>EventAddress: FBAOutboundServiceMWS_Model_TrackingAddress</li>
 * <li>EventCode: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_TrackingEvent extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'EventDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EventAddress' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_TrackingAddress'),
    'EventCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the EventDate property.
     *
     * @return XMLGregorianCalendar EventDate.
     */
    public function getEventDate()
    {
        return $this->_fields['EventDate']['FieldValue'];
    }

    /**
     * Set the value of the EventDate property.
     *
     * @param string eventDate
     * @return this instance
     */
    public function setEventDate($value)
    {
        $this->_fields['EventDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EventDate is set.
     *
     * @return true if EventDate is set.
     */
    public function isSetEventDate()
    {
                return !is_null($this->_fields['EventDate']['FieldValue']);
            }

    /**
     * Set the value of EventDate, return this.
     *
     * @param eventDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEventDate($value)
    {
        $this->setEventDate($value);
        return $this;
    }

    /**
     * Get the value of the EventAddress property.
     *
     * @return TrackingAddress EventAddress.
     */
    public function getEventAddress()
    {
        return $this->_fields['EventAddress']['FieldValue'];
    }

    /**
     * Set the value of the EventAddress property.
     *
     * @param FBAOutboundServiceMWS_Model_TrackingAddress eventAddress
     * @return this instance
     */
    public function setEventAddress($value)
    {
        $this->_fields['EventAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EventAddress is set.
     *
     * @return true if EventAddress is set.
     */
    public function isSetEventAddress()
    {
                return !is_null($this->_fields['EventAddress']['FieldValue']);
            }

    /**
     * Set the value of EventAddress, return this.
     *
     * @param eventAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEventAddress($value)
    {
        $this->setEventAddress($value);
        return $this;
    }

    /**
     * Get the value of the EventCode property.
     *
     * @return String EventCode.
     */
    public function getEventCode()
    {
        return $this->_fields['EventCode']['FieldValue'];
    }

    /**
     * Set the value of the EventCode property.
     *
     * @param string eventCode
     * @return this instance
     */
    public function setEventCode($value)
    {
        $this->_fields['EventCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EventCode is set.
     *
     * @return true if EventCode is set.
     */
    public function isSetEventCode()
    {
                return !is_null($this->_fields['EventCode']['FieldValue']);
            }

    /**
     * Set the value of EventCode, return this.
     *
     * @param eventCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEventCode($value)
    {
        $this->setEventCode($value);
        return $this;
    }

}
