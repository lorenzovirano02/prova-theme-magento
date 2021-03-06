<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Setup\Model;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Phrase;

/**
 * Class PackagesAuth contains auth details.
 */
class PackagesAuth
{
    /**#@+
     * Composer auth.json keys
     */
    const KEY_HTTPBASIC = 'http-basic';
    const KEY_USERNAME = 'username';
    const KEY_PASSWORD = 'password';
    /**#@-*/

    /**#@+
     * Filenames for auth and package dashboard
     */
    const PATH_TO_AUTH_FILE = 'auth.json';
    const PATH_TO_PACKAGES_FILE = 'packages.json';
    /**#@-*/
}
