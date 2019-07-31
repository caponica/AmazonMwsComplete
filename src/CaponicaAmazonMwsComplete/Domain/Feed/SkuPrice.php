<?php

namespace CaponicaAmazonMwsComplete\Domain\Feed;

/**
 * Domain object which encapsulates the data that could be submitted as part of a Price Feed
 *
 * @package CaponicaAmazonMwsComplete\Domain\Feed
 */
final class SkuPrice {
    private $sku;
    private $amount;
    private $currency;
    private $saleAmount;
    private $saleStartDate;
    private $saleEndDate;
    private $minimumAdvertisedPrice;

    /**
     * SkuPrice constructor, only the first two arguments (Sku and Amount) are required.
     *
     * @param    string $sku
     * @param     float $amount
     * @param     float $saleAmount
     * @param \DateTime $saleStartDate
     * @param \DateTime $saleEndDate
     * @param     float $minimumAdvertisedPrice
     * @param    string $currency
     */
    public function __construct($sku, $amount,
                                $saleAmount=0.0, $saleStartDate=null, $saleEndDate=null,
                                $minimumAdvertisedPrice=null, $currency='DEFAULT')
    {
        $this->sku = $sku;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->saleAmount = $saleAmount;
        $this->saleStartDate = $saleStartDate;
        $this->saleEndDate = $saleEndDate;
        $this->minimumAdvertisedPrice = $minimumAdvertisedPrice;
    }


    public function hasFullyDefinedSale() {
        if (empty($this->saleAmount)) {
            return false;
        }
        if (empty($this->saleStartDate)) {
            return false;
        }
        if (empty($this->saleEndDate)) {
            return false;
        }
        return true;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getAmountFormatted()
    {
        return number_format($this->amount, 2, '.', '');
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return float|null
     */
    public function getSaleAmountFormatted()
    {
        return number_format($this->saleAmount, 2, '.', '');
    }

    /**
     * @return \DateTime|null
     */
    public function getSaleStartDateFormatted()
    {
        return $this->saleStartDate->format('c');
    }

    /**
     * @return \DateTime|null
     */
    public function getSaleEndDateFormatted()
    {
        return $this->saleEndDate->format('c');
    }

    /**
     * @return float|null
     */
    public function getMapAmountFormatted()
    {
        return $this->minimumAdvertisedPrice;
    }
}
