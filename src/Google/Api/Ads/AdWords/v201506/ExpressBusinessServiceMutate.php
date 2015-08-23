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
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Performs the given {@link ExpressBusinessOperation}.
   * 
   * @param operations list of unique operations; the same AdWords Express business cannot be
   * specified in more than one operation
   * @return the updated AdWords Express businesses
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class ExpressBusinessServiceMutate
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/express/v201506';
    const XSI_TYPE = '';
    /**
     * @access public
     * @var ExpressBusinessOperation[]
     */
    public $operations;
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
    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}
