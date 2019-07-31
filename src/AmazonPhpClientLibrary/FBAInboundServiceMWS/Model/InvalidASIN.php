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
 * FBAInboundServiceMWS_Model_InvalidASIN
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASIN: string</li>
 * <li>ErrorReason: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_InvalidASIN extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ErrorReason' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
                return !is_null($this->_fields['ASIN']['FieldValue']);
            }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Get the value of the ErrorReason property.
     *
     * @return String ErrorReason.
     */
    public function getErrorReason()
    {
        return $this->_fields['ErrorReason']['FieldValue'];
    }

    /**
     * Set the value of the ErrorReason property.
     *
     * @param string errorReason
     * @return this instance
     */
    public function setErrorReason($value)
    {
        $this->_fields['ErrorReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ErrorReason is set.
     *
     * @return true if ErrorReason is set.
     */
    public function isSetErrorReason()
    {
                return !is_null($this->_fields['ErrorReason']['FieldValue']);
            }

    /**
     * Set the value of ErrorReason, return this.
     *
     * @param errorReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withErrorReason($value)
    {
        $this->setErrorReason($value);
        return $this;
    }

}
