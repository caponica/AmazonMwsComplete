<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class PartneredLtlDataInput implements Arrayable
{
    const PARAM_CONTACT = 'Contact';
    const PARAM_BOX_COUNT = 'BoxCount';
    const PARAM_FREIGHT_READY_DATE = 'FreightReadyDate';
    const PARAM_SELLER_FREIGHT_CLASS = 'SellerFreightClass';
    const PARAM_PALLET_LIST = 'PalletList';
    const PARAM_TOTAL_WEIGHT = 'TotalWeight';
    const PARAM_SELLER_DECLARED_VALUE = 'SellerDeclaredValue';

    /**
     * @var TransportContentContact
     */
    private $contact;

    /**
     * @var int
     */
    private $boxCount;

    /**
     * @var string Must be in YYYY-MM-DD format.
     */
    private $freightReadyDate;

    /**
     * @var string|null
     */
    private $sellerFreightClass;

    /**
     * @var TransportContentPalletList|null
     */
    private $palletList;

    /**
     * @var TransportContentWeight|null
     */
    private $totalWeight;

    /**
     * @var TransportContentAmount|null
     */
    private $sellerDeclaredValue;

    /**
     * PartneredLtlDataInput constructor.
     *
     * @param TransportContentContact         $contact
     * @param int                             $boxCount
     * @param string                          $freightReadyDate
     * @param string|null                     $sellerFreightClass
     * @param TransportContentPalletList|null $palletList
     * @param TransportContentWeight|null     $totalWeight
     * @param TransportContentAmount|null     $sellerDeclaredValue
     */
    public function __construct(TransportContentContact $contact,
        $boxCount,
        $freightReadyDate,
        $sellerFreightClass = null,
        TransportContentPalletList $palletList = null,
        TransportContentWeight $totalWeight = null,
        TransportContentAmount $sellerDeclaredValue = null)
    {
        $this->contact             = $contact;
        $this->boxCount            = $boxCount;
        $this->freightReadyDate    = $freightReadyDate;
        $this->sellerFreightClass  = $sellerFreightClass;
        $this->palletList          = $palletList;
        $this->totalWeight         = $totalWeight;
        $this->sellerDeclaredValue = $sellerDeclaredValue;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $data = [
            self::PARAM_CONTACT            => $this->contact->toArray(),
            self::PARAM_BOX_COUNT          => $this->boxCount,
            self::PARAM_FREIGHT_READY_DATE => $this->freightReadyDate,
        ];

        if ($this->sellerFreightClass !== null) {
            $data[self::PARAM_SELLER_FREIGHT_CLASS] = $this->sellerFreightClass;
        }

        if ($this->palletList instanceof TransportContentPalletList) {
            $data[self::PARAM_PALLET_LIST] = ['member' => $this->palletList->toArray()];
        }

        if ($this->totalWeight instanceof TransportContentWeight) {
            $data[self::PARAM_TOTAL_WEIGHT] = $this->totalWeight->toArray();
        }

        if ($this->sellerDeclaredValue instanceof TransportContentAmount) {
            $data[self::PARAM_SELLER_DECLARED_VALUE] = $this->sellerDeclaredValue->toArray();
        }

        return $data;
    }
}
