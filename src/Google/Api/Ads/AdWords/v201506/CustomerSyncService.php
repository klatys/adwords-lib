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
   * CustomerSyncService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class CustomerSyncService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'CustomerSyncService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/ch/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/ch/v201506/CustomerSyncService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/ch/v201506/CustomerSyncService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AuthenticationError'          => AuthenticationError::class,
        'AuthorizationError'           => AuthorizationError::class,
        'ClientTermsError'             => ClientTermsError::class,
        'DateError'                    => DateError::class,
        'DateTimeRange'                => DateTimeRange::class,
        'DistinctError'                => DistinctError::class,
        'IdError'                      => IdError::class,
        'InternalApiError'             => InternalApiError::class,
        'NotEmptyError'                => NotEmptyError::class,
        'OperationAccessDenied'        => OperationAccessDenied::class,
        'QuotaCheckError'              => QuotaCheckError::class,
        'RangeError'                   => RangeError::class,
        'RateExceededError'            => RateExceededError::class,
        'ReadOnlyError'                => ReadOnlyError::class,
        'RejectedError'                => RejectedError::class,
        'RequestError'                 => RequestError::class,
        'RequiredError'                => RequiredError::class,
        'SizeLimitError'               => SizeLimitError::class,
        'SoapHeader'                   => SoapRequestHeader::class,
        'SoapResponseHeader'           => SoapResponseHeader::class,
        'StringLengthError'            => StringLengthError::class,
        'DatabaseError'                => DatabaseError::class,
        'ApiError'                     => ApiError::class,
        'ApiException'                 => ApiException::class,
        'ApplicationException'         => ApplicationException::class,
        'AuthenticationError.Reason'   => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'    => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'      => ClientTermsErrorReason::class,
        'DatabaseError.Reason'         => DatabaseErrorReason::class,
        'DateError.Reason'             => DateErrorReason::class,
        'DistinctError.Reason'         => DistinctErrorReason::class,
        'IdError.Reason'               => IdErrorReason::class,
        'InternalApiError.Reason'      => InternalApiErrorReason::class,
        'NotEmptyError.Reason'         => NotEmptyErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'QuotaCheckError.Reason'       => QuotaCheckErrorReason::class,
        'RangeError.Reason'            => RangeErrorReason::class,
        'RateExceededError.Reason'     => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'         => ReadOnlyErrorReason::class,
        'RejectedError.Reason'         => RejectedErrorReason::class,
        'RequestError.Reason'          => RequestErrorReason::class,
        'RequiredError.Reason'         => RequiredErrorReason::class,
        'SizeLimitError.Reason'        => SizeLimitErrorReason::class,
        'StringLengthError.Reason'     => StringLengthErrorReason::class,
        'AdGroupChangeData'            => AdGroupChangeData::class,
        'CampaignChangeData'           => CampaignChangeData::class,
        'CustomerSyncError'            => CustomerSyncError::class,
        'FeedChangeData'               => FeedChangeData::class,
        'CustomerChangeData'           => CustomerChangeData::class,
        'CustomerSyncSelector'         => CustomerSyncSelector::class,
        'ChangeStatus'                 => ChangeStatus::class,
        'CustomerSyncError.Reason'     => CustomerSyncErrorReason::class,
        'get'                          => CustomerSyncServiceGet::class,
        'getResponse'                  => CustomerSyncServiceGetResponse::class,
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
     * Returns information about changed entities inside a customer's account.
     * 
     * @param selector Specifies the filter for selecting changehistory events for a customer.
     * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
     * changed at each level.  All Campaigns that are requested in the selector will be returned,
     * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
     */
    public function get($selector)
    {
        $args = new CustomerSyncServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
}
