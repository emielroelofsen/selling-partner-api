<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class Segment extends Dto
{
    /**
     * @param  ?SegmentDetails  $segmentDetails  The details about the segment. The FeaturedOfferExpectedPrice API uses only the sampleLocation portion as input.
     */
    public function __construct(
        public ?SegmentDetails $segmentDetails = null,
    ) {}
}
