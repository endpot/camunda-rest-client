<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 11:05
 */

namespace Camunda\Service;

use Camunda\Entity\Request\IncidentRequest;

class IncidentService extends BasicService
{
    public function getList(IncidentRequest $incidentRequest = null)
    {
        $this->setRequestUrl('/incident')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($incidentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(IncidentRequest $incidentRequest = null)
    {
        $this->setRequestUrl('/incident/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($incidentRequest)
            ->run();

        return $this->getResponseContents();
    }
}