<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
	/**
	 * @param ?string $nextToken A generated string used to pass information to your next request. If NextToken is returned, pass the value of NextToken to the next request. If NextToken is not returned, there are no more order items to return.
	 * @param ?mixed $additionalProperties
	 */
	public function __construct(
		public readonly ?string $nextToken = null,
		mixed ...$additionalProperties,
	) {
		parent::__construct(...$additionalProperties);
	}
}
