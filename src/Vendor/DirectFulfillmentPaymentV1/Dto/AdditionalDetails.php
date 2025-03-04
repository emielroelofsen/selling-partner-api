<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class AdditionalDetails extends Dto
{
    /**
     * @param  string  $type  The type of the additional information provided by the selling party.
     * @param  string  $detail  The detail of the additional information provided by the selling party.
     * @param  ?string  $languageCode  The language code of the additional information detail.
     */
    public function __construct(
        public string $type,
        public string $detail,
        public ?string $languageCode = null,
    ) {}
}
