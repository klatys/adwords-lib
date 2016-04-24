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



/**
   * Return value for {@link TrialService#mutate(java.util.List)} operations.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class TrialReturnValue extends ListReturnValue
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'TrialReturnValue';
    /**
     * @access public
     * @var Trial[]
     */
    public $value;
    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;
    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->partialFailureErrors = $partialFailureErrors;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}