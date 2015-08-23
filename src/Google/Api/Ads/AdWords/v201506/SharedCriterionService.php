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
   * SharedCriterionService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class SharedCriterionService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'SharedCriterionService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/SharedCriterionService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/SharedCriterionService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'                => AuthenticationError::class,
        'AuthorizationError'                 => AuthorizationError::class,
        'ClientTermsError'                   => ClientTermsError::class,
        'CriterionError'                     => CriterionError::class,
        'DateRange'                          => DateRange::class,
        'DistinctError'                      => DistinctError::class,
        'EntityCountLimitExceeded'           => EntityCountLimitExceeded::class,
        'EntityNotFound'                     => EntityNotFound::class,
        'IdError'                            => IdError::class,
        'InternalApiError'                   => InternalApiError::class,
        'Keyword'                            => Keyword::class,
        'MobileAppCategory'                  => MobileAppCategory::class,
        'MobileApplication'                  => MobileApplication::class,
        'NotEmptyError'                      => NotEmptyError::class,
        'NullError'                          => NullError::class,
        'OperationAccessDenied'              => OperationAccessDenied::class,
        'OperatorError'                      => OperatorError::class,
        'OrderBy'                            => OrderBy::class,
        'Paging'                             => Paging::class,
        'Placement'                          => Placement::class,
        'Predicate'                          => Predicate::class,
        'QueryError'                         => QueryError::class,
        'QuotaCheckError'                    => QuotaCheckError::class,
        'RangeError'                         => RangeError::class,
        'RateExceededError'                  => RateExceededError::class,
        'ReadOnlyError'                      => ReadOnlyError::class,
        'RejectedError'                      => RejectedError::class,
        'RequestError'                       => RequestError::class,
        'RequiredError'                      => RequiredError::class,
        'SelectorError'                      => SelectorError::class,
        'SharedCriterionError'               => SharedCriterionError::class,
        'SizeLimitError'                     => SizeLimitError::class,
        'SoapHeader'                         => SoapRequestHeader::class,
        'SoapResponseHeader'                 => SoapResponseHeader::class,
        'StringLengthError'                  => StringLengthError::class,
        'CriterionUserInterest'              => CriterionUserInterest::class,
        'CriterionUserList'                  => CriterionUserList::class,
        'Vertical'                           => Vertical::class,
        'DatabaseError'                      => DatabaseError::class,
        'ApiError'                           => ApiError::class,
        'ApiException'                       => ApiException::class,
        'ApplicationException'               => ApplicationException::class,
        'Selector'                           => Selector::class,
        'Criterion'                          => Criterion::class,
        'SharedCriterion'                    => SharedCriterion::class,
        'SharedCriterionOperation'           => SharedCriterionOperation::class,
        'SharedCriterionPage'                => SharedCriterionPage::class,
        'SharedCriterionReturnValue'         => SharedCriterionReturnValue::class,
        'ListReturnValue'                    => ListReturnValue::class,
        'Operation'                          => Operation::class,
        'Page'                               => Page::class,
        'AuthenticationError.Reason'         => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'          => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'            => ClientTermsErrorReason::class,
        'Criterion.Type'                     => CriterionType::class,
        'CriterionError.Reason'              => CriterionErrorReason::class,
        'DatabaseError.Reason'               => DatabaseErrorReason::class,
        'DistinctError.Reason'               => DistinctErrorReason::class,
        'EntityCountLimitExceeded.Reason'    => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason'              => EntityNotFoundReason::class,
        'IdError.Reason'                     => IdErrorReason::class,
        'InternalApiError.Reason'            => InternalApiErrorReason::class,
        'KeywordMatchType'                   => KeywordMatchType::class,
        'NotEmptyError.Reason'               => NotEmptyErrorReason::class,
        'NullError.Reason'                   => NullErrorReason::class,
        'OperationAccessDenied.Reason'       => OperationAccessDeniedReason::class,
        'Operator'                           => Operator::class,
        'OperatorError.Reason'               => OperatorErrorReason::class,
        'Predicate.Operator'                 => PredicateOperator::class,
        'QueryError.Reason'                  => QueryErrorReason::class,
        'QuotaCheckError.Reason'             => QuotaCheckErrorReason::class,
        'RangeError.Reason'                  => RangeErrorReason::class,
        'RateExceededError.Reason'           => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'               => ReadOnlyErrorReason::class,
        'RejectedError.Reason'               => RejectedErrorReason::class,
        'RequestError.Reason'                => RequestErrorReason::class,
        'RequiredError.Reason'               => RequiredErrorReason::class,
        'SelectorError.Reason'               => SelectorErrorReason::class,
        'SharedCriterionError.Reason'        => SharedCriterionErrorReason::class,
        'SizeLimitError.Reason'              => SizeLimitErrorReason::class,
        'SortOrder'                          => SortOrder::class,
        'StringLengthError.Reason'           => StringLengthErrorReason::class,
        'CriterionUserList.MembershipStatus' => CriterionUserListMembershipStatus::class,
        'get'                                => SharedCriterionServiceGet::class,
        'getResponse'                        => SharedCriterionServiceGetResponse::class,
        'mutate'                             => SharedCriterionServiceMutate::class,
        'mutateResponse'                     => SharedCriterionServiceMutateResponse::class,
        'query'                              => Query::class,
        'queryResponse'                      => QueryResponse::class,
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
     * Returns a list of SharedCriterion that meets the selector criteria.
     * 
     * @param selector filters the criteria returned
     * @return The list of SharedCriterion
     * @throws ApiException
     */
    public function get($selector)
    {
        $args = new SharedCriterionServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     * 
     * 
     * 
     * Adds, removes criteria in a shared set.
     * 
     * @param operations A list of unique operations
     * @return The list of updated SharedCriterion, returned in the same order as the
     * {@code operations} array.
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new SharedCriterionServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of SharedCriterion that match the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @return A list of SharedCriterion.
     * @throws ApiException
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
