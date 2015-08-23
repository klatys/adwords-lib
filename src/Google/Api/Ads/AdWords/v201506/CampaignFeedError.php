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

/**
   * Represents an error for the CampaignFeedService.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class CampaignFeedError extends ApiError
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'CampaignFeedError';
    /**
     * @access public
     * @var tnsCampaignFeedErrorReason
     */
    public $reason;
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
        parent::__construct();
        $this->reason = $reason;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}
