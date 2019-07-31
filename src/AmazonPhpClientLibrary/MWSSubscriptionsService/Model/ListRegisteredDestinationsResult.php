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
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2013-11-01
 * Generated: Tue Oct 02 08:13:42 PDT 2018
 */

/**
 *  @see MWSSubscriptionsService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSSubscriptionsService_Model_ListRegisteredDestinationsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>DestinationList: MWSSubscriptionsService_Model_DestinationList</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_ListRegisteredDestinationsResult extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DestinationList' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_DestinationList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DestinationList property.
     *
     * @return DestinationList DestinationList.
     */
    public function getDestinationList()
    {
        return $this->_fields['DestinationList']['FieldValue'];
    }

    /**
     * Set the value of the DestinationList property.
     *
     * @param MWSSubscriptionsService_Model_DestinationList destinationList
     * @return this instance
     */
    public function setDestinationList($value)
    {
        $this->_fields['DestinationList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DestinationList is set.
     *
     * @return true if DestinationList is set.
     */
    public function isSetDestinationList()
    {
                return !is_null($this->_fields['DestinationList']['FieldValue']);
            }

    /**
     * Set the value of DestinationList, return this.
     *
     * @param destinationList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDestinationList($value)
    {
        $this->setDestinationList($value);
        return $this;
    }

}
