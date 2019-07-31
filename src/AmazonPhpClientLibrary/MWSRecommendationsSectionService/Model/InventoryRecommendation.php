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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

/**
 *  @see MWSRecommendationsSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSRecommendationsSectionService_Model_InventoryRecommendation
 * 
 * Properties:
 * <ul>
 * 
 * <li>LastUpdated: string</li>
 * <li>ItemIdentifier: MWSRecommendationsSectionService_Model_ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>SalesForTheLast14Days: int</li>
 * <li>SalesForTheLast30Days: int</li>
 * <li>AvailableQuantity: int</li>
 * <li>DaysUntilStockRunsOut: int</li>
 * <li>InboundQuantity: int</li>
 * <li>RecommendedInboundQuantity: int</li>
 * <li>DaysOutOfStockLast30Days: int</li>
 * <li>LostSalesInLast30Days: int</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_InventoryRecommendation extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'LastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ProductIdentifier'),
    'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SalesForTheLast14Days' => array('FieldValue' => null, 'FieldType' => 'int'),
    'SalesForTheLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'),
    'AvailableQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'DaysUntilStockRunsOut' => array('FieldValue' => null, 'FieldType' => 'int'),
    'InboundQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'RecommendedInboundQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'DaysOutOfStockLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'),
    'LostSalesInLast30Days' => array('FieldValue' => null, 'FieldType' => 'int'),
    'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the LastUpdated property.
     *
     * @return XMLGregorianCalendar LastUpdated.
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @return this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set.
     */
    public function isSetLastUpdated()
    {
                return !is_null($this->_fields['LastUpdated']['FieldValue']);
            }

    /**
     * Set the value of LastUpdated, return this.
     *
     * @param lastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdated($value)
    {
        $this->setLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param MWSRecommendationsSectionService_Model_ProductIdentifier itemIdentifier
     * @return this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
                return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
            }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return String ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
                return !is_null($this->_fields['ItemName']['FieldValue']);
            }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemName($value)
    {
        $this->setItemName($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return String FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return this instance
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
                return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }

    /**
     * Get the value of the SalesForTheLast14Days property.
     *
     * @return Integer SalesForTheLast14Days.
     */
    public function getSalesForTheLast14Days()
    {
        return $this->_fields['SalesForTheLast14Days']['FieldValue'];
    }

    /**
     * Set the value of the SalesForTheLast14Days property.
     *
     * @param int salesForTheLast14Days
     * @return this instance
     */
    public function setSalesForTheLast14Days($value)
    {
        $this->_fields['SalesForTheLast14Days']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesForTheLast14Days is set.
     *
     * @return true if SalesForTheLast14Days is set.
     */
    public function isSetSalesForTheLast14Days()
    {
                return !is_null($this->_fields['SalesForTheLast14Days']['FieldValue']);
            }

    /**
     * Set the value of SalesForTheLast14Days, return this.
     *
     * @param salesForTheLast14Days
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalesForTheLast14Days($value)
    {
        $this->setSalesForTheLast14Days($value);
        return $this;
    }

    /**
     * Get the value of the SalesForTheLast30Days property.
     *
     * @return Integer SalesForTheLast30Days.
     */
    public function getSalesForTheLast30Days()
    {
        return $this->_fields['SalesForTheLast30Days']['FieldValue'];
    }

    /**
     * Set the value of the SalesForTheLast30Days property.
     *
     * @param int salesForTheLast30Days
     * @return this instance
     */
    public function setSalesForTheLast30Days($value)
    {
        $this->_fields['SalesForTheLast30Days']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesForTheLast30Days is set.
     *
     * @return true if SalesForTheLast30Days is set.
     */
    public function isSetSalesForTheLast30Days()
    {
                return !is_null($this->_fields['SalesForTheLast30Days']['FieldValue']);
            }

    /**
     * Set the value of SalesForTheLast30Days, return this.
     *
     * @param salesForTheLast30Days
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalesForTheLast30Days($value)
    {
        $this->setSalesForTheLast30Days($value);
        return $this;
    }

    /**
     * Get the value of the AvailableQuantity property.
     *
     * @return Integer AvailableQuantity.
     */
    public function getAvailableQuantity()
    {
        return $this->_fields['AvailableQuantity']['FieldValue'];
    }

    /**
     * Set the value of the AvailableQuantity property.
     *
     * @param int availableQuantity
     * @return this instance
     */
    public function setAvailableQuantity($value)
    {
        $this->_fields['AvailableQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AvailableQuantity is set.
     *
     * @return true if AvailableQuantity is set.
     */
    public function isSetAvailableQuantity()
    {
                return !is_null($this->_fields['AvailableQuantity']['FieldValue']);
            }

    /**
     * Set the value of AvailableQuantity, return this.
     *
     * @param availableQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAvailableQuantity($value)
    {
        $this->setAvailableQuantity($value);
        return $this;
    }

    /**
     * Get the value of the DaysUntilStockRunsOut property.
     *
     * @return Integer DaysUntilStockRunsOut.
     */
    public function getDaysUntilStockRunsOut()
    {
        return $this->_fields['DaysUntilStockRunsOut']['FieldValue'];
    }

    /**
     * Set the value of the DaysUntilStockRunsOut property.
     *
     * @param int daysUntilStockRunsOut
     * @return this instance
     */
    public function setDaysUntilStockRunsOut($value)
    {
        $this->_fields['DaysUntilStockRunsOut']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DaysUntilStockRunsOut is set.
     *
     * @return true if DaysUntilStockRunsOut is set.
     */
    public function isSetDaysUntilStockRunsOut()
    {
                return !is_null($this->_fields['DaysUntilStockRunsOut']['FieldValue']);
            }

    /**
     * Set the value of DaysUntilStockRunsOut, return this.
     *
     * @param daysUntilStockRunsOut
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDaysUntilStockRunsOut($value)
    {
        $this->setDaysUntilStockRunsOut($value);
        return $this;
    }

    /**
     * Get the value of the InboundQuantity property.
     *
     * @return Integer InboundQuantity.
     */
    public function getInboundQuantity()
    {
        return $this->_fields['InboundQuantity']['FieldValue'];
    }

    /**
     * Set the value of the InboundQuantity property.
     *
     * @param int inboundQuantity
     * @return this instance
     */
    public function setInboundQuantity($value)
    {
        $this->_fields['InboundQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InboundQuantity is set.
     *
     * @return true if InboundQuantity is set.
     */
    public function isSetInboundQuantity()
    {
                return !is_null($this->_fields['InboundQuantity']['FieldValue']);
            }

    /**
     * Set the value of InboundQuantity, return this.
     *
     * @param inboundQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInboundQuantity($value)
    {
        $this->setInboundQuantity($value);
        return $this;
    }

    /**
     * Get the value of the RecommendedInboundQuantity property.
     *
     * @return Integer RecommendedInboundQuantity.
     */
    public function getRecommendedInboundQuantity()
    {
        return $this->_fields['RecommendedInboundQuantity']['FieldValue'];
    }

    /**
     * Set the value of the RecommendedInboundQuantity property.
     *
     * @param int recommendedInboundQuantity
     * @return this instance
     */
    public function setRecommendedInboundQuantity($value)
    {
        $this->_fields['RecommendedInboundQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendedInboundQuantity is set.
     *
     * @return true if RecommendedInboundQuantity is set.
     */
    public function isSetRecommendedInboundQuantity()
    {
                return !is_null($this->_fields['RecommendedInboundQuantity']['FieldValue']);
            }

    /**
     * Set the value of RecommendedInboundQuantity, return this.
     *
     * @param recommendedInboundQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendedInboundQuantity($value)
    {
        $this->setRecommendedInboundQuantity($value);
        return $this;
    }

    /**
     * Get the value of the DaysOutOfStockLast30Days property.
     *
     * @return Integer DaysOutOfStockLast30Days.
     */
    public function getDaysOutOfStockLast30Days()
    {
        return $this->_fields['DaysOutOfStockLast30Days']['FieldValue'];
    }

    /**
     * Set the value of the DaysOutOfStockLast30Days property.
     *
     * @param int daysOutOfStockLast30Days
     * @return this instance
     */
    public function setDaysOutOfStockLast30Days($value)
    {
        $this->_fields['DaysOutOfStockLast30Days']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DaysOutOfStockLast30Days is set.
     *
     * @return true if DaysOutOfStockLast30Days is set.
     */
    public function isSetDaysOutOfStockLast30Days()
    {
                return !is_null($this->_fields['DaysOutOfStockLast30Days']['FieldValue']);
            }

    /**
     * Set the value of DaysOutOfStockLast30Days, return this.
     *
     * @param daysOutOfStockLast30Days
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDaysOutOfStockLast30Days($value)
    {
        $this->setDaysOutOfStockLast30Days($value);
        return $this;
    }

    /**
     * Get the value of the LostSalesInLast30Days property.
     *
     * @return Integer LostSalesInLast30Days.
     */
    public function getLostSalesInLast30Days()
    {
        return $this->_fields['LostSalesInLast30Days']['FieldValue'];
    }

    /**
     * Set the value of the LostSalesInLast30Days property.
     *
     * @param int lostSalesInLast30Days
     * @return this instance
     */
    public function setLostSalesInLast30Days($value)
    {
        $this->_fields['LostSalesInLast30Days']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LostSalesInLast30Days is set.
     *
     * @return true if LostSalesInLast30Days is set.
     */
    public function isSetLostSalesInLast30Days()
    {
                return !is_null($this->_fields['LostSalesInLast30Days']['FieldValue']);
            }

    /**
     * Set the value of LostSalesInLast30Days, return this.
     *
     * @param lostSalesInLast30Days
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLostSalesInLast30Days($value)
    {
        $this->setLostSalesInLast30Days($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return String RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
                return !is_null($this->_fields['RecommendationId']['FieldValue']);
            }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return String RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
                return !is_null($this->_fields['RecommendationReason']['FieldValue']);
            }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);
        return $this;
    }

}
