<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 11:20
 */

namespace Camunda\Service;

use Camunda\Entity\Request\JobRequest;

class JobService extends BasicService
{
    public function getList(JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($jobId)
    {
        $this->setRequestUrl('/job/' . $jobId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function execute($jobId)
    {
        $this->setRequestUrl('/job/' . $jobId . '/execute')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateDueDate($jobId, JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job/' . $jobId . '/execute')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updatePriority($jobId, JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job/' . $jobId . '/priority')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateRetries($jobId, JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job/' . $jobId . '/retries')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getStacktrace($jobId)
    {
        $this->setRequestUrl('/job/' . $jobId . '/stacktrace')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function activateById($jobId)
    {
        $jobRequest = new JobRequest();
        $jobRequest->set('suspended', false);

        $this->setRequestUrl('/job/' . $jobId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function suspendById($jobId)
    {
        $jobRequest = new JobRequest();
        $jobRequest->set('suspended', true);

        $this->setRequestUrl('/job/' . $jobId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function activateOrSuspend(JobRequest $jobRequest)
    {
        $this->setRequestUrl('/job/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setRetriesAsync(JobRequest $jobRequest = null)
    {
        $this->setRequestUrl('/job/retries')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($jobRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function delete($jobId)
    {
        $this->setRequestUrl('/job/' . $jobId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
