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
 * MWSSubscriptionsService_Model_GetSubscriptionResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Subscription: MWSSubscriptionsService_Model_Subscription</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_GetSubscriptionResult extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Subscription' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_Subscription'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Subscription property.
     *
     * @return Subscription Subscription.
     */
    public function getSubscription()
    {
        return $this->_fields['Subscription']['FieldValue'];
    }

    /**
     * Set the value of the Subscription property.
     *
     * @param MWSSubscriptionsService_Model_Subscription subscription
     * @return this instance
     */
    public function setSubscription($value)
    {
        $this->_fields['Subscription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Subscription is set.
     *
     * @return true if Subscription is set.
     */
    public function isSetSubscription()
    {
                return !is_null($this->_fields['Subscription']['FieldValue']);
            }

    /**
     * Set the value of Subscription, return this.
     *
     * @param subscription
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscription($value)
    {
        $this->setSubscription($value);
        return $this;
    }

}
