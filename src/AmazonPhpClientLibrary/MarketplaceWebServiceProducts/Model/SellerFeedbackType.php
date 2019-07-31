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
 * MarketplaceWebServiceProducts_Model_SellerFeedbackType
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerPositiveFeedbackRating: float</li>
 * <li>FeedbackCount: int</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_SellerFeedbackType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerPositiveFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'float'),
    'FeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerPositiveFeedbackRating property.
     *
     * @return Double SellerPositiveFeedbackRating.
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerPositiveFeedbackRating property.
     *
     * @param float sellerPositiveFeedbackRating
     * @return this instance
     */
    public function setSellerPositiveFeedbackRating($value)
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerPositiveFeedbackRating is set.
     *
     * @return true if SellerPositiveFeedbackRating is set.
     */
    public function isSetSellerPositiveFeedbackRating()
    {
                return !is_null($this->_fields['SellerPositiveFeedbackRating']['FieldValue']);
            }

    /**
     * Set the value of SellerPositiveFeedbackRating, return this.
     *
     * @param sellerPositiveFeedbackRating
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerPositiveFeedbackRating($value)
    {
        $this->setSellerPositiveFeedbackRating($value);
        return $this;
    }

    /**
     * Get the value of the FeedbackCount property.
     *
     * @return long FeedbackCount.
     */
    public function getFeedbackCount()
    {
        return $this->_fields['FeedbackCount']['FieldValue'];
    }

    /**
     * Set the value of the FeedbackCount property.
     *
     * @param int feedbackCount
     * @return this instance
     */
    public function setFeedbackCount($value)
    {
        $this->_fields['FeedbackCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeedbackCount is set.
     *
     * @return true if FeedbackCount is set.
     */
    public function isSetFeedbackCount()
    {
                return !is_null($this->_fields['FeedbackCount']['FieldValue']);
            }

    /**
     * Set the value of FeedbackCount, return this.
     *
     * @param feedbackCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeedbackCount($value)
    {
        $this->setFeedbackCount($value);
        return $this;
    }

}
