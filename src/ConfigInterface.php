<?php

/**
 * Part of the Appsflyer package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Appsflyer
 * @version    1.0.0
 * @author     Jose Lorente
 * @license    BSD License (3-clause)
 * @copyright  (c) 2018, Jose Lorente
 */

namespace Jlorente\Appsflyer;

interface ConfigInterface
{

    /**
     * Returns the current package version.
     *
     * @return string
     */
    public function getVersion();

    /**
     * Sets the current package version.
     *
     * @param  string  $version
     * @return $this
     */
    public function setVersion($version);

    /**
     * Returns the Appsflyer API key.
     *
     * @return string
     */
    public function getApiKey();

    /**
     * Sets the Appsflyer API key.
     *
     * @param  string  $apiKey
     * @return $this
     */
    public function setApiKey($apiKey);

    /**
     * Returns the Appsflyer API version.
     *
     * @return string
     */
    public function getApiToken();

    /**
     * Sets the Appsflyer API version.
     *
     * @param  string  $apiVersion
     * @return $this
     */
    public function setApiToken($apiVersion);
}
