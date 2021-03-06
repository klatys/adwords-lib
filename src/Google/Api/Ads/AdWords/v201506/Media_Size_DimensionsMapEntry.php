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
   * This represents an entry in a map with a key of type Size
   * and value of type Dimensions.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class Media_Size_DimensionsMapEntry
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'Media_Size_DimensionsMapEntry';
    /**
     * @access public
     * @var tnsMediaSize
     */
    public $key;
    /**
     * @access public
     * @var Dimensions
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
    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
