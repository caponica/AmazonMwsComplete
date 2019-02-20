<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an FBA Payment Reimbursements report
 */
class ReportFbaPaymentReimbursementsRecord extends BaseMwsReportRecord
{
    protected $approvalDate;
    protected $reimbursementId;
    protected $caseId;
    protected $amazonOrderId;
    protected $reason;
    protected $sku;
    protected $fnsku;
    protected $asin;
    protected $productName;
    protected $condition;
    protected $currencyUnit;
    protected $amountPerUnit;
    protected $amountTotal;
    protected $quantityReimbursedCash;
    protected $quantityReimbursedInventory;
    protected $quantityReimbursedTotal;
    protected $originalReimbursementId;
    protected $originalReimbursementType;

    public function __construct($fileRow, $expectedFieldCount = null)
    {
        if (empty($expectedFieldCount)) {
            $expectedFieldCount = ReportFbaPaymentReimbursements::EXPECTED_FIELD_COUNT;
        }
        $fieldArray = $this->convertRowStringToArray($fileRow, $expectedFieldCount);

        $this->approvalDate                = $fieldArray[0];
        $this->reimbursementId             = $fieldArray[1];
        $this->caseId                      = $fieldArray[2];
        $this->amazonOrderId               = $fieldArray[3];
        $this->reason                      = $fieldArray[4];
        $this->sku                         = $fieldArray[5];
        $this->fnsku                       = $fieldArray[6];
        $this->asin                        = $fieldArray[7];
        $this->productName                 = $fieldArray[8];
        $this->condition                   = $fieldArray[9];
        $this->currencyUnit                = $fieldArray[10];
        $this->amountPerUnit               = $fieldArray[11];
        $this->amountTotal                 = $fieldArray[12];
        $this->quantityReimbursedCash      = $fieldArray[13];
        $this->quantityReimbursedInventory = $fieldArray[14];
        $this->quantityReimbursedTotal     = $fieldArray[15];
        $this->originalReimbursementId     = $fieldArray[16];
        $this->originalReimbursementType   = $fieldArray[17];
    }

    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    public function getReimbursementId()
    {
        return $this->reimbursementId;
    }

    public function getCaseId()
    {
        return $this->caseId;
    }


    public function getAmazonOrderId()
    {
        return $this->amazonOrderId;
    }


    public function getReason()
    {
        return $this->reason;
    }


    public function getSku()
    {
        return $this->sku;
    }


    public function getFnsku()
    {
        return $this->fnsku;
    }


    public function getAsin()
    {
        return $this->asin;
    }


    public function getProductName()
    {
        return $this->productName;
    }


    public function getCondition()
    {
        return $this->condition;
    }


    public function getCurrencyUnit()
    {
        return $this->currencyUnit;
    }


    public function getAmountPerUnit()
    {
        return $this->amountPerUnit;
    }


    public function getAmountTotal()
    {
        return $this->amountTotal;
    }


    public function getQuantityReimbursedCash()
    {
        return $this->quantityReimbursedCash;
    }


    public function getQuantityReimbursedInventory()
    {
        return $this->quantityReimbursedInventory;
    }


    public function getQuantityReimbursedTotal()
    {
        return $this->quantityReimbursedTotal;
    }


    public function getOriginalReimbursementId()
    {
        return $this->originalReimbursementId;
    }


    public function getOriginalReimbursementType()
    {
        return $this->originalReimbursementType;
    }
}
