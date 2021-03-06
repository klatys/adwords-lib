<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\Util;

/**
 * Enum class that describes the supported formats for content downloads.
 * The order mimics the order in which download options are presented in the
 * legacy report center.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DownloadFormat
{
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return '';
    }
    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return 'DownloadFormat';
    }
    public function __construct()
    {
        if (get_parent_class('DownloadFormat')) {
            parent::__construct();
        }
    }
}
