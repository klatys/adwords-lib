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
   * A FeedMapping represents a mapping between feed attributes in a specific feed
   * and placeholder fields for a specific placeholder type. This will tell the
   * ads serving system which parts of the feed item should be used when
   * populating a placeholder. Without this mapping the placeholder cannot be
   * populated and the extension can not be displayed.
   * 
   * <p>For a list of feed placeholders, see
   * <a href="/adwords/api/docs/appendix/placeholders">
   * https://developers.google.com/adwords/api/docs/appendix/placeholders
   * </a></p>
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class FeedMapping
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'FeedMapping';
    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;
    /**
     * @access public
     * @var integer
     */
    public $feedId;
    /**
     * @access public
     * @var integer
     */
    public $placeholderType;
    /**
     * @access public
     * @var tnsFeedMappingStatus
     */
    public $status;
    /**
     * @access public
     * @var AttributeFieldMapping[]
     */
    public $attributeFieldMappings;
    /**
     * @access public
     * @var integer
     */
    public $criterionType;
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
    public function __construct($feedMappingId = null, $feedId = null, $placeholderType = null, $status = null, $attributeFieldMappings = null, $criterionType = null)
    {
        $this->feedMappingId = $feedMappingId;
        $this->feedId = $feedId;
        $this->placeholderType = $placeholderType;
        $this->status = $status;
        $this->attributeFieldMappings = $attributeFieldMappings;
        $this->criterionType = $criterionType;
    }
}
