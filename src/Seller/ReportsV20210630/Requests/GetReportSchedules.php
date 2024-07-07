<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ReportScheduleList;

/**
 * getReportSchedules
 */
class GetReportSchedules extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  array  $reportTypes  A list of report types used to filter report schedules. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     */
    public function __construct(
        protected array $reportTypes,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/reports/2021-06-30/schedules';
    }

    public function createDtoFromResponse(Response $response): ReportScheduleList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ReportScheduleList::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultQuery(): array
    {
        return array_filter(['reportTypes' => $this->reportTypes]);
    }
}
