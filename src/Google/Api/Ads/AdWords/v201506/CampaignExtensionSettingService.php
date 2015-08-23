<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201506;
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * CampaignExtensionSettingService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class CampaignExtensionSettingService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'CampaignExtensionSettingService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignExtensionSettingService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignExtensionSettingService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'                 => AuthenticationError::class,
        'AuthorizationError'                  => AuthorizationError::class,
        'CallConversionType'                  => CallConversionType::class,
        'CallFeedItem'                        => CallFeedItem::class,
        'CalloutFeedItem'                     => CalloutFeedItem::class,
        'ClientTermsError'                    => ClientTermsError::class,
        'CollectionSizeError'                 => CollectionSizeError::class,
        'CustomParameter'                     => CustomParameter::class,
        'CustomParameters'                    => CustomParameters::class,
        'DateError'                           => DateError::class,
        'DateRange'                           => DateRange::class,
        'DisapprovalReason'                   => DisapprovalReason::class,
        'DistinctError'                       => DistinctError::class,
        'EntityAccessDenied'                  => EntityAccessDenied::class,
        'EntityCountLimitExceeded'            => EntityCountLimitExceeded::class,
        'EntityNotFound'                      => EntityNotFound::class,
        'ExtensionSettingError'               => ExtensionSettingError::class,
        'FeedItemAttributeError'              => FeedItemAttributeError::class,
        'FeedItemDevicePreference'            => FeedItemDevicePreference::class,
        'FeedItemPolicyData'                  => FeedItemPolicyData::class,
        'FeedItemSchedule'                    => FeedItemSchedule::class,
        'FeedItemScheduling'                  => FeedItemScheduling::class,
        'IdError'                             => IdError::class,
        'InternalApiError'                    => InternalApiError::class,
        'NotEmptyError'                       => NotEmptyError::class,
        'NullError'                           => NullError::class,
        'OperationAccessDenied'               => OperationAccessDenied::class,
        'OrderBy'                             => OrderBy::class,
        'Paging'                              => Paging::class,
        'Predicate'                           => Predicate::class,
        'QueryError'                          => QueryError::class,
        'QuotaCheckError'                     => QuotaCheckError::class,
        'RangeError'                          => RangeError::class,
        'RateExceededError'                   => RateExceededError::class,
        'ReadOnlyError'                       => ReadOnlyError::class,
        'RejectedError'                       => RejectedError::class,
        'RequestError'                        => RequestError::class,
        'RequiredError'                       => RequiredError::class,
        'ReviewFeedItem'                      => ReviewFeedItem::class,
        'SelectorError'                       => SelectorError::class,
        'SizeLimitError'                      => SizeLimitError::class,
        'SoapHeader'                          => SoapRequestHeader::class,
        'SoapResponseHeader'                  => SoapResponseHeader::class,
        'StringLengthError'                   => StringLengthError::class,
        'UrlError'                            => UrlError::class,
        'UrlList'                             => UrlList::class,
        'AppFeedItem'                         => AppFeedItem::class,
        'DatabaseError'                       => DatabaseError::class,
        'PolicyData'                          => PolicyData::class,
        'SitelinkFeedItem'                    => SitelinkFeedItem::class,
        'ApiError'                            => ApiError::class,
        'ApiException'                        => ApiException::class,
        'ApplicationException'                => ApplicationException::class,
        'ExtensionFeedItem'                   => ExtensionFeedItem::class,
        'ExtensionSetting'                    => ExtensionSetting::class,
        'Selector'                            => Selector::class,
        'CampaignExtensionSetting'            => CampaignExtensionSetting::class,
        'CampaignExtensionSettingOperation'   => CampaignExtensionSettingOperation::class,
        'CampaignExtensionSettingPage'        => CampaignExtensionSettingPage::class,
        'CampaignExtensionSettingReturnValue' => CampaignExtensionSettingReturnValue::class,
        'ListReturnValue'                     => ListReturnValue::class,
        'Operation'                           => Operation::class,
        'Page'                                => Page::class,
        'AppFeedItem.AppStore'                => AppFeedItemAppStore::class,
        'AuthenticationError.Reason'          => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'           => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'             => ClientTermsErrorReason::class,
        'CollectionSizeError.Reason'          => CollectionSizeErrorReason::class,
        'DatabaseError.Reason'                => DatabaseErrorReason::class,
        'DateError.Reason'                    => DateErrorReason::class,
        'DayOfWeek'                           => DayOfWeek::class,
        'DistinctError.Reason'                => DistinctErrorReason::class,
        'EntityAccessDenied.Reason'           => EntityAccessDeniedReason::class,
        'EntityCountLimitExceeded.Reason'     => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason'               => EntityNotFoundReason::class,
        'ExtensionSetting.Platform'           => ExtensionSettingPlatform::class,
        'ExtensionSettingError.Reason'        => ExtensionSettingErrorReason::class,
        'FeedItem.Status'                     => FeedItemStatus::class,
        'FeedItemApprovalStatus'              => FeedItemApprovalStatus::class,
        'FeedItemValidationStatus'            => FeedItemValidationStatus::class,
        'Feed.Type'                           => FeedType::class,
        'IdError.Reason'                      => IdErrorReason::class,
        'InternalApiError.Reason'             => InternalApiErrorReason::class,
        'MinuteOfHour'                        => MinuteOfHour::class,
        'NotEmptyError.Reason'                => NotEmptyErrorReason::class,
        'NullError.Reason'                    => NullErrorReason::class,
        'OperationAccessDenied.Reason'        => OperationAccessDeniedReason::class,
        'Operator'                            => Operator::class,
        'Predicate.Operator'                  => PredicateOperator::class,
        'QueryError.Reason'                   => QueryErrorReason::class,
        'QuotaCheckError.Reason'              => QuotaCheckErrorReason::class,
        'RangeError.Reason'                   => RangeErrorReason::class,
        'RateExceededError.Reason'            => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'                => ReadOnlyErrorReason::class,
        'RejectedError.Reason'                => RejectedErrorReason::class,
        'RequestError.Reason'                 => RequestErrorReason::class,
        'RequiredError.Reason'                => RequiredErrorReason::class,
        'SelectorError.Reason'                => SelectorErrorReason::class,
        'SizeLimitError.Reason'               => SizeLimitErrorReason::class,
        'SortOrder'                           => SortOrder::class,
        'StringLengthError.Reason'            => StringLengthErrorReason::class,
        'UrlError.Reason'                     => UrlErrorReason::class,
        'get'                                 => CampaignExtensionSettingServiceGet::class,
        'getResponse'                         => CampaignExtensionSettingServiceGetResponse::class,
        'mutate'                              => CampaignExtensionSettingServiceMutate::class,
        'mutateResponse'                      => CampaignExtensionSettingServiceMutateResponse::class,
        'query'                               => Query::class,
        'queryResponse'                       => QueryResponse::class,
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options['classmap'] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME, self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a list of CampaignExtensionSettings that meet the selector criteria.
     * 
     * @param selector Determines which CampaignExtensionSettings to return. If empty, all
     * CampaignExtensionSettings are returned.
     * @return The list of CampaignExtensionSettings specified by the selector.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new CampaignExtensionSettingServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Applies the list of mutate operations (add, remove, and set).
     * 
     * @param operations The operations to apply. The same {@link CampaignExtensionSetting} cannot be
     * specified in more than one operation.
     * @return The changed {@link CampaignExtensionSetting}s.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new CampaignExtensionSettingServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a list of CampaignExtensionSettings that match the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @return The list of CampaignExtensionSettings specified by the query.
     * @throws ApiException Indicates a problem with the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
