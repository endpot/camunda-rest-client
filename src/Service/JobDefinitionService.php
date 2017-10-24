<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:12
 */

namespace Camunda\Service;

use Camunda\Entity\Request\JobDefinitionRequest;

class JobDefinitionService extends BasicService
{
    public function getList(JobDefinitionRequest $jobDefinitionRequest = null)
    {
        $this->setRequestUrl('/job-definition')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(JobDefinitionRequest $jobDefinitionRequest = null)
    {
        $this->setRequestUrl('/job-definition/count')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($jobDefinitionId)
    {
        $this->setRequestUrl('/job-definition/' . $jobDefinitionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function setPriority($jobDefinitionId, JobDefinitionRequest $jobDefinitionRequest = null)
    {
        $this->setRequestUrl('/job-definition/' . $jobDefinitionId . '/jobPriority')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setRetries($jobDefinitionId, JobDefinitionRequest $jobDefinitionRequest = null)
    {
        $this->setRequestUrl('/job-definition/' . $jobDefinitionId . '/retries')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function activateById($jobDefinitionId)
    {
        $jobDefinitionRequest = new JobDefinitionRequest();
        $jobDefinitionRequest->set('suspended', false);

        $this->setRequestUrl('/job-definition/' . $jobDefinitionId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function suspendById($jobDefinitionId)
    {
        $jobDefinitionRequest = new JobDefinitionRequest();
        $jobDefinitionRequest->set('suspended', true);

        $this->setRequestUrl('/job-definition/' . $jobDefinitionId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function activateOrSuspend(JobDefinitionRequest $jobDefinitionRequest)
    {
        $this->setRequestUrl('/job-definition/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
