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
   * BudgetOrderService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class BudgetOrderService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'BudgetOrderService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/billing/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/billing/v201506/BudgetOrderService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/billing/v201506/BudgetOrderService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'ApiError'                      => ApiError::class,
        'ApiException'                  => ApiException::class,
        'ApplicationException'          => ApplicationException::class,
        'AuthenticationError'           => AuthenticationError::class,
        'AuthorizationError'            => AuthorizationError::class,
        'ClientTermsError'              => ClientTermsError::class,
        'ComparableValue'               => ComparableValue::class,
        'DatabaseError'                 => DatabaseError::class,
        'DateError'                     => DateError::class,
        'DateRange'                     => DateRange::class,
        'DistinctError'                 => DistinctError::class,
        'DoubleValue'                   => DoubleValue::class,
        'EntityNotFound'                => EntityNotFound::class,
        'IdError'                       => IdError::class,
        'InternalApiError'              => InternalApiError::class,
        'ListReturnValue'               => ListReturnValue::class,
        'LongValue'                     => LongValue::class,
        'Money'                         => Money::class,
        'NewEntityCreationError'        => NewEntityCreationError::class,
        'NotEmptyError'                 => NotEmptyError::class,
        'NotWhitelistedError'           => NotWhitelistedError::class,
        'NullError'                     => NullError::class,
        'NumberValue'                   => NumberValue::class,
        'Operation'                     => Operation::class,
        'OperationAccessDenied'         => OperationAccessDenied::class,
        'OperatorError'                 => OperatorError::class,
        'OrderBy'                       => OrderBy::class,
        'Page'                          => Page::class,
        'Paging'                        => Paging::class,
        'PagingError'                   => PagingError::class,
        'Predicate'                     => Predicate::class,
        'QuotaCheckError'               => QuotaCheckError::class,
        'RangeError'                    => RangeError::class,
        'RateExceededError'             => RateExceededError::class,
        'ReadOnlyError'                 => ReadOnlyError::class,
        'RejectedError'                 => RejectedError::class,
        'RequestError'                  => RequestError::class,
        'RequiredError'                 => RequiredError::class,
        'Selector'                      => Selector::class,
        'SelectorError'                 => SelectorError::class,
        'SizeLimitError'                => SizeLimitError::class,
        'SoapHeader'                    => SoapRequestHeader::class,
        'SoapResponseHeader'            => SoapResponseHeader::class,
        'StatsQueryError'               => StatsQueryError::class,
        'StringLengthError'             => StringLengthError::class,
        'AuthenticationError.Reason'    => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'     => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'       => ClientTermsErrorReason::class,
        'DatabaseError.Reason'          => DatabaseErrorReason::class,
        'DateError.Reason'              => DateErrorReason::class,
        'DistinctError.Reason'          => DistinctErrorReason::class,
        'EntityNotFound.Reason'         => EntityNotFoundReason::class,
        'IdError.Reason'                => IdErrorReason::class,
        'InternalApiError.Reason'       => InternalApiErrorReason::class,
        'NewEntityCreationError.Reason' => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason'          => NotEmptyErrorReason::class,
        'NotWhitelistedError.Reason'    => NotWhitelistedErrorReason::class,
        'NullError.Reason'              => NullErrorReason::class,
        'OperationAccessDenied.Reason'  => OperationAccessDeniedReason::class,
        'Operator'                      => Operator::class,
        'OperatorError.Reason'          => OperatorErrorReason::class,
        'PagingError.Reason'            => PagingErrorReason::class,
        'Predicate.Operator'            => PredicateOperator::class,
        'QuotaCheckError.Reason'        => QuotaCheckErrorReason::class,
        'RangeError.Reason'             => RangeErrorReason::class,
        'RateExceededError.Reason'      => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'          => ReadOnlyErrorReason::class,
        'RejectedError.Reason'          => RejectedErrorReason::class,
        'RequestError.Reason'           => RequestErrorReason::class,
        'RequiredError.Reason'          => RequiredErrorReason::class,
        'SelectorError.Reason'          => SelectorErrorReason::class,
        'SizeLimitError.Reason'         => SizeLimitErrorReason::class,
        'SortOrder'                     => SortOrder::class,
        'StatsQueryError.Reason'        => StatsQueryErrorReason::class,
        'StringLengthError.Reason'      => StringLengthErrorReason::class,
        'BillingAccount'                => BillingAccount::class,
        'BudgetOrder'                   => BudgetOrder::class,
        'BudgetOrderError'              => BudgetOrderError::class,
        'BudgetOrderOperation'          => BudgetOrderOperation::class,
        'BudgetOrderPage'               => BudgetOrderPage::class,
        'BudgetOrderRequest'            => BudgetOrderRequest::class,
        'BudgetOrderReturnValue'        => BudgetOrderReturnValue::class,
        'CustomerOrderLineError'        => CustomerOrderLineError::class,
        'BudgetOrderError.Reason'       => BudgetOrderErrorReason::class,
        'BudgetOrderRequest.Status'     => BudgetOrderRequestStatus::class,
        'CustomerOrderLineError.Reason' => CustomerOrderLineErrorReason::class,
        'get'                           => BudgetOrderServiceGet::class,
        'getResponse'                   => BudgetOrderServiceGetResponse::class,
        'getBillingAccounts'            => GetBillingAccounts::class,
        'getBillingAccountsResponse'    => GetBillingAccountsResponse::class,
        'mutate'                        => BudgetOrderServiceMutate::class,
        'mutateResponse'                => BudgetOrderServiceMutateResponse::class,
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
     * Gets a list of {@link BudgetOrder}s using the generic selector.
     * @param serviceSelector specifies which BudgetOrder to return.
     * @return A {@link BudgetOrderPage} of BudgetOrders of the client customer.
     * All BudgetOrder fields are returned. Stats are not yet supported.
     * @throws ApiException
     */
    public function get($serviceSelector)
    {
        $args = new BudgetOrderServiceGet($serviceSelector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * Returns all the open/active BillingAccounts associated with the current
     * manager.
     * @return A list of {@link BillingAccount}s.
     * @throws ApiException
     */
    public function getBillingAccounts()
    {
        $args = new GetBillingAccounts();
        $result = $this->__soapCall('getBillingAccounts', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
     * 
     * 
     * 
     * Mutates BudgetOrders, supported operations are:
     * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing account
     * specified by the billing account ID.</p>
     * <p><code>SET</code>: Sets the start/end date and amount of the
     * {@link BudgetOrder}.</p>
     * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
     * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>
     * is limited to one operation per mutate request. Any attempt to make more
     * than one operation will result in an <code>ApiException</code>.</p>
     * @param operations A list of operations, <b>however currently we only
     * support one operation per mutate call</b>.
     * @return BudgetOrders affected by the mutate operation.
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new BudgetOrderServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
}