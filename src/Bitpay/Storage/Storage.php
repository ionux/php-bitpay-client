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

namespace Bitpay\Storage;

use Bitpay\Key;

/**
 * Interface for all storage engines.
 *
 * @package Bitpay
 */
interface Storage
{
    /**
     * @param Key $key
     */
    public function persist(Key $key);

    /**
     * Retrieve a Key object from storage.
     *
     * @param string $id
     * @return KeyInterface
     */
    public function load($id);
}
