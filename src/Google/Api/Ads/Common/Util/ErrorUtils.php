<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\Common\Util;
use SoapFault;
use SoapVar;

/**
 * A collection of utility methods for working with errors.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class ErrorUtils
{
    private static $API_EXCEPTION_FIELD_NAME = 'ApiExceptionFault';
    private static $OPERATION_INDEX_OGNL_REGEX = '/^operations\\[(\\d+)\\]/';
    /**
     * The ErrorUtils class is not meant to have any instances.
     */
    private function __construct()
    {
    }
    /**
     * Gets the ApiErrors in the SOAP fault, if any.
     * @param SoapFault $fault the SOAP fault to extract errors from
     * @return array the ApiErrors in the SOAP fault, or an empty array if there
     *     were none
     */
    public static function GetApiErrors(SoapFault $fault)
    {
        $results = array();
        if (isset($fault->detail)) {
            foreach (get_object_vars($fault->detail) as $fieldName => $fieldValue) {
                if ($fieldName == ErrorUtils::$API_EXCEPTION_FIELD_NAME) {
                    $errors = $fieldValue->errors;
                    if (!is_array($errors)) {
                        $errors = array($errors);
                    }
                    foreach ($errors as $error) {
                        if ($error instanceof SoapVar) {
                            $error = $error->enc_value;
                        }
                        $results[] = $error;
                    }
                }
            }
        }
        return $results;
    }
    /**
     * Gets the index of the operation that was the source of an error.
     * @param mixed $error the error returned in the response
     * @return int the index of the operation that caused the error, or null if
     *     no operation was referenced by the error
     */
    public static function GetSourceOperationIndex($error)
    {
        $matches = array();
        if (preg_match(ErrorUtils::$OPERATION_INDEX_OGNL_REGEX, $error->fieldPath, $matches)) {
            return $matches[1];
        } else {
            // Invalid fieldPath.
            return null;
        }
    }
}
