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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceSellers_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceSellers_Model_ListParticipations
 * 
 * Properties:
 * <ul>
 * 
 * <li>Participation: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceSellers_Model_ListParticipations extends MarketplaceWebServiceSellers_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Participation' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceSellers_Model_Participation')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Participation property.
     *
     * @return List<Participation> Participation.
     */
    public function getParticipation()
    {
        if ($this->_fields['Participation']['FieldValue'] == null)
        {
            $this->_fields['Participation']['FieldValue'] = array();
        }
        return $this->_fields['Participation']['FieldValue'];
    }

    /**
     * Set the value of the Participation property.
     *
     * @param array participation
     * @return this instance
     */
    public function setParticipation($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Participation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Participation.
     */
    public function unsetParticipation()
    {
        $this->_fields['Participation']['FieldValue'] = array();
    }

    /**
     * Check to see if Participation is set.
     *
     * @return true if Participation is set.
     */
    public function isSetParticipation()
    {
                return !empty($this->_fields['Participation']['FieldValue']);
            }

    /**
     * Add values for Participation, return this.
     *
     * @param participation
     *             New values to add.
     *
     * @return This instance.
     */
    public function withParticipation()
    {
        foreach (func_get_args() as $Participation)
        {
            $this->_fields['Participation']['FieldValue'][] = $Participation;
        }
        return $this;
    }

}
