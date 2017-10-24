<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:37
 */

namespace Camunda\Service;

use Camunda\Entity\Request\MetricsRequest;

class MetricsService extends BasicService
{
    public function getList(MetricsRequest $metricsRequest = null)
    {
        $this->setRequestUrl('/metrics')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($metricsRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount($metricsName, MetricsRequest $metricsRequest = null)
    {
        $this->setRequestUrl('/metrics/' . $metricsName . '/sum')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($metricsRequest)
            ->run();

        return $this->getResponseContents();
    }
}
