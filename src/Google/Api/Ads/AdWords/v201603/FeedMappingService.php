<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201603;
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * FeedMappingService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class FeedMappingService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'FeedMappingService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/FeedMappingService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/FeedMappingService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'AttributeFieldMapping' => AttributeFieldMapping::class,
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'ClientTermsError' => ClientTermsError::class,
        'DatabaseError' => DatabaseError::class,
        'DateRange' => DateRange::class,
        'DistinctError' => DistinctError::class,
        'EntityNotFound' => EntityNotFound::class,
        'FeedMapping' => FeedMapping::class,
        'FeedMappingError' => FeedMappingError::class,
        'FeedMappingOperation' => FeedMappingOperation::class,
        'FeedMappingPage' => FeedMappingPage::class,
        'FeedMappingReturnValue' => FeedMappingReturnValue::class,
        'IdError' => IdError::class,
        'InternalApiError' => InternalApiError::class,
        'ListReturnValue' => ListReturnValue::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullStatsPage' => NullStatsPage::class,
        'Operation' => Operation::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Page' => Page::class,
        'Paging' => Paging::class,
        'Predicate' => Predicate::class,
        'QueryError' => QueryError::class,
        'QuotaCheckError' => QuotaCheckError::class,
        'RangeError' => RangeError::class,
        'RateExceededError' => RateExceededError::class,
        'ReadOnlyError' => ReadOnlyError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'Selector' => Selector::class,
        'SelectorError' => SelectorError::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringLengthError' => StringLengthError::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'EntityNotFound.Reason' => EntityNotFoundReason::class,
        'FeedMapping.Status' => FeedMappingStatus::class,
        'FeedMappingError.Reason' => FeedMappingErrorReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator' => Operator::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
        'Predicate.Operator' => PredicateOperator::class,
        'QueryError.Reason' => QueryErrorReason::class,
        'QuotaCheckError.Reason' => QuotaCheckErrorReason::class,
        'RangeError.Reason' => RangeErrorReason::class,
        'RateExceededError.Reason' => RateExceededErrorReason::class,
        'ReadOnlyError.Reason' => ReadOnlyErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'get' => FeedMappingServiceGet::class,
        'getResponse' => FeedMappingServiceGetResponse::class,
        'mutate' => FeedMappingServiceMutate::class,
        'mutateResponse' => FeedMappingServiceMutateResponse::class,
        'query' => Query::class,
        'queryResponse' => QueryResponse::class,
    ];

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
     * Returns a list of FeedMappings that meet the selector criteria.
     * 
     * @param selector Determines which FeedMappings to return. If empty all
     * FeedMappings are returned.
     * @return The list of FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedMappingServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Add and remove FeedMappings.
     * The following {@link Operator}s are supported: ADD, REMOVE.
     * 
     * @param operations The operations to apply.
     * @return The resulting FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedMappingServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of FeedMappings that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @returns The list of FeedMappings
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}