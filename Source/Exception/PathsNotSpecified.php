<?php
/**
 * Affiniti Development
 * 
 * Config Service Provider
 *
 * @link        http://github.com/affinitidev/silex-config
 * @copyright   Brendan Bates (http://www.brendan-bates.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Affiniti\Config\Exception;

/**
 * Thrown when the configuration is loaded, but no paths were specified.
 * 
 * @author Brendan Bates <me@brendan-bates.com>
 */
class PathsNotSpecified extends ConfigException { }
