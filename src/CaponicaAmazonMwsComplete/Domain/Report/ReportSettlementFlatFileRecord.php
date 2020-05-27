<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;
use Caponica\ArtemisBundle\Entity\AmazonOrder;
use Caponica\ArtemisBundle\Entity\AmazonOrderItem;

/**
 * Encapsulates information about a single row from an settlement flat file
 */
class ReportSettlementFlatFileRecord extends BaseMwsReportRecord {

    private $settlementId;
    private $settlementStartDate;
    private $settlementEndDate;
    private $depositDate;
    private $totalAmount;
    private $currency;
    private $transactionType;
    private $orderId;
    private $merchantOrderId;
    private $adjustmentId;
    private $shipmentId;
    private $marketplaceName;
    private $shipmentFeeType;
    private $shipmentFeeAmount;
    private $orderFeeType;
    private $orderFeeAmount;
    private $fulfillmentId;
    private $postedDate;
    private $orderItemCode;
    private $merchantOrderItemId;
    private $merchantAdjustmentItemId;
    private $sku;
    private $quantityPurchased;
    private $priceType;
    private $priceAmount;
    private $itemRelatedFeeType;
    private $itemRelatedFeeAmount;
    private $miscFeeAmount;
    private $otherFeeAmount;
    private $otherFeeReasonDescription;
    private $promotionId;
    private $promotionType;
    private $promotionAmount;
    private $directPaymentType;
    private $directPaymentAmount;
    private $otherAmount;

    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportSettlementFlatFile::EXPECTED_FIELD_COUNT);
        
        $this->settlementId                 = $fieldArray[0];
        $this->settlementStartDate          = $fieldArray[1];
        $this->settlementEndDate            = $fieldArray[2];
        $this->depositDate                  = $fieldArray[3];
        $this->totalAmount                  = $fieldArray[4];
        $this->currency                     = $fieldArray[5];
        $this->transactionType              = $fieldArray[6];
        $this->orderId                      = $fieldArray[7];
        $this->merchantOrderId              = $fieldArray[8];
        $this->adjustmentId                 = $fieldArray[9];
        $this->shipmentId                   = $fieldArray[10];
        $this->marketplaceName              = $fieldArray[11];
        $this->shipmentFeeType              = $fieldArray[12];
        $this->shipmentFeeAmount            = $fieldArray[13];
        $this->orderFeeType                 = $fieldArray[14];
        $this->orderFeeAmount               = $fieldArray[15];
        $this->fulfillmentId                = $fieldArray[16];
        $this->postedDate                   = $fieldArray[17];
        $this->orderItemCode                = $fieldArray[18];
        $this->merchantOrderItemId          = $fieldArray[19];
        $this->merchantAdjustmentItemId     = $fieldArray[20];
        $this->sku                          = $fieldArray[21];
        $this->quantityPurchased            = $fieldArray[22];
        $this->priceType                    = $fieldArray[23];
        $this->priceAmount                  = $fieldArray[24];
        $this->itemRelatedFeeType           = $fieldArray[25];
        $this->itemRelatedFeeAmount         = $fieldArray[26];
        $this->miscFeeAmount                = $fieldArray[27];
        $this->otherFeeAmount               = $fieldArray[28];
        $this->otherFeeReasonDescription    = $fieldArray[29];
        $this->promotionId                  = $fieldArray[30];
        $this->promotionType                = $fieldArray[31];
        $this->promotionAmount              = $fieldArray[32];
        $this->directPaymentType            = $fieldArray[33];
        $this->directPaymentAmount          = $fieldArray[34];
        $this->otherAmount                  = $fieldArray[35];
    }
    
    /**
     * @return mixed
     */
    public function getSettlementId ()
    {
        return $this->settlementId;
    }
    
    /**
     * @param mixed $settlementId
     */
    public function setSettlementId ($settlementId)
    {
        $this->settlementId = $settlementId;
    }
    
    /**
     * @return mixed
     */
    public function getSettlementStartDate ()
    {
        return $this->settlementStartDate;
    }
    
    /**
     * @param mixed $settlementStartDate
     */
    public function setSettlementStartDate ($settlementStartDate)
    {
        $this->settlementStartDate = $settlementStartDate;
    }
    
    /**
     * @return mixed
     */
    public function getSettlementEndDate ()
    {
        return $this->settlementEndDate;
    }
    
    /**
     * @param mixed $settlementEndDate
     */
    public function setSettlementEndDate ($settlementEndDate)
    {
        $this->settlementEndDate = $settlementEndDate;
    }
    
    /**
     * @return mixed
     */
    public function getDepositDate ()
    {
        return $this->depositDate;
    }
    
    /**
     * @param mixed $depositDate
     */
    public function setDepositDate ($depositDate)
    {
        $this->depositDate = $depositDate;
    }
    
    /**
     * @return mixed
     */
    public function getTotalAmount ()
    {
        return $this->totalAmount;
    }
    
    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount ($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }
    
    /**
     * @return mixed
     */
    public function getCurrency ()
    {
        return $this->currency;
    }
    
    /**
     * @param mixed $currency
     */
    public function setCurrency ($currency)
    {
        $this->currency = $currency;
    }
    
    /**
     * @return mixed
     */
    public function getTransactionType ()
    {
        return $this->transactionType;
    }
    
    /**
     * @param mixed $transactionType
     */
    public function setTransactionType ($transactionType)
    {
        $this->transactionType = $transactionType;
    }
    
    /**
     * @return mixed
     */
    public function getOrderId ()
    {
        return $this->orderId;
    }
    
    /**
     * @param mixed $orderId
     */
    public function setOrderId ($orderId)
    {
        $this->orderId = $orderId;
    }
    
    /**
     * @return mixed
     */
    public function getMerchantOrderId ()
    {
        return $this->merchantOrderId;
    }
    
    /**
     * @param mixed $merchantOrderId
     */
    public function setMerchantOrderId ($merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
    }
    
    /**
     * @return mixed
     */
    public function getAdjustmentId ()
    {
        return $this->adjustmentId;
    }
    
    /**
     * @param mixed $adjustmentId
     */
    public function setAdjustmentId ($adjustmentId)
    {
        $this->adjustmentId = $adjustmentId;
    }
    
    /**
     * @return mixed
     */
    public function getShipmentId ()
    {
        return $this->shipmentId;
    }
    
    /**
     * @param mixed $shipmentId
     */
    public function setShipmentId ($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }
    
    /**
     * @return mixed
     */
    public function getMarketplaceName ()
    {
        return $this->marketplaceName;
    }
    
    /**
     * @param mixed $marketplaceName
     */
    public function setMarketplaceName ($marketplaceName)
    {
        $this->marketplaceName = $marketplaceName;
    }
    
    /**
     * @return mixed
     */
    public function getShipmentFeeType ()
    {
        return $this->shipmentFeeType;
    }
    
    /**
     * @param mixed $shipmentFeeType
     */
    public function setShipmentFeeType ($shipmentFeeType)
    {
        $this->shipmentFeeType = $shipmentFeeType;
    }
    
    /**
     * @return mixed
     */
    public function getShipmentFeeAmount ()
    {
        return $this->shipmentFeeAmount;
    }
    
    /**
     * @param mixed $shipmentFeeAmount
     */
    public function setShipmentFeeAmount ($shipmentFeeAmount)
    {
        $this->shipmentFeeAmount = $shipmentFeeAmount;
    }
    
    /**
     * @return mixed
     */
    public function getOrderFeeType ()
    {
        return $this->orderFeeType;
    }
    
    /**
     * @param mixed $orderFeeType
     */
    public function setOrderFeeType ($orderFeeType)
    {
        $this->orderFeeType = $orderFeeType;
    }
    
    /**
     * @return mixed
     */
    public function getOrderFeeAmount ()
    {
        return $this->orderFeeAmount;
    }
    
    /**
     * @param mixed $orderFeeAmount
     */
    public function setOrderFeeAmount ($orderFeeAmount)
    {
        $this->orderFeeAmount = $orderFeeAmount;
    }
    
    /**
     * @return mixed
     */
    public function getFulfillmentId ()
    {
        return $this->fulfillmentId;
    }
    
    /**
     * @param mixed $fulfillmentId
     */
    public function setFulfillmentId ($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
    }
    
    /**
     * @return mixed
     */
    public function getPostedDate ()
    {
        return $this->postedDate;
    }
    
    /**
     * @param mixed $postedDate
     */
    public function setPostedDate ($postedDate)
    {
        $this->postedDate = $postedDate;
    }
    
    /**
     * @return mixed
     */
    public function getOrderItemCode ()
    {
        return $this->orderItemCode;
    }
    
    /**
     * @param mixed $orderItemCode
     */
    public function setOrderItemCode ($orderItemCode)
    {
        $this->orderItemCode = $orderItemCode;
    }
    
    /**
     * @return mixed
     */
    public function getMerchantOrderItemId ()
    {
        return $this->merchantOrderItemId;
    }
    
    /**
     * @param mixed $merchantOrderItemId
     */
    public function setMerchantOrderItemId ($merchantOrderItemId)
    {
        $this->merchantOrderItemId = $merchantOrderItemId;
    }
    
    /**
     * @return mixed
     */
    public function getMerchantAdjustmentItemId ()
    {
        return $this->merchantAdjustmentItemId;
    }
    
    /**
     * @param mixed $merchantAdjustmentItemId
     */
    public function setMerchantAdjustmentItemId ($merchantAdjustmentItemId)
    {
        $this->merchantAdjustmentItemId = $merchantAdjustmentItemId;
    }
    
    /**
     * @return mixed
     */
    public function getSku ()
    {
        return $this->sku;
    }
    
    /**
     * @param mixed $sku
     */
    public function setSku ($sku)
    {
        $this->sku = $sku;
    }
    
    /**
     * @return mixed
     */
    public function getQuantityPurchased ()
    {
        return $this->quantityPurchased;
    }
    
    /**
     * @param mixed $quantityPurchased
     */
    public function setQuantityPurchased ($quantityPurchased)
    {
        $this->quantityPurchased = $quantityPurchased;
    }
    
    /**
     * @return mixed
     */
    public function getPriceType ()
    {
        return $this->priceType;
    }
    
    /**
     * @param mixed $priceType
     */
    public function setPriceType ($priceType)
    {
        $this->priceType = $priceType;
    }
    
    /**
     * @return mixed
     */
    public function getPriceAmount ()
    {
        return $this->priceAmount;
    }
    
    /**
     * @param mixed $priceAmount
     */
    public function setPriceAmount ($priceAmount)
    {
        $this->priceAmount = $priceAmount;
    }
    
    /**
     * @return mixed
     */
    public function getItemRelatedFeeType ()
    {
        return $this->itemRelatedFeeType;
    }
    
    /**
     * @param mixed $itemRelatedFeeType
     */
    public function setItemRelatedFeeType ($itemRelatedFeeType)
    {
        $this->itemRelatedFeeType = $itemRelatedFeeType;
    }
    
    /**
     * @return mixed
     */
    public function getItemRelatedFeeAmount ()
    {
        return $this->itemRelatedFeeAmount;
    }
    
    /**
     * @param mixed $itemRelatedFeeAmount
     */
    public function setItemRelatedFeeAmount ($itemRelatedFeeAmount)
    {
        $this->itemRelatedFeeAmount = $itemRelatedFeeAmount;
    }
    
    /**
     * @return mixed
     */
    public function getMiscFeeAmount ()
    {
        return $this->miscFeeAmount;
    }
    
    /**
     * @param mixed $miscFeeAmount
     */
    public function setMiscFeeAmount ($miscFeeAmount)
    {
        $this->miscFeeAmount = $miscFeeAmount;
    }
    
    /**
     * @return mixed
     */
    public function getOtherFeeAmount ()
    {
        return $this->otherFeeAmount;
    }
    
    /**
     * @param mixed $otherFeeAmount
     */
    public function setOtherFeeAmount ($otherFeeAmount)
    {
        $this->otherFeeAmount = $otherFeeAmount;
    }
    
    /**
     * @return mixed
     */
    public function getOtherFeeReasonDescription ()
    {
        return $this->otherFeeReasonDescription;
    }
    
    /**
     * @param mixed $otherFeeReasonDescription
     */
    public function setOtherFeeReasonDescription ($otherFeeReasonDescription)
    {
        $this->otherFeeReasonDescription = $otherFeeReasonDescription;
    }
    
    /**
     * @return mixed
     */
    public function getPromotionId ()
    {
        return $this->promotionId;
    }
    
    /**
     * @param mixed $promotionId
     */
    public function setPromotionId ($promotionId)
    {
        $this->promotionId = $promotionId;
    }
    
    /**
     * @return mixed
     */
    public function getPromotionType ()
    {
        return $this->promotionType;
    }
    
    /**
     * @param mixed $promotionType
     */
    public function setPromotionType ($promotionType)
    {
        $this->promotionType = $promotionType;
    }
    
    /**
     * @return mixed
     */
    public function getPromotionAmount ()
    {
        return $this->promotionAmount;
    }
    
    /**
     * @param mixed $promotionAmount
     */
    public function setPromotionAmount ($promotionAmount)
    {
        $this->promotionAmount = $promotionAmount;
    }
    
    /**
     * @return mixed
     */
    public function getDirectPaymentType ()
    {
        return $this->directPaymentType;
    }
    
    /**
     * @param mixed $directPaymentType
     */
    public function setDirectPaymentType ($directPaymentType)
    {
        $this->directPaymentType = $directPaymentType;
    }
    
    /**
     * @return mixed
     */
    public function getDirectPaymentAmount ()
    {
        return $this->directPaymentAmount;
    }
    
    /**
     * @param mixed $directPaymentAmount
     */
    public function setDirectPaymentAmount ($directPaymentAmount)
    {
        $this->directPaymentAmount = $directPaymentAmount;
    }
    
    /**
     * @return mixed
     */
    public function getOtherAmount ()
    {
        return $this->otherAmount;
    }
    
    /**
     * @param mixed $otherAmount
     */
    public function setOtherAmount ($otherAmount)
    {
        $this->otherAmount = $otherAmount;
    }
    
}