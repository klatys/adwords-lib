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
   * Represents a sitelink extension.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class SitelinkFeedItem extends ExtensionFeedItem
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'SitelinkFeedItem';
    /**
     * @access public
     * @var string
     */
    public $sitelinkText;
    /**
     * @access public
     * @var string
     */
    public $sitelinkUrl;
    /**
     * @access public
     * @var string
     */
    public $sitelinkLine2;
    /**
     * @access public
     * @var string
     */
    public $sitelinkLine3;
    /**
     * @access public
     * @var UrlList
     */
    public $sitelinkFinalUrls;
    /**
     * @access public
     * @var UrlList
     */
    public $sitelinkFinalMobileUrls;
    /**
     * @access public
     * @var string
     */
    public $sitelinkTrackingUrlTemplate;
    /**
     * @access public
     * @var CustomParameters
     */
    public $sitelinkUrlCustomParameters;
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
    public function __construct($sitelinkText = null, $sitelinkUrl = null, $sitelinkLine2 = null, $sitelinkLine3 = null, $sitelinkFinalUrls = null, $sitelinkFinalMobileUrls = null, $sitelinkTrackingUrlTemplate = null, $sitelinkUrlCustomParameters = null, $feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $policyData = null, $ExtensionFeedItemType = null)
    {
        parent::__construct();
        $this->sitelinkText = $sitelinkText;
        $this->sitelinkUrl = $sitelinkUrl;
        $this->sitelinkLine2 = $sitelinkLine2;
        $this->sitelinkLine3 = $sitelinkLine3;
        $this->sitelinkFinalUrls = $sitelinkFinalUrls;
        $this->sitelinkFinalMobileUrls = $sitelinkFinalMobileUrls;
        $this->sitelinkTrackingUrlTemplate = $sitelinkTrackingUrlTemplate;
        $this->sitelinkUrlCustomParameters = $sitelinkUrlCustomParameters;
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->feedType = $feedType;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->policyData = $policyData;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }
}
