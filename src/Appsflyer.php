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

use ReflectionClass;

class Appsflyer
{

    /**
     * The package version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The Config repository instance.
     *
     * @var \Jlorente\Appsflyer\ConfigInterface
     */
    protected $config;

    /**
     * The amount converter class and method name.
     *
     * @var string
     */
    protected static $amountConverter = '\\Jlorente\\Appsflyer\\AmountConverter::convert';

    /**
     * Constructor.
     *
     * @param  string  $devKey
     * @param  string  $apiToken
     * @return void
     */
    public function __construct($devKey = null, $apiToken = null)
    {
        $this->config = new Config(self::VERSION, $devKey, $apiToken);
    }

    /**
     * Create a new Appsflyer API instance.
     *
     * @param  string  $devKey
     * @param  string  $apiToken
     * @return \Jlorente\Appsflyer\Appsflyer
     */
    public static function make($devKey = null, $apiToken = null)
    {
        return new static($devKey, $apiToken);
    }

    /**
     * Returns the current package version.
     *
     * @return string
     */
    public static function getVersion()
    {
        return self::VERSION;
    }

    /**
     * Returns the Config repository instance.
     *
     * @return \Jlorente\Appsflyer\ConfigInterface
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Sets the Config repository instance.
     *
     * @param  \Jlorente\Appsflyer\ConfigInterface  $config
     * @return $this
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Returns the Appsflyer API key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->config->getApiKey();
    }

    /**
     * Sets the Appsflyer API key.
     *
     * @param  string  $devKey
     * @return $this
     */
    public function setApiKey($devKey)
    {
        $this->config->setApiKey($devKey);

        return $this;
    }

    /**
     * Returns the Appsflyer API version.
     *
     * @return string
     */
    public function getApiToken()
    {
        return $this->config->getApiToken();
    }

    /**
     * Sets the Appsflyer API version.
     *
     * @param  string  $apiToken
     * @return $this
     */
    public function setApiToken($apiToken)
    {
        $this->config->setApiToken($apiToken);

        return $this;
    }

    /**
     * Returns the amount converter class and method name.
     *
     * @return string
     */
    public static function getAmountConverter()
    {
        return static::$amountConverter;
    }

    /**
     * Sets the amount converter class and method name.
     *
     * @param  $amountConverter  string
     * @return void
     */
    public static function setAmountConverter($amountConverter)
    {
        static::$amountConverter = $amountConverter;
    }

    /**
     * Disables the amount converter.
     *
     * @return void
     */
    public static function disableAmountConverter()
    {
        static::setAmountConverter(null);
    }

    /**
     * Returns the default amount converter.
     *
     * @return string
     */
    public static function getDefaultAmountConverter()
    {
        return '\\Jlorente\\Appsflyer\\AmountConverter::convert';
    }

    /**
     * Sets the default amount converter;
     *
     * @return void
     */
    public static function setDefaultAmountConverter()
    {
        static::setAmountConverter(
                static::getDefaultAmountConverter()
        );
    }

    /**
     * Dynamically handle missing methods.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Jlorente\Appsflyer\Api\ApiInterface
     */
    public function __call($method, array $parameters)
    {
        if ($this->isIteratorRequest($method)) {
            $apiInstance = $this->getApiInstance(substr($method, 0, -11));

            return (new Pager($apiInstance))->fetch($parameters);
        }

        return $this->getApiInstance($method);
    }

    /**
     * Determines if the request is an iterator request.
     *
     * @return bool
     */
    protected function isIteratorRequest($method)
    {
        return substr($method, -8) === 'Iterator';
    }

    /**
     * Returns the Api class instance for the given method.
     *
     * @param  string  $method
     * @return \Jlorente\Appsflyer\Api\ApiInterface
     * @throws \BadMethodCallException
     */
    protected function getApiInstance($method)
    {
        $class = "\\Jlorente\\Appsflyer\\Api\\" . ucwords($method);

        if (class_exists($class) && !(new ReflectionClass($class))->isAbstract()) {
            return new $class($this->config);
        }

        throw new \BadMethodCallException("Undefined method [{$method}] called.");
    }

}
