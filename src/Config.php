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

class Config implements ConfigInterface
{

    /**
     * The current package version.
     *
     * @var string
     */
    protected $version;

    /**
     * The Appsflyer API key.
     *
     * @var string
     */
    protected $devKey;

    /**
     * The Appsflyer API token.
     *
     * @var string
     */
    protected $apiToken;

    /**
     * The managed account id.
     *
     * @var string
     */
    protected $accountId;

    /**
     * Constructor.
     *
     * @param  string  $version
     * @param  string  $devKey
     * @param  string  $apiToken
     * @return void
     * @throws \RuntimeException
     */
    public function __construct($version, $devKey, $apiToken)
    {
        $this->setVersion($version);

        $this->setDevKey($devKey ?: getenv('APPSFLYER_DEV_KEY'));

        $this->setApiToken($apiToken ?: getenv('APPSFLYER_API_TOKEN'));

        if (!$this->devKey) {
            throw new \RuntimeException('The Appsflyer dev_key is not defined!');
        }

        if (!$this->devKey) {
            throw new \RuntimeException('The Appsflyer dev_key is not defined!');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDevKey()
    {
        return $this->devKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setDevKey($devKey)
    {
        $this->devKey = $devKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiToken()
    {
        return $this->apiVersion;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiToken($apiToken)
    {
        $this->apiVersion = $apiToken;

        return $this;
    }

}
