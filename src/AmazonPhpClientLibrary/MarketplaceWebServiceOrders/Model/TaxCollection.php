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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceOrders_Model_TaxCollection
 * 
 * Properties:
 * <ul>
 * 
 * <li>Model: string</li>
 * <li>ResponsibleParty: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_TaxCollection extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Model' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ResponsibleParty' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Model property.
     *
     * @return String Model.
     */
    public function getModel()
    {
        return $this->_fields['Model']['FieldValue'];
    }

    /**
     * Set the value of the Model property.
     *
     * @param string model
     * @return this instance
     */
    public function setModel($value)
    {
        $this->_fields['Model']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Model is set.
     *
     * @return true if Model is set.
     */
    public function isSetModel()
    {
                return !is_null($this->_fields['Model']['FieldValue']);
            }

    /**
     * Set the value of Model, return this.
     *
     * @param model
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withModel($value)
    {
        $this->setModel($value);
        return $this;
    }

    /**
     * Get the value of the ResponsibleParty property.
     *
     * @return String ResponsibleParty.
     */
    public function getResponsibleParty()
    {
        return $this->_fields['ResponsibleParty']['FieldValue'];
    }

    /**
     * Set the value of the ResponsibleParty property.
     *
     * @param string responsibleParty
     * @return this instance
     */
    public function setResponsibleParty($value)
    {
        $this->_fields['ResponsibleParty']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponsibleParty is set.
     *
     * @return true if ResponsibleParty is set.
     */
    public function isSetResponsibleParty()
    {
                return !is_null($this->_fields['ResponsibleParty']['FieldValue']);
            }

    /**
     * Set the value of ResponsibleParty, return this.
     *
     * @param responsibleParty
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponsibleParty($value)
    {
        $this->setResponsibleParty($value);
        return $this;
    }

}
