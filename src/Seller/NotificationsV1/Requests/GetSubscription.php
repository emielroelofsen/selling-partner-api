<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\NotificationsV1\Responses\GetSubscriptionResponse;

/**
 * getSubscription
 */
class GetSubscription extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $notificationType  The type of notification.
     *
     *  For more information about notification types, refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values).
     * @param  ?string  $payloadVersion  The version of the payload object to be used in the notification.
     */
    public function __construct(
        protected string $notificationType,
        protected ?string $payloadVersion = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/notifications/v1/subscriptions/{$this->notificationType}";
    }

    public function createDtoFromResponse(Response $response): GetSubscriptionResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetSubscriptionResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultQuery(): array
    {
        return array_filter(['payloadVersion' => $this->payloadVersion]);
    }
}
