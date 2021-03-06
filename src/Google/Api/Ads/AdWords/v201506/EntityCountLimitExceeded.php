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
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * 
   * 
   * 
   * Base error class for Ad Group Criterion Service.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class EntityCountLimitExceeded extends ApiError
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'EntityCountLimitExceeded';
    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $reason;
    /**
     * @access public
     * @var string
     */
    public $enclosingId;
    /**
     * @access public
     * @var integer
     */
    public $limit;
    /**
     * @access public
     * @var string
     */
    public $accountLimitType;
    /**
     * @access public
     * @var integer
     */
    public $existingCount;
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
    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
        parent::__construct();
        $this->reason = $reason;
        $this->enclosingId = $enclosingId;
        $this->limit = $limit;
        $this->accountLimitType = $accountLimitType;
        $this->existingCount = $existingCount;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}
