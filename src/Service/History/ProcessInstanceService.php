<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/11/6
 * Time: 18:01
 */

namespace Camunda\Service\History;

use Camunda\Entity\Request\ProcessInstanceRequest;

class ProcessInstanceService
{
    public function getListCount(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/history/process-instance/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getList(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/history/process-instance')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($processInstanceId)
    {
        $this->setRequestUrl('/history/process-instance/' . $processInstanceId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }
}