<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 9:43
 */

namespace Camunda\Service;

use Camunda\Entity\Request\ExternalTaskRequest;

class ExternalTaskService extends BasicService
{
    public function getById($externalTaskId)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getList(ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/count')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function fetchAndLock(ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/fetchAndLock')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function complete($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/complete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function handleError($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/bpmnError')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function handleFailure($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/failure')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function unlock($externalTaskId)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/unlock')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setPriority($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/priority')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setRetries($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/retries')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setRetriesAsync($externalTaskId, ExternalTaskRequest $externalTaskRequest = null)
    {
        $this->setRequestUrl('/external-task/' . $externalTaskId . '/retries-async')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($externalTaskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
