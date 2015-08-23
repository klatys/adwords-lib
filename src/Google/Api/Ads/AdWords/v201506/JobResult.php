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
   * Represents the result data of a job. This contains both the results of
   * successfully processed operations as well as errors returned by failed
   * operations.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class JobResult
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'JobResult';
    /**
     * @access public
     * @var SimpleMutateResult
     */
    public $SimpleMutateResult;
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
    public function __construct($SimpleMutateResult = null)
    {
        $this->SimpleMutateResult = $SimpleMutateResult;
    }
}
