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
 * FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>PackageNumber: int</li>
 * <li>TrackingNumber: string</li>
 * <li>CarrierCode: string</li>
 * <li>CarrierPhoneNumber: string</li>
 * <li>CarrierURL: string</li>
 * <li>ShipDate: string</li>
 * <li>EstimatedArrivalDate: string</li>
 * <li>ShipToAddress: FBAOutboundServiceMWS_Model_TrackingAddress</li>
 * <li>CurrentStatus: string</li>
 * <li>SignedForBy: string</li>
 * <li>AdditionalLocationInfo: string</li>
 * <li>TrackingEvents: FBAOutboundServiceMWS_Model_TrackingEventList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'),
    'TrackingNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CarrierCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CarrierPhoneNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CarrierURL' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EstimatedArrivalDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipToAddress' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_TrackingAddress'),
    'CurrentStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SignedForBy' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AdditionalLocationInfo' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TrackingEvents' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_TrackingEventList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PackageNumber property.
     *
     * @return int PackageNumber.
     */
    public function getPackageNumber()
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of the PackageNumber property.
     *
     * @param int packageNumber
     * @return this instance
     */
    public function setPackageNumber($value)
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageNumber is set.
     *
     * @return true if PackageNumber is set.
     */
    public function isSetPackageNumber()
    {
                return !is_null($this->_fields['PackageNumber']['FieldValue']);
            }

    /**
     * Set the value of PackageNumber, return this.
     *
     * @param packageNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);
        return $this;
    }

    /**
     * Get the value of the TrackingNumber property.
     *
     * @return String TrackingNumber.
     */
    public function getTrackingNumber()
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }

    /**
     * Set the value of the TrackingNumber property.
     *
     * @param string trackingNumber
     * @return this instance
     */
    public function setTrackingNumber($value)
    {
        $this->_fields['TrackingNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TrackingNumber is set.
     *
     * @return true if TrackingNumber is set.
     */
    public function isSetTrackingNumber()
    {
                return !is_null($this->_fields['TrackingNumber']['FieldValue']);
            }

    /**
     * Set the value of TrackingNumber, return this.
     *
     * @param trackingNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTrackingNumber($value)
    {
        $this->setTrackingNumber($value);
        return $this;
    }

    /**
     * Get the value of the CarrierCode property.
     *
     * @return String CarrierCode.
     */
    public function getCarrierCode()
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }

    /**
     * Set the value of the CarrierCode property.
     *
     * @param string carrierCode
     * @return this instance
     */
    public function setCarrierCode($value)
    {
        $this->_fields['CarrierCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierCode is set.
     *
     * @return true if CarrierCode is set.
     */
    public function isSetCarrierCode()
    {
                return !is_null($this->_fields['CarrierCode']['FieldValue']);
            }

    /**
     * Set the value of CarrierCode, return this.
     *
     * @param carrierCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierCode($value)
    {
        $this->setCarrierCode($value);
        return $this;
    }

    /**
     * Get the value of the CarrierPhoneNumber property.
     *
     * @return String CarrierPhoneNumber.
     */
    public function getCarrierPhoneNumber()
    {
        return $this->_fields['CarrierPhoneNumber']['FieldValue'];
    }

    /**
     * Set the value of the CarrierPhoneNumber property.
     *
     * @param string carrierPhoneNumber
     * @return this instance
     */
    public function setCarrierPhoneNumber($value)
    {
        $this->_fields['CarrierPhoneNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierPhoneNumber is set.
     *
     * @return true if CarrierPhoneNumber is set.
     */
    public function isSetCarrierPhoneNumber()
    {
                return !is_null($this->_fields['CarrierPhoneNumber']['FieldValue']);
            }

    /**
     * Set the value of CarrierPhoneNumber, return this.
     *
     * @param carrierPhoneNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierPhoneNumber($value)
    {
        $this->setCarrierPhoneNumber($value);
        return $this;
    }

    /**
     * Get the value of the CarrierURL property.
     *
     * @return String CarrierURL.
     */
    public function getCarrierURL()
    {
        return $this->_fields['CarrierURL']['FieldValue'];
    }

    /**
     * Set the value of the CarrierURL property.
     *
     * @param string carrierURL
     * @return this instance
     */
    public function setCarrierURL($value)
    {
        $this->_fields['CarrierURL']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierURL is set.
     *
     * @return true if CarrierURL is set.
     */
    public function isSetCarrierURL()
    {
                return !is_null($this->_fields['CarrierURL']['FieldValue']);
            }

    /**
     * Set the value of CarrierURL, return this.
     *
     * @param carrierURL
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierURL($value)
    {
        $this->setCarrierURL($value);
        return $this;
    }

    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
                return !is_null($this->_fields['ShipDate']['FieldValue']);
            }

    /**
     * Set the value of ShipDate, return this.
     *
     * @param shipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipDate($value)
    {
        $this->setShipDate($value);
        return $this;
    }

    /**
     * Get the value of the EstimatedArrivalDate property.
     *
     * @return XMLGregorianCalendar EstimatedArrivalDate.
     */
    public function getEstimatedArrivalDate()
    {
        return $this->_fields['EstimatedArrivalDate']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedArrivalDate property.
     *
     * @param string estimatedArrivalDate
     * @return this instance
     */
    public function setEstimatedArrivalDate($value)
    {
        $this->_fields['EstimatedArrivalDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EstimatedArrivalDate is set.
     *
     * @return true if EstimatedArrivalDate is set.
     */
    public function isSetEstimatedArrivalDate()
    {
                return !is_null($this->_fields['EstimatedArrivalDate']['FieldValue']);
            }

    /**
     * Set the value of EstimatedArrivalDate, return this.
     *
     * @param estimatedArrivalDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEstimatedArrivalDate($value)
    {
        $this->setEstimatedArrivalDate($value);
        return $this;
    }

    /**
     * Get the value of the ShipToAddress property.
     *
     * @return TrackingAddress ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipToAddress property.
     *
     * @param FBAOutboundServiceMWS_Model_TrackingAddress shipToAddress
     * @return this instance
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set.
     */
    public function isSetShipToAddress()
    {
                return !is_null($this->_fields['ShipToAddress']['FieldValue']);
            }

    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param shipToAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipToAddress($value)
    {
        $this->setShipToAddress($value);
        return $this;
    }

    /**
     * Get the value of the CurrentStatus property.
     *
     * @return String CurrentStatus.
     */
    public function getCurrentStatus()
    {
        return $this->_fields['CurrentStatus']['FieldValue'];
    }

    /**
     * Set the value of the CurrentStatus property.
     *
     * @param string currentStatus
     * @return this instance
     */
    public function setCurrentStatus($value)
    {
        $this->_fields['CurrentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CurrentStatus is set.
     *
     * @return true if CurrentStatus is set.
     */
    public function isSetCurrentStatus()
    {
                return !is_null($this->_fields['CurrentStatus']['FieldValue']);
            }

    /**
     * Set the value of CurrentStatus, return this.
     *
     * @param currentStatus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCurrentStatus($value)
    {
        $this->setCurrentStatus($value);
        return $this;
    }

    /**
     * Get the value of the SignedForBy property.
     *
     * @return String SignedForBy.
     */
    public function getSignedForBy()
    {
        return $this->_fields['SignedForBy']['FieldValue'];
    }

    /**
     * Set the value of the SignedForBy property.
     *
     * @param string signedForBy
     * @return this instance
     */
    public function setSignedForBy($value)
    {
        $this->_fields['SignedForBy']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SignedForBy is set.
     *
     * @return true if SignedForBy is set.
     */
    public function isSetSignedForBy()
    {
                return !is_null($this->_fields['SignedForBy']['FieldValue']);
            }

    /**
     * Set the value of SignedForBy, return this.
     *
     * @param signedForBy
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSignedForBy($value)
    {
        $this->setSignedForBy($value);
        return $this;
    }

    /**
     * Get the value of the AdditionalLocationInfo property.
     *
     * @return String AdditionalLocationInfo.
     */
    public function getAdditionalLocationInfo()
    {
        return $this->_fields['AdditionalLocationInfo']['FieldValue'];
    }

    /**
     * Set the value of the AdditionalLocationInfo property.
     *
     * @param string additionalLocationInfo
     * @return this instance
     */
    public function setAdditionalLocationInfo($value)
    {
        $this->_fields['AdditionalLocationInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdditionalLocationInfo is set.
     *
     * @return true if AdditionalLocationInfo is set.
     */
    public function isSetAdditionalLocationInfo()
    {
                return !is_null($this->_fields['AdditionalLocationInfo']['FieldValue']);
            }

    /**
     * Set the value of AdditionalLocationInfo, return this.
     *
     * @param additionalLocationInfo
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdditionalLocationInfo($value)
    {
        $this->setAdditionalLocationInfo($value);
        return $this;
    }

    /**
     * Get the value of the TrackingEvents property.
     *
     * @return TrackingEventList TrackingEvents.
     */
    public function getTrackingEvents()
    {
        return $this->_fields['TrackingEvents']['FieldValue'];
    }

    /**
     * Set the value of the TrackingEvents property.
     *
     * @param FBAOutboundServiceMWS_Model_TrackingEventList trackingEvents
     * @return this instance
     */
    public function setTrackingEvents($value)
    {
        $this->_fields['TrackingEvents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TrackingEvents is set.
     *
     * @return true if TrackingEvents is set.
     */
    public function isSetTrackingEvents()
    {
                return !is_null($this->_fields['TrackingEvents']['FieldValue']);
            }

    /**
     * Set the value of TrackingEvents, return this.
     *
     * @param trackingEvents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTrackingEvents($value)
    {
        $this->setTrackingEvents($value);
        return $this;
    }

}
