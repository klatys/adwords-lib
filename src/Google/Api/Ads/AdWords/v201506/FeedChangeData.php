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
   * Holds information about a changed feed and any feeds items within the feed.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class FeedChangeData
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/ch/v201506';
    const XSI_TYPE = 'FeedChangeData';
    /**
     * @access public
     * @var integer
     */
    public $feedId;
    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $feedChangeStatus;
    /**
     * @access public
     * @var integer[]
     */
    public $changedFeedItems;
    /**
     * @access public
     * @var integer[]
     */
    public $removedFeedItems;
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
    public function __construct($feedId = null, $feedChangeStatus = null, $changedFeedItems = null, $removedFeedItems = null)
    {
        $this->feedId = $feedId;
        $this->feedChangeStatus = $feedChangeStatus;
        $this->changedFeedItems = $changedFeedItems;
        $this->removedFeedItems = $removedFeedItems;
    }
}
