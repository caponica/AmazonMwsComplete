<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates single row data from an FBA Received Inventory Report
 */
class ReportListingPanEuOfferStatusRecord extends BaseMwsReportRecord
{
    const STRING_TRUE   = 'Y';
    const STRING_FALSE  = 'N';

    const PAN_EU_STATUS_ENROLLED        = 'Enrolled';
    const PAN_EU_STATUS_ELIGIBLE        = 'Eligible';
    const PAN_EU_STATUS_ENROLMENT_ENDED = 'Enrolment ended';
    const PAN_EU_STATUS_INELIGIBLE      = 'Ineligible';

    /**
     * @var string
     */
    private $asin;
    /**
     * @var string
     */
    private $msku;
    /**
     * @var string
     */
    private $fnSku;
    /**
     * @var string      Should be one of: Enrolment ended, Ineligible, Eligible, Enrolled, Enrolment ending soon, Failed to retrieve data
     */
    private $panEuStatus;
    /**
     * @var string      Represents a date, looks like 'Fri May 12 03:03:18 UTC 2017'
     */
    private $enrollmentDate;
    /**
     * @var string
     */
    private $title;

    /**
     * @var string      Either the price (like '£ 10.99') or one of: No listing, No offer required, Food, Hazmat, Plug, Product type
     */
    private $offerStatusUk;
    /**
     * @var string      Either the price (like '£ 10.99') or one of: No listing, No offer required, Food, Hazmat, Plug, Product type
     */
    private $offerStatusDe;
    /**
     * @var string      Either the price (like '£ 10.99') or one of: No listing, No offer required, Food, Hazmat, Plug, Product type
     */
    private $offerStatusFr;
    /**
     * @var string      Either the price (like '£ 10.99') or one of: No listing, No offer required, Food, Hazmat, Plug, Product type
     */
    private $offerStatusIt;
    /**
     * @var string      Either the price (like '£ 10.99') or one of: No listing, No offer required, Food, Hazmat, Plug, Product type
     */
    private $offerStatusEs;

    /**
     * @var string      Represents a date, looks like 'Tue Nov 10 13:15:14 UTC 2020'
     */
    private $lastActiveOn;
    /**
     * @var string      Represents a date, looks like 'Tue Nov 10 13:15:14 UTC 2020'
     */
    private $datePanEuExpires;

    /**
     * @var string
     */
    private $productComments;

    /**
     * @var string      Should be either Y or N
     */
    private $panEuBenefitsUk;
    /**
     * @var string      Should be either Y or N
     */
    private $panEuBenefitsDe;
    /**
     * @var string      Should be either Y or N
     */
    private $panEuBenefitsFr;
    /**
     * @var string      Should be either Y or N
     */
    private $panEuBenefitsIt;
    /**
     * @var string      Should be either Y or N
     */
    private $panEuBenefitsEs;

    /**
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportListingPanEuOfferStatus::EXPECTED_FIELD_COUNT);

        $this->asin                 = $fieldArray[0];
        $this->msku                 = $fieldArray[1];
        $this->enrol                = $fieldArray[2];
        $this->fnSku                = $fieldArray[3];
        $this->panEuStatus          = $fieldArray[4];
        $this->enrollmentDate       = $fieldArray[5];
        $this->title                = $fieldArray[6];
        $this->offerStatusUk        = $fieldArray[7];
        $this->offerStatusDe        = $fieldArray[8];
        $this->offerStatusFr        = $fieldArray[9];
        $this->offerStatusIt        = $fieldArray[10];
        $this->offerStatusEs        = $fieldArray[11];
        $this->lastActiveOn         = $fieldArray[12];
        $this->datePanEuExpires     = $fieldArray[13];
        $this->productComments      = $fieldArray[14];
        $this->panEuBenefitsUk      = $fieldArray[15];
        $this->panEuBenefitsDe      = $fieldArray[16];
        $this->panEuBenefitsFr      = $fieldArray[17];
        $this->panEuBenefitsIt      = $fieldArray[18];
        $this->panEuBenefitsEs      = $fieldArray[19];
    }

    private function evaluateBoolString($value) {
        if (self::STRING_TRUE === $value) {
            return true;
        }
        if (self::STRING_FALSE === $value) {
            return false;
        }
        return null;
    }

    public function isEnrolled() {
        return $this->evaluateBoolString($this->enrol);
    }

    public function hasBenefitsForSite($siteCode) {
        if ('uk' === $siteCode) {
            $value = $this->panEuBenefitsUk;
        } elseif ('de' === $siteCode) {
            $value = $this->panEuBenefitsDe;
        } elseif ('fr' === $siteCode) {
            $value = $this->panEuBenefitsFr;
        } elseif ('it' === $siteCode) {
            $value = $this->panEuBenefitsIt;
        } elseif ('es' === $siteCode) {
            $value = $this->panEuBenefitsEs;
        } else {
            throw new \InvalidArgumentException('Unexpected siteCode provided:' . $siteCode . '.');
        }
        return $this->evaluateBoolString($value);
    }

    public function getAsin() {
        return $this->asin;
    }
    public function getMsku() {
        return $this->msku;
    }
    // alias for getMsku()
    public function getSellerSku() {
        return $this->getMsku();
    }
    public function getFnSku() {
        return $this->fnSku;
    }

    public function getPanEuStatus() {
        return $this->panEuStatus;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getProductComments() {
        return $this->productComments;
    }

    public function getOfferStatusForSite($siteCode) {
        if ('uk' === $siteCode) {
            $value = $this->offerStatusUk;
        } elseif ('de' === $siteCode) {
            $value = $this->offerStatusDe;
        } elseif ('fr' === $siteCode) {
            $value = $this->offerStatusFr;
        } elseif ('it' === $siteCode) {
            $value = $this->offerStatusIt;
        } elseif ('es' === $siteCode) {
            $value = $this->offerStatusEs;
        } else {
            throw new \InvalidArgumentException('Unexpected siteCode provided:' . $siteCode . '.');
        }
        return $value;
    }


    private function convertStringToDate($string) {
        if (empty($string)) {
            return null;
        }

        return \DateTime::createFromFormat('D M d H:i:s e Y', $string);
    }
    public function getEnrollmentDate() {
        return $this->convertStringToDate($this->enrollmentDate);
    }
    public function getLastActiveOnDate() {
        return $this->convertStringToDate($this->lastActiveOn);
    }
    public function getPanEuExpiresDate() {
        return $this->convertStringToDate($this->datePanEuExpires);
    }

    public function isEligible() {
        if (self::PAN_EU_STATUS_ENROLLED === $this->panEuStatus) {
            return true;
        } elseif (self::PAN_EU_STATUS_ELIGIBLE === $this->panEuStatus) {
            return true;
        } elseif (self::PAN_EU_STATUS_ENROLMENT_ENDED === $this->panEuStatus) {
            return true; // Seems to mean that it's eligible, but something is (now) missing
        } elseif (self::PAN_EU_STATUS_INELIGIBLE === $this->panEuStatus) {
            return false;
        }
        return null; // Unknown status, returns falsy
    }
    public function shouldUsePanEuFbaFees() {
        if ($this->isEnrolled()) return true;
        if ($this->isEligible()) return true;
        return false;
    }

}
