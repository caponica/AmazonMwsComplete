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
 * FBAInboundServiceMWS_Model_PartneredSmallParcelDataOutput
 * 
 * Properties:
 * <ul>
 * 
 * <li>PackageList: FBAInboundServiceMWS_Model_PartneredSmallParcelPackageOutputList</li>
 * <li>PartneredEstimate: FBAInboundServiceMWS_Model_PartneredEstimate</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_PartneredSmallParcelDataOutput extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PackageList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_PartneredSmallParcelPackageOutputList'),
    'PartneredEstimate' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_PartneredEstimate'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return PartneredSmallParcelPackageOutputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param FBAInboundServiceMWS_Model_PartneredSmallParcelPackageOutputList packageList
     * @return this instance
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageList is set.
     *
     * @return true if PackageList is set.
     */
    public function isSetPackageList()
    {
                return !is_null($this->_fields['PackageList']['FieldValue']);
            }

    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);
        return $this;
    }

    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return PartneredEstimate PartneredEstimate.
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param FBAInboundServiceMWS_Model_PartneredEstimate partneredEstimate
     * @return this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set.
     */
    public function isSetPartneredEstimate()
    {
                return !is_null($this->_fields['PartneredEstimate']['FieldValue']);
            }

    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param partneredEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);
        return $this;
    }

}
