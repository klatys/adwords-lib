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
   * {@link Attribute} type that contains an {@link IdeaType} value. For example,
   * if a {@link com.google.ads.api.services.targetingideas.TargetingIdea}
   * represents a keyword idea, its {@link IdeaTypeAttribute} would contain a
   * {@code KEYWORD} {@link IdeaType}.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class IdeaTypeAttribute extends Attribute
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201506';
    const XSI_TYPE = 'IdeaTypeAttribute';
    /**
     * @access public
     * @var tnsIdeaType
     */
    public $value;
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
    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }
}
