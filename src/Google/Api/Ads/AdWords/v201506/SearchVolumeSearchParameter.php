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
   * A {@link SearchParameter} that specifies the level of search volume expected in results,
   * and it has a direct relationship to
   * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME}.
   * Absence of a {@link SearchVolumeSearchParameter} in a
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
   * equivalent to having no constraint on search volume specified.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class SearchVolumeSearchParameter extends SearchParameter
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/o/v201506';
    const XSI_TYPE = 'SearchVolumeSearchParameter';
    /**
     * @access public
     * @var LongComparisonOperation
     */
    public $operation;
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
    public function __construct($operation = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->operation = $operation;
        $this->SearchParameterType = $SearchParameterType;
    }
}
