<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawomir.zytko@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://github.com/vegas-cmf
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */ 

namespace Vegas\Tool\Faker\Exception;

use Vegas\Tool\Faker\Exception as FakerException;

/**
 * Class MissingAdapterException
 * @package Vegas\Tool\Faker\Exception
 */
class MissingAdapterException extends FakerException
{
    protected $message = 'Missing adapter name';
}
 