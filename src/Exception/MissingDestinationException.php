<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawek@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */ 

namespace Vegas\Tool\Faker\Exception;

use Vegas\Tool\Faker\Exception as FakerException;

/**
 * Class MissingDestinationException
 * @package Vegas\Tool\Faker\Exception
 */
class MissingDestinationException extends FakerException
{
    protected $message = 'Missing destination';
}
 