<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAdImagesResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAdImagesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AdImages extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/adimages?wsdl';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
            'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
            'VideoTargetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum',
            'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
            'ConditionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionTypeEnum',
            'AdTargetStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetStateSelectionEnum',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
            'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
            'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
            'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
            'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
            'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
            'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
            'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
            'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
            'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
            'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
            'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
            'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
            'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
            'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
            'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
            'SerpLayoutEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'IncomeGradeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
            'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
            'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
            'AdImageFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageFieldEnum',
            'AdImageTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageTypeEnum',
            'AdImageSubtypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageSubtypeEnum',
            'AdImageAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageAddItem',
            'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageGetItem',
            'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageSelectionCriteria',
            'AdImageHashesCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageHashesCriteria',
            'AdImageActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageActionResult',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddAdImagesRequest $parameters): AddAdImagesResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function get(GetAdImagesRequest $parameters): GetAdImagesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function delete(DeleteAdImagesRequest $parameters): DeleteAdImagesResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
