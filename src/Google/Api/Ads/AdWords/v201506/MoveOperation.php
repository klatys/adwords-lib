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
   * Operation for moving ManagedCustomer links. See {@link ManagedCustomerService#mutateManager}.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class MoveOperation extends Operation
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/mcm/v201506';
    const XSI_TYPE = 'MoveOperation';
    /**
     * @access public
     * @var ManagedCustomerLink
     */
    public $operand;
    /**
     * @access public
     * @var integer
     */
    public $oldManagerCustomerId;
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
    public function __construct($operand = null, $oldManagerCustomerId = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->oldManagerCustomerId = $oldManagerCustomerId;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}
