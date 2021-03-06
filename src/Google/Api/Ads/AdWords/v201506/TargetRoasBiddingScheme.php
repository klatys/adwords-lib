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
   * Target Roas bidding strategy helps you maximize revenue while averaging a specific target
   * Return On Average Spend (ROAS).
   * 
   * For example: If TargetRoas is 1.5, the strategy will create as much revenue as possible while
   * ensuring that every $1.00 of clicks provides $1.50 in conversion value.
   * 
   * <p>Note that campaigns must meet <a
   * href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific
   * eligibility requirements</a> before they can use the <code>TargetRoasBiddingScheme</code>
   * bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class TargetRoasBiddingScheme extends BiddingScheme
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'TargetRoasBiddingScheme';
    /**
     * @access public
     * @var double
     */
    public $targetRoas;
    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;
    /**
     * @access public
     * @var Money
     */
    public $bidFloor;
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
    public function __construct($targetRoas = null, $bidCeiling = null, $bidFloor = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->targetRoas = $targetRoas;
        $this->bidCeiling = $bidCeiling;
        $this->bidFloor = $bidFloor;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}
