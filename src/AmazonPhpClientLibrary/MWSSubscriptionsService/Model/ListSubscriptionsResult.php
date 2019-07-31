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
 * MWSSubscriptionsService_Model_ListSubscriptionsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SubscriptionList: MWSSubscriptionsService_Model_SubscriptionList</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_ListSubscriptionsResult extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SubscriptionList' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_SubscriptionList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SubscriptionList property.
     *
     * @return SubscriptionList SubscriptionList.
     */
    public function getSubscriptionList()
    {
        return $this->_fields['SubscriptionList']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionList property.
     *
     * @param MWSSubscriptionsService_Model_SubscriptionList subscriptionList
     * @return this instance
     */
    public function setSubscriptionList($value)
    {
        $this->_fields['SubscriptionList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubscriptionList is set.
     *
     * @return true if SubscriptionList is set.
     */
    public function isSetSubscriptionList()
    {
                return !is_null($this->_fields['SubscriptionList']['FieldValue']);
            }

    /**
     * Set the value of SubscriptionList, return this.
     *
     * @param subscriptionList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscriptionList($value)
    {
        $this->setSubscriptionList($value);
        return $this;
    }

}
