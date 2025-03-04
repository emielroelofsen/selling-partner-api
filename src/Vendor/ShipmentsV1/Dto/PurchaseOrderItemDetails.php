<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class PurchaseOrderItemDetails extends Dto
{
    /**
     * @param  ?Money  $maximumRetailPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public ?Money $maximumRetailPrice = null,
    ) {}
}
