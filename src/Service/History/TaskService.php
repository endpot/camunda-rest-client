<?php

namespace Camunda\Service\History;

use Camunda\Service\BasicService;
use Camunda\Entity\Request\TaskRequest;

class TaskService extends BasicService
{
    public function getListCount(TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/history/task/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getList(TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/history/task')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseContents();
    }

     public function getById($taskId)
    {
        $this->setRequestUrl('/task/' . $taskId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run(true);

        return $this->getResponseContents();
    }
}
