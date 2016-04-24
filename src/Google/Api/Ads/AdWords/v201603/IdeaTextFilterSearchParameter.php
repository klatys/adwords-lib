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
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * specifies a collection of strings by which the results should be
   * constrained. This guarantees that each idea in the result will match
   * at least one of the {@code included} values.
   * 
   * For this {@link SearchParameter}, excluded items will always take
   * priority over included ones.
   * 
   * This can handle a maximum of 200 (included + excluded) elements.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class IdeaTextFilterSearchParameter extends SearchParameter
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201603';
    const XSI_TYPE = 'IdeaTextFilterSearchParameter';
    /**
     * @access public
     * @var string[]
     */
    public $included;
    /**
     * @access public
     * @var string[]
     */
    public $excluded;
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
    public function __construct($included = null, $excluded = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->included = $included;
        $this->excluded = $excluded;
        $this->SearchParameterType = $SearchParameterType;
    }
}