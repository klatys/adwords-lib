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
   * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'ManualCPCAdGroupCriterionExperimentBidMultiplier';
    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;
    /**
     * @access public
     * @var MultiplierSource
     */
    public $multiplierSource;
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
    public function __construct($maxCpcMultiplier = null, $multiplierSource = null, $AdGroupCriterionExperimentBidMultiplierType = null)
    {
        parent::__construct();
        $this->maxCpcMultiplier = $maxCpcMultiplier;
        $this->multiplierSource = $multiplierSource;
        $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
    }
}