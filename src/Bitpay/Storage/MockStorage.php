<?php
/**
 * PHP Client Library for the new cryptographically secure BitPay API.
 *
 * @copyright  Copyright 2011-2014 BitPay, Inc.
 * @author     Integrations Development Team <integrations@bitpay.com>
 * @license    https://raw.githubusercontent.com/bitpay/php-bitpay-client/master/LICENSE The MIT License (MIT)
 * @link       https://github.com/bitpay/php-bitpay-client
 * @package    Bitpay
 * @since      2.0.0
 * @version    2.3.0
 * @filesource
 */

namespace Bitpay\Storage;

use \Bitpay\Crypto\Key;

/**
 * Only used for testing.
 *
 * @codeCoverageIgnore
 * @package Bitpay
 */
class MockStorage implements Storage
{
    public function persist(Key $key)
    {
    }

    public function load($id)
    {
        return;
    }
}
