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
   * Object representing integer comparison operations. This is usually used within
   * a particular
   * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
   * specify the valid values requested for the specific
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class LongComparisonOperation
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201506';
    const XSI_TYPE = 'LongComparisonOperation';
    /**
     * @access public
     * @var integer
     */
    public $minimum;
    /**
     * @access public
     * @var integer
     */
    public $maximum;
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
    public function __construct($minimum = null, $maximum = null)
    {
        $this->minimum = $minimum;
        $this->maximum = $maximum;
    }
}
