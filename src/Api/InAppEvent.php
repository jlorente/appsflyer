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

namespace Jlorente\Appsflyer\Api;

use GuzzleHttp\RequestOptions;
use Jlorente\Appsflyer\Core\Api;

/**
 * Class InAppEvent.
 * 
 * @author Jose Lorente <jose.lorente.martin@gmail.com>
 * @see https://support.appsflyer.com/hc/en-us/articles/115005544169-Rich-In-App-Events-Android-and-iOS#EventTypes
 */
class InAppEvent extends Api
{

    /**
     * {@inheritdoc}
     */
    public function baseUrl()
    {
        return 'https://api2.appsflyer.com';
    }

    /**
     * Creates a new in-app event.
     *
     * @param string $appId
     * @param array $parameters
     * @return array
     */
    public function create($appId, array $parameters = [])
    {
        return $this->_post("inappevent/$appId", [
                    RequestOptions::JSON => $parameters
        ]);
    }

}
