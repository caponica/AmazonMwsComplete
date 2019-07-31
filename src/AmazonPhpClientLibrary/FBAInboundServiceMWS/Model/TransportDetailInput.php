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
 * FBAInboundServiceMWS_Model_TransportDetailInput
 * 
 * Properties:
 * <ul>
 * 
 * <li>PartneredSmallParcelData: FBAInboundServiceMWS_Model_PartneredSmallParcelDataInput</li>
 * <li>NonPartneredSmallParcelData: FBAInboundServiceMWS_Model_NonPartneredSmallParcelDataInput</li>
 * <li>PartneredLtlData: FBAInboundServiceMWS_Model_PartneredLtlDataInput</li>
 * <li>NonPartneredLtlData: FBAInboundServiceMWS_Model_NonPartneredLtlDataInput</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_TransportDetailInput extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_PartneredSmallParcelDataInput'),
    'NonPartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_NonPartneredSmallParcelDataInput'),
    'PartneredLtlData' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_PartneredLtlDataInput'),
    'NonPartneredLtlData' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_NonPartneredLtlDataInput'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return PartneredSmallParcelDataInput PartneredSmallParcelData.
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param FBAInboundServiceMWS_Model_PartneredSmallParcelDataInput partneredSmallParcelData
     * @return this instance
     */
    public function setPartneredSmallParcelData($value)
    {
        $this->_fields['PartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredSmallParcelData is set.
     *
     * @return true if PartneredSmallParcelData is set.
     */
    public function isSetPartneredSmallParcelData()
    {
                return !is_null($this->_fields['PartneredSmallParcelData']['FieldValue']);
            }

    /**
     * Set the value of PartneredSmallParcelData, return this.
     *
     * @param partneredSmallParcelData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredSmallParcelData($value)
    {
        $this->setPartneredSmallParcelData($value);
        return $this;
    }

    /**
     * Get the value of the NonPartneredSmallParcelData property.
     *
     * @return NonPartneredSmallParcelDataInput NonPartneredSmallParcelData.
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param FBAInboundServiceMWS_Model_NonPartneredSmallParcelDataInput nonPartneredSmallParcelData
     * @return this instance
     */
    public function setNonPartneredSmallParcelData($value)
    {
        $this->_fields['NonPartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NonPartneredSmallParcelData is set.
     *
     * @return true if NonPartneredSmallParcelData is set.
     */
    public function isSetNonPartneredSmallParcelData()
    {
                return !is_null($this->_fields['NonPartneredSmallParcelData']['FieldValue']);
            }

    /**
     * Set the value of NonPartneredSmallParcelData, return this.
     *
     * @param nonPartneredSmallParcelData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNonPartneredSmallParcelData($value)
    {
        $this->setNonPartneredSmallParcelData($value);
        return $this;
    }

    /**
     * Get the value of the PartneredLtlData property.
     *
     * @return PartneredLtlDataInput PartneredLtlData.
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param FBAInboundServiceMWS_Model_PartneredLtlDataInput partneredLtlData
     * @return this instance
     */
    public function setPartneredLtlData($value)
    {
        $this->_fields['PartneredLtlData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredLtlData is set.
     *
     * @return true if PartneredLtlData is set.
     */
    public function isSetPartneredLtlData()
    {
                return !is_null($this->_fields['PartneredLtlData']['FieldValue']);
            }

    /**
     * Set the value of PartneredLtlData, return this.
     *
     * @param partneredLtlData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredLtlData($value)
    {
        $this->setPartneredLtlData($value);
        return $this;
    }

    /**
     * Get the value of the NonPartneredLtlData property.
     *
     * @return NonPartneredLtlDataInput NonPartneredLtlData.
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param FBAInboundServiceMWS_Model_NonPartneredLtlDataInput nonPartneredLtlData
     * @return this instance
     */
    public function setNonPartneredLtlData($value)
    {
        $this->_fields['NonPartneredLtlData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NonPartneredLtlData is set.
     *
     * @return true if NonPartneredLtlData is set.
     */
    public function isSetNonPartneredLtlData()
    {
                return !is_null($this->_fields['NonPartneredLtlData']['FieldValue']);
            }

    /**
     * Set the value of NonPartneredLtlData, return this.
     *
     * @param nonPartneredLtlData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNonPartneredLtlData($value)
    {
        $this->setNonPartneredLtlData($value);
        return $this;
    }

}
