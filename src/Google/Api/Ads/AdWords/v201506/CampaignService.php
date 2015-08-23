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
   * CampaignService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class CampaignService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'CampaignService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AdxError'                                       => AdxError::class,
        'ApiError'                                       => ApiError::class,
        'ApiException'                                   => ApiException::class,
        'ApplicationException'                           => ApplicationException::class,
        'LabelAttribute'                                 => LabelAttribute::class,
        'AuthenticationError'                            => AuthenticationError::class,
        'AuthorizationError'                             => AuthorizationError::class,
        'BiddingErrors'                                  => BiddingErrors::class,
        'BiddingScheme'                                  => BiddingScheme::class,
        'BiddingStrategyConfiguration'                   => BiddingStrategyConfiguration::class,
        'Bids'                                           => Bids::class,
        'Budget'                                         => Budget::class,
        'BudgetError'                                    => BudgetError::class,
        'BudgetOptimizerBiddingScheme'                   => BudgetOptimizerBiddingScheme::class,
        'Campaign'                                       => Campaign::class,
        'CampaignError'                                  => CampaignError::class,
        'CampaignLabel'                                  => CampaignLabel::class,
        'CampaignLabelOperation'                         => CampaignLabelOperation::class,
        'CampaignLabelReturnValue'                       => CampaignLabelReturnValue::class,
        'TextLabel'                                      => TextLabel::class,
        'DisplayAttribute'                               => DisplayAttribute::class,
        'CampaignOperation'                              => CampaignOperation::class,
        'CampaignPage'                                   => CampaignPage::class,
        'CampaignReturnValue'                            => CampaignReturnValue::class,
        'ClientTermsError'                               => ClientTermsError::class,
        'ComparableValue'                                => ComparableValue::class,
        'ConversionOptimizerBiddingScheme'               => ConversionOptimizerBiddingScheme::class,
        'ConversionOptimizerEligibility'                 => ConversionOptimizerEligibility::class,
        'CpaBid'                                         => CpaBid::class,
        'CpcBid'                                         => CpcBid::class,
        'CpmBid'                                         => CpmBid::class,
        'CustomParameter'                                => CustomParameter::class,
        'CustomParameters'                               => CustomParameters::class,
        'DatabaseError'                                  => DatabaseError::class,
        'DateError'                                      => DateError::class,
        'DateRange'                                      => DateRange::class,
        'DateRangeError'                                 => DateRangeError::class,
        'DistinctError'                                  => DistinctError::class,
        'DoubleValue'                                    => DoubleValue::class,
        'DynamicSearchAdsSetting'                        => DynamicSearchAdsSetting::class,
        'EnhancedCpcBiddingScheme'                       => EnhancedCpcBiddingScheme::class,
        'EntityAccessDenied'                             => EntityAccessDenied::class,
        'EntityCountLimitExceeded'                       => EntityCountLimitExceeded::class,
        'EntityNotFound'                                 => EntityNotFound::class,
        'ForwardCompatibilityError'                      => ForwardCompatibilityError::class,
        'FrequencyCap'                                   => FrequencyCap::class,
        'GeoTargetTypeSetting'                           => GeoTargetTypeSetting::class,
        'IdError'                                        => IdError::class,
        'InternalApiError'                               => InternalApiError::class,
        'Label'                                          => Label::class,
        'ListReturnValue'                                => ListReturnValue::class,
        'LongValue'                                      => LongValue::class,
        'ManualCpcBiddingScheme'                         => ManualCpcBiddingScheme::class,
        'ManualCpmBiddingScheme'                         => ManualCpmBiddingScheme::class,
        'Money'                                          => Money::class,
        'NetworkSetting'                                 => NetworkSetting::class,
        'NewEntityCreationError'                         => NewEntityCreationError::class,
        'NotEmptyError'                                  => NotEmptyError::class,
        'NullError'                                      => NullError::class,
        'NumberValue'                                    => NumberValue::class,
        'Operation'                                      => Operation::class,
        'OperationAccessDenied'                          => OperationAccessDenied::class,
        'OperatorError'                                  => OperatorError::class,
        'OrderBy'                                        => OrderBy::class,
        'Page'                                           => Page::class,
        'PageOnePromotedBiddingScheme'                   => PageOnePromotedBiddingScheme::class,
        'Paging'                                         => Paging::class,
        'Predicate'                                      => Predicate::class,
        'QueryError'                                     => QueryError::class,
        'QuotaCheckError'                                => QuotaCheckError::class,
        'RangeError'                                     => RangeError::class,
        'RateExceededError'                              => RateExceededError::class,
        'ReadOnlyError'                                  => ReadOnlyError::class,
        'RealTimeBiddingSetting'                         => RealTimeBiddingSetting::class,
        'RegionCodeError'                                => RegionCodeError::class,
        'RejectedError'                                  => RejectedError::class,
        'RequestError'                                   => RequestError::class,
        'RequiredError'                                  => RequiredError::class,
        'Selector'                                       => Selector::class,
        'SelectorError'                                  => SelectorError::class,
        'Setting'                                        => Setting::class,
        'SettingError'                                   => SettingError::class,
        'ShoppingSetting'                                => ShoppingSetting::class,
        'SizeLimitError'                                 => SizeLimitError::class,
        'SoapHeader'                                     => SoapRequestHeader::class,
        'SoapResponseHeader'                             => SoapResponseHeader::class,
        'StatsQueryError'                                => StatsQueryError::class,
        'StringFormatError'                              => StringFormatError::class,
        'StringLengthError'                              => StringLengthError::class,
        'String_StringMapEntry'                          => String_StringMapEntry::class,
        'TargetCpaBiddingScheme'                         => TargetCpaBiddingScheme::class,
        'TargetOutrankShareBiddingScheme'                => TargetOutrankShareBiddingScheme::class,
        'TargetRoasBiddingScheme'                        => TargetRoasBiddingScheme::class,
        'TargetSpendBiddingScheme'                       => TargetSpendBiddingScheme::class,
        'TrackingSetting'                                => TrackingSetting::class,
        'UrlError'                                       => UrlError::class,
        'AdServingOptimizationStatus'                    => AdServingOptimizationStatus::class,
        'AdvertisingChannelSubType'                      => AdvertisingChannelSubType::class,
        'AdvertisingChannelType'                         => AdvertisingChannelType::class,
        'AdxError.Reason'                                => AdxErrorReason::class,
        'AuthenticationError.Reason'                     => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'                      => AuthorizationErrorReason::class,
        'BidSource'                                      => BidSource::class,
        'BiddingErrors.Reason'                           => BiddingErrorsReason::class,
        'BiddingStrategySource'                          => BiddingStrategySource::class,
        'BiddingStrategyType'                            => BiddingStrategyType::class,
        'Budget.BudgetDeliveryMethod'                    => BudgetBudgetDeliveryMethod::class,
        'Budget.BudgetPeriod'                            => BudgetBudgetPeriod::class,
        'Budget.BudgetStatus'                            => BudgetBudgetStatus::class,
        'BudgetError.Reason'                             => BudgetErrorReason::class,
        'CampaignError.Reason'                           => CampaignErrorReason::class,
        'CampaignStatus'                                 => CampaignStatus::class,
        'ClientTermsError.Reason'                        => ClientTermsErrorReason::class,
        'ConversionOptimizerBiddingScheme.BidType'       => ConversionOptimizerBiddingSchemeBidType::class,
        'ConversionOptimizerBiddingScheme.PricingMode'   => ConversionOptimizerBiddingSchemePricingMode::class,
        'ConversionOptimizerEligibility.RejectionReason' => ConversionOptimizerEligibilityRejectionReason::class,
        'DatabaseError.Reason'                           => DatabaseErrorReason::class,
        'DateError.Reason'                               => DateErrorReason::class,
        'DateRangeError.Reason'                          => DateRangeErrorReason::class,
        'DistinctError.Reason'                           => DistinctErrorReason::class,
        'EntityAccessDenied.Reason'                      => EntityAccessDeniedReason::class,
        'EntityCountLimitExceeded.Reason'                => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason'                          => EntityNotFoundReason::class,
        'ForwardCompatibilityError.Reason'               => ForwardCompatibilityErrorReason::class,
        'GeoTargetTypeSetting.NegativeGeoTargetType'     => GeoTargetTypeSettingNegativeGeoTargetType::class,
        'GeoTargetTypeSetting.PositiveGeoTargetType'     => GeoTargetTypeSettingPositiveGeoTargetType::class,
        'IdError.Reason'                                 => IdErrorReason::class,
        'InternalApiError.Reason'                        => InternalApiErrorReason::class,
        'Label.Status'                                   => LabelStatus::class,
        'Level'                                          => Level::class,
        'NewEntityCreationError.Reason'                  => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason'                           => NotEmptyErrorReason::class,
        'NullError.Reason'                               => NullErrorReason::class,
        'OperationAccessDenied.Reason'                   => OperationAccessDeniedReason::class,
        'Operator'                                       => Operator::class,
        'OperatorError.Reason'                           => OperatorErrorReason::class,
        'PageOnePromotedBiddingScheme.StrategyGoal'      => PageOnePromotedBiddingSchemeStrategyGoal::class,
        'Predicate.Operator'                             => PredicateOperator::class,
        'QueryError.Reason'                              => QueryErrorReason::class,
        'QuotaCheckError.Reason'                         => QuotaCheckErrorReason::class,
        'RangeError.Reason'                              => RangeErrorReason::class,
        'RateExceededError.Reason'                       => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'                           => ReadOnlyErrorReason::class,
        'RegionCodeError.Reason'                         => RegionCodeErrorReason::class,
        'RejectedError.Reason'                           => RejectedErrorReason::class,
        'RequestError.Reason'                            => RequestErrorReason::class,
        'RequiredError.Reason'                           => RequiredErrorReason::class,
        'SelectorError.Reason'                           => SelectorErrorReason::class,
        'ServingStatus'                                  => ServingStatus::class,
        'SettingError.Reason'                            => SettingErrorReason::class,
        'SizeLimitError.Reason'                          => SizeLimitErrorReason::class,
        'SortOrder'                                      => SortOrder::class,
        'StatsQueryError.Reason'                         => StatsQueryErrorReason::class,
        'StringFormatError.Reason'                       => StringFormatErrorReason::class,
        'StringLengthError.Reason'                       => StringLengthErrorReason::class,
        'TimeUnit'                                       => TimeUnit::class,
        'UrlError.Reason'                                => UrlErrorReason::class,
        'get'                                            => CampaignServiceGet::class,
        'getResponse'                                    => CampaignServiceGetResponse::class,
        'mutate'                                         => CampaignServiceMutate::class,
        'mutateResponse'                                 => CampaignServiceMutateResponse::class,
        'mutateLabel'                                    => MutateLabel::class,
        'mutateLabelResponse'                            => MutateLabelResponse::class,
        'query'                                          => Query::class,
        'queryResponse'                                  => QueryResponse::class,
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
     * Returns the list of campaigns that meet the selector criteria.
     * 
     * @param serviceSelector the selector specifying the {@link Campaign}s to return.
     * @return A list of campaigns.
     * @throws ApiException if problems occurred while fetching campaign information.
     */
    public function get($serviceSelector)
    {
        $args = new CampaignServiceGet($serviceSelector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * Adds, updates, or removes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To remove a campaign, set its
     * {@link Campaign#status status} to {@code REMOVED}.</p>
     * @param operations A list of unique operations.
     * The same campaign cannot be specified in more than one operation.
     * @return The list of updated campaigns, returned in the same order as the
     * <code>operations</code> array.
     * @throws ApiException if problems occurred while updating campaign information.
     */
    public function mutate($operations)
    {
        $args = new CampaignServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     * 
     * 
     * 
     * Adds labels to the {@linkplain Campaign campaign} or removes
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
     * {@linkplain Campaign campaign}.
     * <p>Add - Apply an existing label to an existing
     * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
     * {@linkplain Campaign}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * <p>Remove - Removes the link between the specified
     * {@linkplain Campaign campaign} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * @param operations the operations to apply.
     * @return a list of {@linkplain CampaignLabel}s where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
     * In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
     * @throws ApiException when there are one or more errors with the request.
     */
    public function mutateLabel($operations)
    {
        $args = new MutateLabel($operations);
        $result = $this->__soapCall('mutateLabel', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of campaigns that match the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @return A list of campaigns.
     * @throws ApiException if problems occur while parsing the query or fetching campaign
     * information.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}