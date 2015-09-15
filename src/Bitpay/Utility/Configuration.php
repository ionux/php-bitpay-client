<?php
/**
 * PHP Client Library for the cryptographically secure BitPay API.
 *
 * @copyright  Copyright 2011-2015 BitPay, Inc.
 * @author     Rich Morgan <rich@bitpay.com>
 * @license    https://raw.githubusercontent.com/bitpay/php-bitpay-client/master/LICENSE The MIT License (MIT)
 * @see        https://github.com/bitpay/php-bitpay-client
 * @package    Bitpay
 * @since      2.0.0
 * @version    3.0.0
 * @filesource
 */

namespace Bitpay\Utility;

/**
 * @package Bitpay
 */
class Configuration
{
    /**
     * Returns the root directory path for the
     * main Bitpay class.
     *
     * @return string
     */
    protected function getRootDirPath()
    {
        return realpath(__DIR__ . '/..');
    }
}
