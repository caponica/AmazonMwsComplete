<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_LabelFormatOptionRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>IncludePackingSlipWithLabel: bool</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_LabelFormatOptionRequest extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'IncludePackingSlipWithLabel' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of IncludePackingSlipWithLabel.
     *
     * @return true if IncludePackingSlipWithLabel is set to true.
     */
    public function isIncludePackingSlipWithLabel()
    {
        return !is_null($this->_fields['IncludePackingSlipWithLabel']['FieldValue']) && $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Get the value of the IncludePackingSlipWithLabel property.
     *
     * @return Boolean IncludePackingSlipWithLabel.
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Set the value of the IncludePackingSlipWithLabel property.
     *
     * @param bool includePackingSlipWithLabel
     * @return this instance
     */
    public function setIncludePackingSlipWithLabel($value)
    {
        $this->_fields['IncludePackingSlipWithLabel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludePackingSlipWithLabel is set.
     *
     * @return true if IncludePackingSlipWithLabel is set.
     */
    public function isSetIncludePackingSlipWithLabel()
    {
                return !is_null($this->_fields['IncludePackingSlipWithLabel']['FieldValue']);
            }

    /**
     * Set the value of IncludePackingSlipWithLabel, return this.
     *
     * @param includePackingSlipWithLabel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludePackingSlipWithLabel($value)
    {
        $this->setIncludePackingSlipWithLabel($value);
        return $this;
    }

}
