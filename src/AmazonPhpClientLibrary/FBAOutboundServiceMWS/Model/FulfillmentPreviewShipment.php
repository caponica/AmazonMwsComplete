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
 * FBAOutboundServiceMWS_Model_FulfillmentPreviewShipment
 * 
 * Properties:
 * <ul>
 * 
 * <li>EarliestShipDate: string</li>
 * <li>LatestShipDate: string</li>
 * <li>EarliestArrivalDate: string</li>
 * <li>LatestArrivalDate: string</li>
 * <li>FulfillmentPreviewItems: FBAOutboundServiceMWS_Model_FulfillmentPreviewItemList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_FulfillmentPreviewShipment extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'EarliestShipDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LatestShipDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EarliestArrivalDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LatestArrivalDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentPreviewItems' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentPreviewItemList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return XMLGregorianCalendar EarliestShipDate.
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @return this instance
     */
    public function setEarliestShipDate($value)
    {
        $this->_fields['EarliestShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestShipDate is set.
     *
     * @return true if EarliestShipDate is set.
     */
    public function isSetEarliestShipDate()
    {
                return !is_null($this->_fields['EarliestShipDate']['FieldValue']);
            }

    /**
     * Set the value of EarliestShipDate, return this.
     *
     * @param earliestShipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEarliestShipDate($value)
    {
        $this->setEarliestShipDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestShipDate property.
     *
     * @return XMLGregorianCalendar LatestShipDate.
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @return this instance
     */
    public function setLatestShipDate($value)
    {
        $this->_fields['LatestShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestShipDate is set.
     *
     * @return true if LatestShipDate is set.
     */
    public function isSetLatestShipDate()
    {
                return !is_null($this->_fields['LatestShipDate']['FieldValue']);
            }

    /**
     * Set the value of LatestShipDate, return this.
     *
     * @param latestShipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLatestShipDate($value)
    {
        $this->setLatestShipDate($value);
        return $this;
    }

    /**
     * Get the value of the EarliestArrivalDate property.
     *
     * @return XMLGregorianCalendar EarliestArrivalDate.
     */
    public function getEarliestArrivalDate()
    {
        return $this->_fields['EarliestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestArrivalDate property.
     *
     * @param string earliestArrivalDate
     * @return this instance
     */
    public function setEarliestArrivalDate($value)
    {
        $this->_fields['EarliestArrivalDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestArrivalDate is set.
     *
     * @return true if EarliestArrivalDate is set.
     */
    public function isSetEarliestArrivalDate()
    {
                return !is_null($this->_fields['EarliestArrivalDate']['FieldValue']);
            }

    /**
     * Set the value of EarliestArrivalDate, return this.
     *
     * @param earliestArrivalDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEarliestArrivalDate($value)
    {
        $this->setEarliestArrivalDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestArrivalDate property.
     *
     * @return XMLGregorianCalendar LatestArrivalDate.
     */
    public function getLatestArrivalDate()
    {
        return $this->_fields['LatestArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestArrivalDate property.
     *
     * @param string latestArrivalDate
     * @return this instance
     */
    public function setLatestArrivalDate($value)
    {
        $this->_fields['LatestArrivalDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestArrivalDate is set.
     *
     * @return true if LatestArrivalDate is set.
     */
    public function isSetLatestArrivalDate()
    {
                return !is_null($this->_fields['LatestArrivalDate']['FieldValue']);
            }

    /**
     * Set the value of LatestArrivalDate, return this.
     *
     * @param latestArrivalDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLatestArrivalDate($value)
    {
        $this->setLatestArrivalDate($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentPreviewItems property.
     *
     * @return FulfillmentPreviewItemList FulfillmentPreviewItems.
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->_fields['FulfillmentPreviewItems']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviewItems property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentPreviewItemList fulfillmentPreviewItems
     * @return this instance
     */
    public function setFulfillmentPreviewItems($value)
    {
        $this->_fields['FulfillmentPreviewItems']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentPreviewItems is set.
     *
     * @return true if FulfillmentPreviewItems is set.
     */
    public function isSetFulfillmentPreviewItems()
    {
                return !is_null($this->_fields['FulfillmentPreviewItems']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentPreviewItems, return this.
     *
     * @param fulfillmentPreviewItems
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentPreviewItems($value)
    {
        $this->setFulfillmentPreviewItems($value);
        return $this;
    }

}
