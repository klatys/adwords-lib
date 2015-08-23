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
   * CampaignSharedSetService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class CampaignSharedSetService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'CampaignSharedSetService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignSharedSetService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/CampaignSharedSetService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'             => AuthenticationError::class,
        'AuthorizationError'              => AuthorizationError::class,
        'CampaignSharedSet'               => CampaignSharedSet::class,
        'CampaignSharedSetError'          => CampaignSharedSetError::class,
        'CampaignSharedSetOperation'      => CampaignSharedSetOperation::class,
        'CampaignSharedSetPage'           => CampaignSharedSetPage::class,
        'CampaignSharedSetReturnValue'    => CampaignSharedSetReturnValue::class,
        'ClientTermsError'                => ClientTermsError::class,
        'DateError'                       => DateError::class,
        'DateRange'                       => DateRange::class,
        'DistinctError'                   => DistinctError::class,
        'EntityCountLimitExceeded'        => EntityCountLimitExceeded::class,
        'EntityNotFound'                  => EntityNotFound::class,
        'IdError'                         => IdError::class,
        'InternalApiError'                => InternalApiError::class,
        'ListReturnValue'                 => ListReturnValue::class,
        'NewEntityCreationError'          => NewEntityCreationError::class,
        'NotEmptyError'                   => NotEmptyError::class,
        'NullError'                       => NullError::class,
        'NullStatsPage'                   => NullStatsPage::class,
        'Operation'                       => Operation::class,
        'OperationAccessDenied'           => OperationAccessDenied::class,
        'OperatorError'                   => OperatorError::class,
        'OrderBy'                         => OrderBy::class,
        'Page'                            => Page::class,
        'Paging'                          => Paging::class,
        'PagingError'                     => PagingError::class,
        'Predicate'                       => Predicate::class,
        'QueryError'                      => QueryError::class,
        'QuotaCheckError'                 => QuotaCheckError::class,
        'RangeError'                      => RangeError::class,
        'RateExceededError'               => RateExceededError::class,
        'ReadOnlyError'                   => ReadOnlyError::class,
        'RejectedError'                   => RejectedError::class,
        'RequestError'                    => RequestError::class,
        'RequiredError'                   => RequiredError::class,
        'SelectorError'                   => SelectorError::class,
        'SizeLimitError'                  => SizeLimitError::class,
        'SoapHeader'                      => SoapRequestHeader::class,
        'SoapResponseHeader'              => SoapResponseHeader::class,
        'StringLengthError'               => StringLengthError::class,
        'DatabaseError'                   => DatabaseError::class,
        'ApiError'                        => ApiError::class,
        'ApiException'                    => ApiException::class,
        'ApplicationException'            => ApplicationException::class,
        'Selector'                        => Selector::class,
        'AuthenticationError.Reason'      => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'       => AuthorizationErrorReason::class,
        'CampaignSharedSet.Status'        => CampaignSharedSetStatus::class,
        'CampaignSharedSetError.Reason'   => CampaignSharedSetErrorReason::class,
        'ClientTermsError.Reason'         => ClientTermsErrorReason::class,
        'DatabaseError.Reason'            => DatabaseErrorReason::class,
        'DateError.Reason'                => DateErrorReason::class,
        'DistinctError.Reason'            => DistinctErrorReason::class,
        'EntityCountLimitExceeded.Reason' => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason'           => EntityNotFoundReason::class,
        'IdError.Reason'                  => IdErrorReason::class,
        'InternalApiError.Reason'         => InternalApiErrorReason::class,
        'NewEntityCreationError.Reason'   => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason'            => NotEmptyErrorReason::class,
        'NullError.Reason'                => NullErrorReason::class,
        'OperationAccessDenied.Reason'    => OperationAccessDeniedReason::class,
        'Operator'                        => Operator::class,
        'OperatorError.Reason'            => OperatorErrorReason::class,
        'PagingError.Reason'              => PagingErrorReason::class,
        'Predicate.Operator'              => PredicateOperator::class,
        'QueryError.Reason'               => QueryErrorReason::class,
        'QuotaCheckError.Reason'          => QuotaCheckErrorReason::class,
        'RangeError.Reason'               => RangeErrorReason::class,
        'RateExceededError.Reason'        => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'            => ReadOnlyErrorReason::class,
        'RejectedError.Reason'            => RejectedErrorReason::class,
        'RequestError.Reason'             => RequestErrorReason::class,
        'RequiredError.Reason'            => RequiredErrorReason::class,
        'SelectorError.Reason'            => SelectorErrorReason::class,
        'SharedSetType'                   => SharedSetType::class,
        'SizeLimitError.Reason'           => SizeLimitErrorReason::class,
        'SortOrder'                       => SortOrder::class,
        'StringLengthError.Reason'        => StringLengthErrorReason::class,
        'get'                             => CampaignSharedSetServiceGet::class,
        'getResponse'                     => CampaignSharedSetServiceGetResponse::class,
        'mutate'                          => CampaignSharedSetServiceMutate::class,
        'mutateResponse'                  => CampaignSharedSetServiceMutateResponse::class,
        'query'                           => Query::class,
        'queryResponse'                   => QueryResponse::class,
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
     * Returns a list of CampaignSharedSets based on the given selector.
     * @param selector the selector specifying the query
     * @return a list of CampaignSharedSet entities that meet the criterion specified
     * by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
        $args = new CampaignSharedSetServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
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
     * Applies the list of mutate operations.
     * @param operations the operations to apply
     * @return the modified list of CampaignSharedSet associations
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new CampaignSharedSetServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of CampaignSharedSets that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns A list of CampaignSharedSets
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
