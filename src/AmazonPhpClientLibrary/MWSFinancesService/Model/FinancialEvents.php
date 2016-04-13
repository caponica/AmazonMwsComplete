<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2015-09-03
 * Generated: Thu Sep 03 17:55:25 GMT 2015
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_FinancialEvents
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentEventList: array</li>
 * <li>RefundEventList: array</li>
 * <li>GuaranteeClaimEventList: array</li>
 * <li>ChargebackEventList: array</li>
 * <li>PayWithAmazonEventList: array</li>
 * <li>ServiceProviderCreditEventList: array</li>
 * <li>RetrochargeEventList: array</li>
 * <li>RentalTransactionEventList: array</li>
 * <li>PerformanceBondRefundEventList: array</li>
 * <li>ServiceFeeEventList: array</li>
 * <li>DebtRecoveryEventList: array</li>
 * <li>LoanServicingEventList: array</li>
 * <li>AdjustmentEventList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_FinancialEvents extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ShipmentEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentEvent'), 'ListMemberName' => 'ShipmentEvent'),
    'RefundEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentEvent'), 'ListMemberName' => 'ShipmentEvent'),
    'GuaranteeClaimEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentEvent'), 'ListMemberName' => 'ShipmentEvent'),
    'ChargebackEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentEvent'), 'ListMemberName' => 'ShipmentEvent'),
    'PayWithAmazonEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_PayWithAmazonEvent'), 'ListMemberName' => 'PayWithAmazonEvent'),
    'ServiceProviderCreditEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_SolutionProviderCreditEvent'), 'ListMemberName' => 'SolutionProviderCreditEvent'),
    'RetrochargeEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_RetrochargeEvent'), 'ListMemberName' => 'RetrochargeEvent'),
    'RentalTransactionEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_RentalTransactionEvent'), 'ListMemberName' => 'RentalTransactionEvent'),
    'PerformanceBondRefundEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_PerformanceBondRefundEvent'), 'ListMemberName' => 'PerformanceBondRefundEvent'),
    'ServiceFeeEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ServiceFeeEvent'), 'ListMemberName' => 'ServiceFeeEvent'),
    'DebtRecoveryEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_DebtRecoveryEvent'), 'ListMemberName' => 'DebtRecoveryEvent'),
    'LoanServicingEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_LoanServicingEvent'), 'ListMemberName' => 'LoanServicingEvent'),
    'AdjustmentEventList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_AdjustmentEvent'), 'ListMemberName' => 'AdjustmentEvent'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentEventList property.
     *
     * @return List<ShipmentEvent> ShipmentEventList.
     */
    public function getShipmentEventList()
    {
        if ($this->_fields['ShipmentEventList']['FieldValue'] == null)
        {
            $this->_fields['ShipmentEventList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentEventList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentEventList property.
     *
     * @param array shipmentEventList
     * @return this instance
     */
    public function setShipmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentEventList.
     */
    public function unsetShipmentEventList()
    {
        $this->_fields['ShipmentEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentEventList is set.
     *
     * @return true if ShipmentEventList is set.
     */
    public function isSetShipmentEventList()
    {
                return !empty($this->_fields['ShipmentEventList']['FieldValue']);
            }

    /**
     * Add values for ShipmentEventList, return this.
     *
     * @param shipmentEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentEventList()
    {
        foreach (func_get_args() as $ShipmentEventList)
        {
            $this->_fields['ShipmentEventList']['FieldValue'][] = $ShipmentEventList;
        }
        return $this;
    }

    /**
     * Get the value of the RefundEventList property.
     *
     * @return List<ShipmentEvent> RefundEventList.
     */
    public function getRefundEventList()
    {
        if ($this->_fields['RefundEventList']['FieldValue'] == null)
        {
            $this->_fields['RefundEventList']['FieldValue'] = array();
        }
        return $this->_fields['RefundEventList']['FieldValue'];
    }

    /**
     * Set the value of the RefundEventList property.
     *
     * @param array refundEventList
     * @return this instance
     */
    public function setRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RefundEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RefundEventList.
     */
    public function unsetRefundEventList()
    {
        $this->_fields['RefundEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if RefundEventList is set.
     *
     * @return true if RefundEventList is set.
     */
    public function isSetRefundEventList()
    {
                return !empty($this->_fields['RefundEventList']['FieldValue']);
            }

    /**
     * Add values for RefundEventList, return this.
     *
     * @param refundEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRefundEventList()
    {
        foreach (func_get_args() as $RefundEventList)
        {
            $this->_fields['RefundEventList']['FieldValue'][] = $RefundEventList;
        }
        return $this;
    }

    /**
     * Get the value of the GuaranteeClaimEventList property.
     *
     * @return List<ShipmentEvent> GuaranteeClaimEventList.
     */
    public function getGuaranteeClaimEventList()
    {
        if ($this->_fields['GuaranteeClaimEventList']['FieldValue'] == null)
        {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'] = array();
        }
        return $this->_fields['GuaranteeClaimEventList']['FieldValue'];
    }

    /**
     * Set the value of the GuaranteeClaimEventList property.
     *
     * @param array guaranteeClaimEventList
     * @return this instance
     */
    public function setGuaranteeClaimEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GuaranteeClaimEventList.
     */
    public function unsetGuaranteeClaimEventList()
    {
        $this->_fields['GuaranteeClaimEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if GuaranteeClaimEventList is set.
     *
     * @return true if GuaranteeClaimEventList is set.
     */
    public function isSetGuaranteeClaimEventList()
    {
                return !empty($this->_fields['GuaranteeClaimEventList']['FieldValue']);
            }

    /**
     * Add values for GuaranteeClaimEventList, return this.
     *
     * @param guaranteeClaimEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGuaranteeClaimEventList()
    {
        foreach (func_get_args() as $GuaranteeClaimEventList)
        {
            $this->_fields['GuaranteeClaimEventList']['FieldValue'][] = $GuaranteeClaimEventList;
        }
        return $this;
    }

    /**
     * Get the value of the ChargebackEventList property.
     *
     * @return List<ShipmentEvent> ChargebackEventList.
     */
    public function getChargebackEventList()
    {
        if ($this->_fields['ChargebackEventList']['FieldValue'] == null)
        {
            $this->_fields['ChargebackEventList']['FieldValue'] = array();
        }
        return $this->_fields['ChargebackEventList']['FieldValue'];
    }

    /**
     * Set the value of the ChargebackEventList property.
     *
     * @param array chargebackEventList
     * @return this instance
     */
    public function setChargebackEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ChargebackEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ChargebackEventList.
     */
    public function unsetChargebackEventList()
    {
        $this->_fields['ChargebackEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if ChargebackEventList is set.
     *
     * @return true if ChargebackEventList is set.
     */
    public function isSetChargebackEventList()
    {
                return !empty($this->_fields['ChargebackEventList']['FieldValue']);
            }

    /**
     * Add values for ChargebackEventList, return this.
     *
     * @param chargebackEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withChargebackEventList()
    {
        foreach (func_get_args() as $ChargebackEventList)
        {
            $this->_fields['ChargebackEventList']['FieldValue'][] = $ChargebackEventList;
        }
        return $this;
    }

    /**
     * Get the value of the PayWithAmazonEventList property.
     *
     * @return List<PayWithAmazonEvent> PayWithAmazonEventList.
     */
    public function getPayWithAmazonEventList()
    {
        if ($this->_fields['PayWithAmazonEventList']['FieldValue'] == null)
        {
            $this->_fields['PayWithAmazonEventList']['FieldValue'] = array();
        }
        return $this->_fields['PayWithAmazonEventList']['FieldValue'];
    }

    /**
     * Set the value of the PayWithAmazonEventList property.
     *
     * @param array payWithAmazonEventList
     * @return this instance
     */
    public function setPayWithAmazonEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PayWithAmazonEventList.
     */
    public function unsetPayWithAmazonEventList()
    {
        $this->_fields['PayWithAmazonEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if PayWithAmazonEventList is set.
     *
     * @return true if PayWithAmazonEventList is set.
     */
    public function isSetPayWithAmazonEventList()
    {
                return !empty($this->_fields['PayWithAmazonEventList']['FieldValue']);
            }

    /**
     * Add values for PayWithAmazonEventList, return this.
     *
     * @param payWithAmazonEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPayWithAmazonEventList()
    {
        foreach (func_get_args() as $PayWithAmazonEventList)
        {
            $this->_fields['PayWithAmazonEventList']['FieldValue'][] = $PayWithAmazonEventList;
        }
        return $this;
    }

    /**
     * Get the value of the ServiceProviderCreditEventList property.
     *
     * @return List<SolutionProviderCreditEvent> ServiceProviderCreditEventList.
     */
    public function getServiceProviderCreditEventList()
    {
        if ($this->_fields['ServiceProviderCreditEventList']['FieldValue'] == null)
        {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = array();
        }
        return $this->_fields['ServiceProviderCreditEventList']['FieldValue'];
    }

    /**
     * Set the value of the ServiceProviderCreditEventList property.
     *
     * @param array serviceProviderCreditEventList
     * @return this instance
     */
    public function setServiceProviderCreditEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ServiceProviderCreditEventList.
     */
    public function unsetServiceProviderCreditEventList()
    {
        $this->_fields['ServiceProviderCreditEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if ServiceProviderCreditEventList is set.
     *
     * @return true if ServiceProviderCreditEventList is set.
     */
    public function isSetServiceProviderCreditEventList()
    {
                return !empty($this->_fields['ServiceProviderCreditEventList']['FieldValue']);
            }

    /**
     * Add values for ServiceProviderCreditEventList, return this.
     *
     * @param serviceProviderCreditEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withServiceProviderCreditEventList()
    {
        foreach (func_get_args() as $ServiceProviderCreditEventList)
        {
            $this->_fields['ServiceProviderCreditEventList']['FieldValue'][] = $ServiceProviderCreditEventList;
        }
        return $this;
    }

    /**
     * Get the value of the RetrochargeEventList property.
     *
     * @return List<RetrochargeEvent> RetrochargeEventList.
     */
    public function getRetrochargeEventList()
    {
        if ($this->_fields['RetrochargeEventList']['FieldValue'] == null)
        {
            $this->_fields['RetrochargeEventList']['FieldValue'] = array();
        }
        return $this->_fields['RetrochargeEventList']['FieldValue'];
    }

    /**
     * Set the value of the RetrochargeEventList property.
     *
     * @param array retrochargeEventList
     * @return this instance
     */
    public function setRetrochargeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RetrochargeEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RetrochargeEventList.
     */
    public function unsetRetrochargeEventList()
    {
        $this->_fields['RetrochargeEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if RetrochargeEventList is set.
     *
     * @return true if RetrochargeEventList is set.
     */
    public function isSetRetrochargeEventList()
    {
                return !empty($this->_fields['RetrochargeEventList']['FieldValue']);
            }

    /**
     * Add values for RetrochargeEventList, return this.
     *
     * @param retrochargeEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRetrochargeEventList()
    {
        foreach (func_get_args() as $RetrochargeEventList)
        {
            $this->_fields['RetrochargeEventList']['FieldValue'][] = $RetrochargeEventList;
        }
        return $this;
    }

    /**
     * Get the value of the RentalTransactionEventList property.
     *
     * @return List<RentalTransactionEvent> RentalTransactionEventList.
     */
    public function getRentalTransactionEventList()
    {
        if ($this->_fields['RentalTransactionEventList']['FieldValue'] == null)
        {
            $this->_fields['RentalTransactionEventList']['FieldValue'] = array();
        }
        return $this->_fields['RentalTransactionEventList']['FieldValue'];
    }

    /**
     * Set the value of the RentalTransactionEventList property.
     *
     * @param array rentalTransactionEventList
     * @return this instance
     */
    public function setRentalTransactionEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RentalTransactionEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RentalTransactionEventList.
     */
    public function unsetRentalTransactionEventList()
    {
        $this->_fields['RentalTransactionEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if RentalTransactionEventList is set.
     *
     * @return true if RentalTransactionEventList is set.
     */
    public function isSetRentalTransactionEventList()
    {
                return !empty($this->_fields['RentalTransactionEventList']['FieldValue']);
            }

    /**
     * Add values for RentalTransactionEventList, return this.
     *
     * @param rentalTransactionEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRentalTransactionEventList()
    {
        foreach (func_get_args() as $RentalTransactionEventList)
        {
            $this->_fields['RentalTransactionEventList']['FieldValue'][] = $RentalTransactionEventList;
        }
        return $this;
    }

    /**
     * Get the value of the PerformanceBondRefundEventList property.
     *
     * @return List<PerformanceBondRefundEvent> PerformanceBondRefundEventList.
     */
    public function getPerformanceBondRefundEventList()
    {
        if ($this->_fields['PerformanceBondRefundEventList']['FieldValue'] == null)
        {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = array();
        }
        return $this->_fields['PerformanceBondRefundEventList']['FieldValue'];
    }

    /**
     * Set the value of the PerformanceBondRefundEventList property.
     *
     * @param array performanceBondRefundEventList
     * @return this instance
     */
    public function setPerformanceBondRefundEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PerformanceBondRefundEventList.
     */
    public function unsetPerformanceBondRefundEventList()
    {
        $this->_fields['PerformanceBondRefundEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if PerformanceBondRefundEventList is set.
     *
     * @return true if PerformanceBondRefundEventList is set.
     */
    public function isSetPerformanceBondRefundEventList()
    {
                return !empty($this->_fields['PerformanceBondRefundEventList']['FieldValue']);
            }

    /**
     * Add values for PerformanceBondRefundEventList, return this.
     *
     * @param performanceBondRefundEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPerformanceBondRefundEventList()
    {
        foreach (func_get_args() as $PerformanceBondRefundEventList)
        {
            $this->_fields['PerformanceBondRefundEventList']['FieldValue'][] = $PerformanceBondRefundEventList;
        }
        return $this;
    }

    /**
     * Get the value of the ServiceFeeEventList property.
     *
     * @return List<ServiceFeeEvent> ServiceFeeEventList.
     */
    public function getServiceFeeEventList()
    {
        if ($this->_fields['ServiceFeeEventList']['FieldValue'] == null)
        {
            $this->_fields['ServiceFeeEventList']['FieldValue'] = array();
        }
        return $this->_fields['ServiceFeeEventList']['FieldValue'];
    }

    /**
     * Set the value of the ServiceFeeEventList property.
     *
     * @param array serviceFeeEventList
     * @return this instance
     */
    public function setServiceFeeEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ServiceFeeEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ServiceFeeEventList.
     */
    public function unsetServiceFeeEventList()
    {
        $this->_fields['ServiceFeeEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if ServiceFeeEventList is set.
     *
     * @return true if ServiceFeeEventList is set.
     */
    public function isSetServiceFeeEventList()
    {
                return !empty($this->_fields['ServiceFeeEventList']['FieldValue']);
            }

    /**
     * Add values for ServiceFeeEventList, return this.
     *
     * @param serviceFeeEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withServiceFeeEventList()
    {
        foreach (func_get_args() as $ServiceFeeEventList)
        {
            $this->_fields['ServiceFeeEventList']['FieldValue'][] = $ServiceFeeEventList;
        }
        return $this;
    }

    /**
     * Get the value of the DebtRecoveryEventList property.
     *
     * @return List<DebtRecoveryEvent> DebtRecoveryEventList.
     */
    public function getDebtRecoveryEventList()
    {
        if ($this->_fields['DebtRecoveryEventList']['FieldValue'] == null)
        {
            $this->_fields['DebtRecoveryEventList']['FieldValue'] = array();
        }
        return $this->_fields['DebtRecoveryEventList']['FieldValue'];
    }

    /**
     * Set the value of the DebtRecoveryEventList property.
     *
     * @param array debtRecoveryEventList
     * @return this instance
     */
    public function setDebtRecoveryEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear DebtRecoveryEventList.
     */
    public function unsetDebtRecoveryEventList()
    {
        $this->_fields['DebtRecoveryEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if DebtRecoveryEventList is set.
     *
     * @return true if DebtRecoveryEventList is set.
     */
    public function isSetDebtRecoveryEventList()
    {
                return !empty($this->_fields['DebtRecoveryEventList']['FieldValue']);
            }

    /**
     * Add values for DebtRecoveryEventList, return this.
     *
     * @param debtRecoveryEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withDebtRecoveryEventList()
    {
        foreach (func_get_args() as $DebtRecoveryEventList)
        {
            $this->_fields['DebtRecoveryEventList']['FieldValue'][] = $DebtRecoveryEventList;
        }
        return $this;
    }

    /**
     * Get the value of the LoanServicingEventList property.
     *
     * @return List<LoanServicingEvent> LoanServicingEventList.
     */
    public function getLoanServicingEventList()
    {
        if ($this->_fields['LoanServicingEventList']['FieldValue'] == null)
        {
            $this->_fields['LoanServicingEventList']['FieldValue'] = array();
        }
        return $this->_fields['LoanServicingEventList']['FieldValue'];
    }

    /**
     * Set the value of the LoanServicingEventList property.
     *
     * @param array loanServicingEventList
     * @return this instance
     */
    public function setLoanServicingEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['LoanServicingEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear LoanServicingEventList.
     */
    public function unsetLoanServicingEventList()
    {
        $this->_fields['LoanServicingEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if LoanServicingEventList is set.
     *
     * @return true if LoanServicingEventList is set.
     */
    public function isSetLoanServicingEventList()
    {
                return !empty($this->_fields['LoanServicingEventList']['FieldValue']);
            }

    /**
     * Add values for LoanServicingEventList, return this.
     *
     * @param loanServicingEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withLoanServicingEventList()
    {
        foreach (func_get_args() as $LoanServicingEventList)
        {
            $this->_fields['LoanServicingEventList']['FieldValue'][] = $LoanServicingEventList;
        }
        return $this;
    }

    /**
     * Get the value of the AdjustmentEventList property.
     *
     * @return List<AdjustmentEvent> AdjustmentEventList.
     */
    public function getAdjustmentEventList()
    {
        if ($this->_fields['AdjustmentEventList']['FieldValue'] == null)
        {
            $this->_fields['AdjustmentEventList']['FieldValue'] = array();
        }
        return $this->_fields['AdjustmentEventList']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentEventList property.
     *
     * @param array adjustmentEventList
     * @return this instance
     */
    public function setAdjustmentEventList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AdjustmentEventList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AdjustmentEventList.
     */
    public function unsetAdjustmentEventList()
    {
        $this->_fields['AdjustmentEventList']['FieldValue'] = array();
    }

    /**
     * Check to see if AdjustmentEventList is set.
     *
     * @return true if AdjustmentEventList is set.
     */
    public function isSetAdjustmentEventList()
    {
                return !empty($this->_fields['AdjustmentEventList']['FieldValue']);
            }

    /**
     * Add values for AdjustmentEventList, return this.
     *
     * @param adjustmentEventList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAdjustmentEventList()
    {
        foreach (func_get_args() as $AdjustmentEventList)
        {
            $this->_fields['AdjustmentEventList']['FieldValue'][] = $AdjustmentEventList;
        }
        return $this;
    }

}
