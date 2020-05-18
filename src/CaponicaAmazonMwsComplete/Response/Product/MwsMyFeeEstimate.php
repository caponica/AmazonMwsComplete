<?php

namespace CaponicaAmazonMwsComplete\Response\Product;

/* 
 *   Object representation of the XML response from Amazon. The raw XML looks like this:
 *
 *   <GetMyFeesEstimateResult>
 *     <FeesEstimateResultList>
 *       <FeesEstimateResult>
 *         <FeesEstimate>
 *           <TimeOfFeesEstimation>2020-05-18T17:59:15.375Z</TimeOfFeesEstimation>
 *           <TotalFeesEstimate>
 *             <Amount>3.77</Amount>
 *             <CurrencyCode>GBP</CurrencyCode>
 *           </TotalFeesEstimate>
 *           <FeeDetailList>
 *             <FeeDetail>
 *               <FeeAmount>
 *                 <Amount>1.50</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeeAmount>
 *               <FinalFee>
 *                 <Amount>1.50</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FinalFee>
 *               <FeePromotion>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeePromotion>
 *               <FeeType>ReferralFee</FeeType>
 *             </FeeDetail>
 *             <FeeDetail>
 *               <FeeAmount>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeeAmount>
 *               <FinalFee>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FinalFee>
 *               <FeePromotion>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeePromotion>
 *               <FeeType>VariableClosingFee</FeeType>
 *             </FeeDetail>
 *             <FeeDetail>
 *               <FeeAmount>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeeAmount>
 *               <FinalFee>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FinalFee>
 *               <FeePromotion>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeePromotion>
 *               <FeeType>PerItemFee</FeeType>
 *             </FeeDetail>
 *             <FeeDetail>
 *               <FeeAmount>
 *                 <Amount>2.27</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeeAmount>
 *               <FinalFee>
 *                 <Amount>2.27</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FinalFee>
 *               <FeePromotion>
 *                 <Amount>0.00</Amount>
 *                 <CurrencyCode>GBP</CurrencyCode>
 *               </FeePromotion>
 *               <FeeType>FBAFees</FeeType>
 *               <IncludedFeeDetailList>
 *                 <FeeDetail>
 *                   <FeeAmount>
 *                     <Amount>2.27</Amount>
 *                     <CurrencyCode>GBP</CurrencyCode>
 *                   </FeeAmount>
 *                   <FinalFee>
 *                     <Amount>2.27</Amount>
 *                     <CurrencyCode>GBP</CurrencyCode>
 *                   </FinalFee>
 *                   <FeePromotion>
 *                     <Amount>0.00</Amount>
 *                     <CurrencyCode>GBP</CurrencyCode>
 *                   </FeePromotion>
 *                   <FeeType>FBAPickAndPack</FeeType>
 *                 </FeeDetail>
 *               </IncludedFeeDetailList>
 *             </FeeDetail>
 *           </FeeDetailList>
 *         </FeesEstimate>
 *         <FeesEstimateIdentifier>
 *           <MarketplaceId>A1F83G8C2ARO7P</MarketplaceId>
 *           <IdType>ASIN</IdType>
 *           <SellerId>XXXXXXXXXXXXXX</SellerId>
 *           <SellerInputIdentifier>1</SellerInputIdentifier>
 *           <IsAmazonFulfilled>true</IsAmazonFulfilled>
 *           <IdValue>XXXXXXXXXX</IdValue>
 *           <PriceToEstimateFees>
 *             <ListingPrice>
 *               <Amount>10</Amount>
 *               <CurrencyCode>GBP</CurrencyCode>
 *             </ListingPrice>
 *           </PriceToEstimateFees>
 *         </FeesEstimateIdentifier>
 *         <Status>Success</Status>
 *       </FeesEstimateResult>
 *     </FeesEstimateResultList>
 *   </GetMyFeesEstimateResult>
 *   (There can be more than one GetMyFeesEstimateResult in response to a single request)
 * 
 */

class MwsMyFeeEstimate {
    const FEE_FBA_FEES  = 'FBAFees';
    const FEE_PER_ITEM  = 'PerItemFee';
    const FEE_REFERRAL  = 'ReferralFee';
    const FEE_TOTAL     = 'Total';
    const FEE_VARIABLE  = 'VariableClosingFee';

    const STATUS_SUCCESS = 'Success';
    const STATUS_ERROR   = 'ServerError';

    const ID_TYPE_ASIN  = 'ASIN';

    /** @var string $asin */
    public $asin;
    /** @var string $currency */
    public $currency;
    /** @var array $feesArray */
    public $feesArray = [];

    public function __construct(\MarketplaceWebServiceProducts_Model_FeesEstimateResult $fer) {
        /** @var \MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier $fei */
        $fei = $fer->getFeesEstimateIdentifier();
        if ($fei->getIdType() === self::ID_TYPE_ASIN) {
            $this->asin = $fei->getIdValue();
        }

        if (self::STATUS_SUCCESS !== $fer->getStatus()) {
            $errorCode = $fer->getError()->getCode();
            $errorMsg  = $fer->getError()->getMessage();
            throw new \InvalidArgumentException("ERROR retrieving fees for ASIN {$this->asin} #$errorCode : $errorMsg");
        }

        /** @var \MarketplaceWebServiceProducts_Model_FeesEstimate $fe */
        $fe = $fer->getFeesEstimate();
        /** @var \MarketplaceWebServiceProducts_Model_MoneyType $totalFees */
        $totalFees = $fe->getTotalFeesEstimate();

        $this->currency = $totalFees->getCurrencyCode();
        $this->feesArray[self::FEE_TOTAL] = $totalFees->getAmount();

        /** @var \MarketplaceWebServiceProducts_Model_FeeDetailList $fdList */
        $fdList = $fe->getFeeDetailList();
        /** @var \MarketplaceWebServiceProducts_Model_FeeDetail $fd */
        foreach ($fdList->getFeeDetail() as $fd) {
            /** @var \MarketplaceWebServiceProducts_Model_MoneyType $finalFee */
            $finalFee = $fd->getFinalFee();
            $this->feesArray[$fd->getFeeType()] = $finalFee->getAmount();
        }
    }

    public function getAsin() {
        return $this->asin;
    }
    public function getFbaFee() {
        foreach ($this->feesArray as $key => $value) {
            if (self::FEE_FBA_FEES === $key) {
                return $value;
            }
        }
    }
}