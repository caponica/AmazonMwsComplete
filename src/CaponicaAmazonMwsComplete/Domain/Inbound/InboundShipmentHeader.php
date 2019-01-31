<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class InboundShipmentHeader implements Arrayable
{
    const PARAM_SHIPMENT_NAME = 'ShipmentName';
    const PARAM_SHIP_FROM_ADDRESS = 'ShipFromAddress';
    const PARAM_DESTINATION_FULFILLMENT_CENTER_ID = 'DestinationFulfillmentCenterId';
    const PARAM_LABEL_PREP_PREFERENCE = 'LabelPrepPreference';
    const PARAM_ARE_CASES_REQUIRED = 'AreCasesRequired';
    const PARAM_SHIPMENT_STATUS = 'ShipmentStatus';
    const PARAM_INTENDED_BOX_CONTENTS_SOURCE = 'IntendedBoxContentsSource';

    /**
     * @var string
     */
    private $shipmentName;

    /**
     * @var Address
     */
    private $fromAddress;

    /**
     * @var string
     */
    private $destinationId;

    /**
     * @var string
     */
    private $labelPreference;

    /**
     * @var bool
     */
    private $casesRequired;

    /**
     * @var string
     */
    private $shipmentStatus;

    /**
     * @var string
     */
    private $intendedBoxContentsSource;

    /**
     * CreateInboundShipmentHeader constructor.
     *
     * @param string      $shipmentName
     * @param Address     $fromAddress
     * @param string      $destinationId
     * @param string      $labelPreference
     * @param bool        $casesRequired
     * @param string      $shipmentStatus
     * @param string|null $intendedBoxContentsSource
     */
    public function __construct($shipmentName,
        Address $fromAddress,
        $destinationId,
        $labelPreference,
        $casesRequired,
        $shipmentStatus,
        $intendedBoxContentsSource = null)
    {
        $this->shipmentName              = $shipmentName;
        $this->fromAddress               = $fromAddress;
        $this->destinationId             = $destinationId;
        $this->labelPreference           = $labelPreference;
        $this->casesRequired             = $casesRequired;
        $this->shipmentStatus            = $shipmentStatus;
        $this->intendedBoxContentsSource = $intendedBoxContentsSource;
    }

    public function toArray()
    {
        $header = [
            self::PARAM_SHIPMENT_NAME                     => $this->shipmentName,
            self::PARAM_SHIP_FROM_ADDRESS                 => $this->fromAddress->toArray(),
            self::PARAM_DESTINATION_FULFILLMENT_CENTER_ID => $this->destinationId,
            self::PARAM_LABEL_PREP_PREFERENCE             => $this->labelPreference,
            self::PARAM_ARE_CASES_REQUIRED                => $this->casesRequired,
            self::PARAM_SHIPMENT_STATUS                   => $this->shipmentStatus,
        ];

        if ( ! empty($this->intendedBoxContentsSource)) {
            $header[self::PARAM_INTENDED_BOX_CONTENTS_SOURCE] = $this->intendedBoxContentsSource;
        }

        return $header;
    }
}
