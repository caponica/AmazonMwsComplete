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
 * MWSSubscriptionsService_Model_Subscription
 * 
 * Properties:
 * <ul>
 * 
 * <li>NotificationType: string</li>
 * <li>Destination: MWSSubscriptionsService_Model_Destination</li>
 * <li>IsEnabled: bool</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_Subscription extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'NotificationType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Destination' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptionsService_Model_Destination'),
    'IsEnabled' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the NotificationType property.
     *
     * @return String NotificationType.
     */
    public function getNotificationType()
    {
        return $this->_fields['NotificationType']['FieldValue'];
    }

    /**
     * Set the value of the NotificationType property.
     *
     * @param string notificationType
     * @return this instance
     */
    public function setNotificationType($value)
    {
        $this->_fields['NotificationType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NotificationType is set.
     *
     * @return true if NotificationType is set.
     */
    public function isSetNotificationType()
    {
                return !is_null($this->_fields['NotificationType']['FieldValue']);
            }

    /**
     * Set the value of NotificationType, return this.
     *
     * @param notificationType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNotificationType($value)
    {
        $this->setNotificationType($value);
        return $this;
    }

    /**
     * Get the value of the Destination property.
     *
     * @return Destination Destination.
     */
    public function getDestination()
    {
        return $this->_fields['Destination']['FieldValue'];
    }

    /**
     * Set the value of the Destination property.
     *
     * @param MWSSubscriptionsService_Model_Destination destination
     * @return this instance
     */
    public function setDestination($value)
    {
        $this->_fields['Destination']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Destination is set.
     *
     * @return true if Destination is set.
     */
    public function isSetDestination()
    {
                return !is_null($this->_fields['Destination']['FieldValue']);
            }

    /**
     * Set the value of Destination, return this.
     *
     * @param destination
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDestination($value)
    {
        $this->setDestination($value);
        return $this;
    }

    /**
     * Check the value of IsEnabled.
     *
     * @return true if IsEnabled is set to true.
     */
    public function isIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }

    /**
     * Get the value of the IsEnabled property.
     *
     * @return boolean IsEnabled.
     */
    public function getIsEnabled()
    {
        return $this->_fields['IsEnabled']['FieldValue'];
    }

    /**
     * Set the value of the IsEnabled property.
     *
     * @param bool isEnabled
     * @return this instance
     */
    public function setIsEnabled($value)
    {
        $this->_fields['IsEnabled']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsEnabled is set.
     *
     * @return true if IsEnabled is set.
     */
    public function isSetIsEnabled()
    {
                return !is_null($this->_fields['IsEnabled']['FieldValue']);
            }

    /**
     * Set the value of IsEnabled, return this.
     *
     * @param isEnabled
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsEnabled($value)
    {
        $this->setIsEnabled($value);
        return $this;
    }

}
