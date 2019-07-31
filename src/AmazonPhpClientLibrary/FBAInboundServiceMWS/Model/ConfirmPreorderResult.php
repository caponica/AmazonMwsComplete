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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_ConfirmPreorderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ConfirmedNeedByDate: string</li>
 * <li>ConfirmedFulfillableDate: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_ConfirmPreorderResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ConfirmedNeedByDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ConfirmedFulfillableDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ConfirmedNeedByDate property.
     *
     * @return String ConfirmedNeedByDate.
     */
    public function getConfirmedNeedByDate()
    {
        return $this->_fields['ConfirmedNeedByDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedNeedByDate property.
     *
     * @param string confirmedNeedByDate
     * @return this instance
     */
    public function setConfirmedNeedByDate($value)
    {
        $this->_fields['ConfirmedNeedByDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmedNeedByDate is set.
     *
     * @return true if ConfirmedNeedByDate is set.
     */
    public function isSetConfirmedNeedByDate()
    {
                return !is_null($this->_fields['ConfirmedNeedByDate']['FieldValue']);
            }

    /**
     * Set the value of ConfirmedNeedByDate, return this.
     *
     * @param confirmedNeedByDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConfirmedNeedByDate($value)
    {
        $this->setConfirmedNeedByDate($value);
        return $this;
    }

    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return String ConfirmedFulfillableDate.
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @return this instance
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set.
     */
    public function isSetConfirmedFulfillableDate()
    {
                return !is_null($this->_fields['ConfirmedFulfillableDate']['FieldValue']);
            }

    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param confirmedFulfillableDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConfirmedFulfillableDate($value)
    {
        $this->setConfirmedFulfillableDate($value);
        return $this;
    }

}
