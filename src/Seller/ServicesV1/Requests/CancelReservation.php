<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ServicesV1\Responses\CancelReservationResponse;

/**
 * cancelReservation
 */
class CancelReservation extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $reservationId  Reservation Identifier
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function __construct(
        protected string $reservationId,
        protected array $marketplaceIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/service/v1/reservation/{$this->reservationId}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|CancelReservationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => CancelReservationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }
}
