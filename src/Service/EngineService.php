<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 19:59
 */

namespace Camunda\Service;

use Camunda\Entity\Request\EngineRequest;

class EngineService extends BasicService
{
    public function getList(EngineRequest $engineRequest = null)
    {
        $this->setRequestUrl('/engine')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($engineRequest)
            ->run();

        return $this->getResponseContents();
    }
}