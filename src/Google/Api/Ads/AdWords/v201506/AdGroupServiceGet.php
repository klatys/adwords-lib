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
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of all the ad groups specified by the selector
   * from the target customer's account.
   * 
   * @param serviceSelector The selector specifying the {@link AdGroup}s to return.
   * @return List of adgroups identified by the selector.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class AdGroupServiceGet
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = '';
    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;
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
    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }
}