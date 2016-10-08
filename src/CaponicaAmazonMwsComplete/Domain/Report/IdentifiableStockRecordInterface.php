<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * A report record which contains stock identifiable by ASIN and MSKU
 */
interface IdentifiableStockRecordInterface {
    public function getAsin();

    public function getSellerSku();
}