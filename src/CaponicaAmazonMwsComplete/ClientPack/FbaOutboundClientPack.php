<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\FbaOutboundClient;


class FbaOutboundClientPack extends FbaOutboundClient {
    const PARAM_SELLER_ID                               = 'SellerId';
    const PARAM_MWS_AUTH_TOKEN                          = 'MWSAuthToken';
    const PARAM_SELLER_FULFILLMENT_ORDER_ID             = 'SellerFulfillmentOrderId';
    const PARAM_DISPLAYABLE_ORDER_ID                    = 'DisplayableOrderId';
    const PARAM_DISPLAYABLE_ORDER_DATETIME              = 'DisplayableOrderDateTime';
    const PARAM_DISPLAYABLE_ORDER_COMMENT               = 'DisplayableOrderComment';
    const PARAM_SHIPPING_SPEED_CATEGORY                 = 'ShippingSpeedCategory';
    const PARAM_SHIPPING_SPEED_STANDARD                 = 'Standard';
    const PARAM_SHIPPING_SPEED_EXPEDITED                = 'Expedited';
    const PARAM_SHIPPING_SPEED_PRIORITY                 = 'Priority';
    const PARAM_DESTINATION_ADDRESS                     = 'DestinationAddress';
    const PARAM_ADDRESS                                 = 'Address';
    const PARAM_DESTINATION_ADDRESS_NAME                = 'Name';
    const PARAM_DESTINATION_ADDRESS_LINE1               = 'Line1';
    const PARAM_DESTINATION_ADDRESS_LINE2               = 'Line2';
    const PARAM_DESTINATION_ADDRESS_LINE3               = 'Line3';
    const PARAM_DESTINATION_ADDRESS_STATE_OR_PROVINCE_CODE = 'StateOrProvinceCode';
    const PARAM_DESTINATION_ADDRESS_POSTAL_CODE         = 'PostalCode';
    const PARAM_DESTINATION_ADDRESS_CITY                = 'City';
    const PARAM_DESTINATION_ADDRESS_COUNTRY_CODE        = 'CountryCode';
    const PARAM_NOTIFICATION_EMAIL_LIST                 = 'NotificationEmailList';

    const PARAM_ITEMS                                   = 'Items';
    const PARAM_ITEMS_SELLER_SKU                        = 'SellerSKU';
    const PARAM_ITEMS_SELLER_FULFILLMENT_ORDER_ITEM_ID  = 'SellerFulfillmentOrderItemId';
    const PARAM_ITEMS_QUANTITY                          = 'Quantity';
    const PARAM_ITEMS_GIFT_MESSAGE                      = 'GiftMessage';
    const PARAM_ITEMS_DISPLAYABLE_COMMENT               = 'DisplayableComment';
    const PARAM_ITEMS_FULFILLMENT_NETWORK_SKU           = 'FulfillmentNetworkSKU';
    const PARAM_ITEMS_PER_UNIT_DECLARED_VALUE           = 'PerUnitDeclaredValue';
    const PARAM_ITEMS_PER_UNIT_PRICE                    = 'PerUnitPrice';
    const PARAM_ITEMS_PER_UNIT_TAX                      = 'PerUnitTax';


    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;

    public function __construct(MwsClientPoolConfig $poolConfig) {

        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();
        $this->mwsAuthToken     = $poolConfig->getMwsAuthToken();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix()),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion()
            
        );
    }

    private function getServiceUrlSuffix() {
        return '/FulfillmentOutboundShipment';
    }
    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################    

    public function callGetFulfillmentOrder($sellerFulfillmentOrderId) {

        $parameters[self::PARAM_SELLER_ID] = $this->sellerId;
        $parameters[self::PARAM_MWS_AUTH_TOKEN] = $this->mwsAuthToken;

        if (!empty($sellerFulfillmentOrderId)) {
            $parameters[self::PARAM_SELLER_FULFILLMENT_ORDER_ID] = $sellerFulfillmentOrderId;
        }
        
        return $this->getFulfillmentOrder($parameters);
    }

    public function callCreateFulfillmentOrder($sellerFulfillmentOrderId, $displayableOrderId, $displayableOrderDatetime,$displayableOrderComment,$shippingSpeed,$destinationAddressName,$destinationAddressLine1,$destinationAddressLine2='',$destinationAddressLine3='',$destinationAddressCity,$destinationAddressStateCode,$destinationAddressPostalCode,$destinationAddressCountryCode,$notificationEmail, $items) {

        $address = [];
        $itemsMember = [];
        $notificationEmailMember = [];

        if (!empty($items)) {
            foreach ($items as $item) {

                if (!empty($item['sellerSku'])) {
                    $itemMember[self::PARAM_ITEMS_SELLER_SKU] = $item['sellerSku'];
                }
                if (!empty($item['sellerFulfillmentOrderItemId'])) {
                    $itemMember[self::PARAM_ITEMS_SELLER_FULFILLMENT_ORDER_ITEM_ID] = $item['sellerFulfillmentOrderItemId'];
                }
                if (!empty($item['quantity'])) {
                    $itemMember[self::PARAM_ITEMS_QUANTITY] = $item['quantity'];
                }
                if (!empty($item['giftMessage'])) {
                    $itemMember[self::PARAM_ITEMS_GIFT_MESSAGE] = $item['giftMessage'];
                }
                if (!empty($item['displayableComment'])) {
                    $itemMember[self::PARAM_ITEMS_DISPLAYABLE_COMMENT] = $item['displayableComment'];
                }
                if (!empty($item['fulfillmentNetworkSku'])) {
                    $itemMember[self::PARAM_ITEMS_FULFILLMENT_NETWORK_SKU] = $item['fulfillmentNetworkSku'];
                }
                if (!empty($item['perUnitDeclaredValue'])) {
                    $itemMember[self::PARAM_ITEMS_PER_UNIT_DECLARED_VALUE] = ['CurrencyCode' => 'USD', 'Value' => $item['perUnitDeclaredValue']];
                }
                if (!empty($item['perUnitTax'])) {
                    $itemMember[self::PARAM_ITEMS_PER_UNIT_TAX] = ['CurrencyCode' => 'USD', 'Value' => $item['perUnitTax']];
                }

                $itemsMember['member'][] = $itemMember;

            }
        }
        if (!empty($notificationEmail)) {

            foreach ($notificationEmail as $email) {
                $notificationEmailMember['member'][] = $email;
            }
            
        }

        if (!empty($destinationAddressName)) {
            $address[self::PARAM_DESTINATION_ADDRESS_NAME] = $destinationAddressName;
        }
        if (!empty($destinationAddressLine1)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE1] = $destinationAddressLine1;
        }
        if (!empty($destinationAddressLine2)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE2] = $destinationAddressLine2;
        }
        if (!empty($destinationAddressLine3)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE3] = $destinationAddressLine3;
        }
        if (!empty($destinationAddressCity)) {
            $address[self::PARAM_DESTINATION_ADDRESS_CITY] = $destinationAddressCity;
        }
        if (!empty($destinationAddressStateCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_STATE_OR_PROVINCE_CODE] = $destinationAddressStateCode;
        }
        if (!empty($destinationAddressPostalCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_POSTAL_CODE] = $destinationAddressPostalCode;
        }
        if (!empty($destinationAddressCountryCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_COUNTRY_CODE] = $destinationAddressCountryCode;
        }

        if (!empty($sellerFulfillmentOrderId)) {
            $parameters[self::PARAM_SELLER_FULFILLMENT_ORDER_ID] = $sellerFulfillmentOrderId;
        }
        if (!empty($displayableOrderId)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_ID] = $displayableOrderId;
        }
        if (!empty($displayableOrderDatetime)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_DATETIME] = $displayableOrderDatetime;
        }
        if (!empty($displayableOrderComment)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_COMMENT] = $displayableOrderComment;
        }
        if (!empty($shippingSpeed)) {
            $parameters[self::PARAM_SHIPPING_SPEED_CATEGORY] = $shippingSpeed;
        }

        $parameters[self::PARAM_SELLER_ID] = $this->sellerId;
        $parameters[self::PARAM_MWS_AUTH_TOKEN] = $this->mwsAuthToken;
        $parameters[self::PARAM_DESTINATION_ADDRESS] = $address;
        $parameters[self::PARAM_NOTIFICATION_EMAIL_LIST] = $notificationEmailMember;
        $parameters[self::PARAM_ITEMS] = $itemsMember;

        return $this->createFulfillmentOrder($parameters);
    }
    public function callGetFulfillmentPreview($sellerFulfillmentOrderId, $displayableOrderId, $displayableOrderDatetime,$displayableOrderComment,$shippingSpeed,$destinationAddressName,$destinationAddressLine1,$destinationAddressLine2='',$destinationAddressLine3='',$destinationAddressCity,$destinationAddressStateCode,$destinationAddressPostalCode,$destinationAddressCountryCode,$items) {


        $address = [];
        $itemsMember = [];

        if (!empty($items)) {
            foreach ($items as $item) {

                if (!empty($item['sellerSku'])) {
                    $itemMember[self::PARAM_ITEMS_SELLER_SKU] = $item['sellerSku'];
                }
                if (!empty($item['sellerFulfillmentOrderItemId'])) {
                    $itemMember[self::PARAM_ITEMS_SELLER_FULFILLMENT_ORDER_ITEM_ID] = $item['sellerFulfillmentOrderItemId'];
                }
                if (!empty($item['quantity'])) {
                    $itemMember[self::PARAM_ITEMS_QUANTITY] = $item['quantity'];
                }
                if (!empty($item['giftMessage'])) {
                    $itemMember[self::PARAM_ITEMS_GIFT_MESSAGE] = $item['giftMessage'];
                }
                if (!empty($item['displayableComment'])) {
                    $itemMember[self::PARAM_ITEMS_DISPLAYABLE_COMMENT] = $item['displayableComment'];
                }
                if (!empty($item['fulfillmentNetworkSku'])) {
                    $itemMember[self::PARAM_ITEMS_FULFILLMENT_NETWORK_SKU] = $item['fulfillmentNetworkSku'];
                }
                if (!empty($item['perUnitDeclaredValue'])) {
                    $itemMember[self::PARAM_ITEMS_PER_UNIT_DECLARED_VALUE] = ['CurrencyCode' => 'USD', 'Value' => $item['perUnitDeclaredValue']];
                }
                if (!empty($item['perUnitTax'])) {
                    $itemMember[self::PARAM_ITEMS_PER_UNIT_TAX] = ['CurrencyCode' => 'USD', 'Value' => $item['perUnitTax']];
                }

                $itemsMember['member'][] = $itemMember;

            }
        }




        if (!empty($destinationAddressName)) {
            $address[self::PARAM_DESTINATION_ADDRESS_NAME] = $destinationAddressName;
        }
        if (!empty($destinationAddressLine1)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE1] = $destinationAddressLine1;
        }
        if (!empty($destinationAddressLine2)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE2] = $destinationAddressLine2;
        }
        if (!empty($destinationAddressLine3)) {
            $address[self::PARAM_DESTINATION_ADDRESS_LINE3] = $destinationAddressLine3;
        }
        if (!empty($destinationAddressCity)) {
            $address[self::PARAM_DESTINATION_ADDRESS_CITY] = $destinationAddressCity;
        }
        if (!empty($destinationAddressStateCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_STATE_OR_PROVINCE_CODE] = $destinationAddressStateCode;
        }
        if (!empty($destinationAddressPostalCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_POSTAL_CODE] = $destinationAddressPostalCode;
        }
        if (!empty($destinationAddressCountryCode)) {
            $address[self::PARAM_DESTINATION_ADDRESS_COUNTRY_CODE] = $destinationAddressCountryCode;
        }

        if (!empty($sellerFulfillmentOrderId)) {
            $parameters[self::PARAM_SELLER_FULFILLMENT_ORDER_ID] = $sellerFulfillmentOrderId;
        }
        if (!empty($displayableOrderId)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_ID] = $displayableOrderId;
        }
        if (!empty($displayableOrderDatetime)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_DATETIME] = $displayableOrderDatetime;
        }
        if (!empty($displayableOrderComment)) {
            $parameters[self::PARAM_DISPLAYABLE_ORDER_COMMENT] = $displayableOrderComment;
        }
        if (!empty($shippingSpeed)) {
            $parameters[self::PARAM_SHIPPING_SPEED_CATEGORY] = $shippingSpeed;
        }

        $parameters[self::PARAM_SELLER_ID] = $this->sellerId;
        $parameters[self::PARAM_MWS_AUTH_TOKEN] = $this->mwsAuthToken;
        $parameters[self::PARAM_ADDRESS] = $address;
        $parameters[self::PARAM_ITEMS] = $itemsMember;

        return $this->getFulfillmentPreview($parameters);


    }

}