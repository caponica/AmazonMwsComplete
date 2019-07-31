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
 * FBAInboundServiceMWS_Model_NonPartneredLtlDataInput
 * 
 * Properties:
 * <ul>
 * 
 * <li>CarrierName: string</li>
 * <li>ProNumber: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_NonPartneredLtlDataInput extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ProNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
                return !is_null($this->_fields['CarrierName']['FieldValue']);
            }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the ProNumber property.
     *
     * @return String ProNumber.
     */
    public function getProNumber()
    {
        return $this->_fields['ProNumber']['FieldValue'];
    }

    /**
     * Set the value of the ProNumber property.
     *
     * @param string proNumber
     * @return this instance
     */
    public function setProNumber($value)
    {
        $this->_fields['ProNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProNumber is set.
     *
     * @return true if ProNumber is set.
     */
    public function isSetProNumber()
    {
                return !is_null($this->_fields['ProNumber']['FieldValue']);
            }

    /**
     * Set the value of ProNumber, return this.
     *
     * @param proNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProNumber($value)
    {
        $this->setProNumber($value);
        return $this;
    }

}
