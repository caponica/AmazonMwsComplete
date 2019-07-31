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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceProducts_Model_FeeDetailList
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeeDetail: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeeDetailList extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeeDetail' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_FeeDetail')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeeDetail property.
     *
     * @return List<FeeDetail> FeeDetail.
     */
    public function getFeeDetail()
    {
        if ($this->_fields['FeeDetail']['FieldValue'] == null)
        {
            $this->_fields['FeeDetail']['FieldValue'] = array();
        }
        return $this->_fields['FeeDetail']['FieldValue'];
    }

    /**
     * Set the value of the FeeDetail property.
     *
     * @param array feeDetail
     * @return this instance
     */
    public function setFeeDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeeDetail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeeDetail.
     */
    public function unsetFeeDetail()
    {
        $this->_fields['FeeDetail']['FieldValue'] = array();
    }

    /**
     * Check to see if FeeDetail is set.
     *
     * @return true if FeeDetail is set.
     */
    public function isSetFeeDetail()
    {
                return !empty($this->_fields['FeeDetail']['FieldValue']);
            }

    /**
     * Add values for FeeDetail, return this.
     *
     * @param feeDetail
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeeDetail()
    {
        foreach (func_get_args() as $FeeDetail)
        {
            $this->_fields['FeeDetail']['FieldValue'][] = $FeeDetail;
        }
        return $this;
    }

}
