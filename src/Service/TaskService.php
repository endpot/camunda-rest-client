<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 17:51
 */

namespace Camunda\Service;

use Camunda\Entity\Request\TaskRequest;

class TaskService extends BasicService
{
    public function getIdentityLinks($taskId)
    {
        $this->setRequestUrl('/task/' . $taskId . '/identity-links')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function addIdentityLink($taskId, $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/identity-links')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteIdentityLink($taskId, $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/identity-links/delete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getById($taskId)
    {
        $this->setRequestUrl('/task/' . $taskId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run(true);

        return $this->getResponseContents();
    }

    public function getList(TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($taskRequest)
            ->run(true);

        return $this->getResponseContents();
    }

    public function getListCount(TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getFormKey($taskId)
    {
        $this->setRequestUrl('/task/' . $taskId . '/form')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function claim($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/claim')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function unclaim($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/unclaim')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function complete($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/complete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function submitForm($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/submit-form')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function resolve($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/resolve')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setAssignee($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/assignee')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function delegate($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/delegate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getRenderedForm($taskId)
    {
        $this->setRequestUrl('/task/' . $taskId . '/rendered-form')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getTaskFormVariables($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId . '/form-variables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($taskRequest)
            ->run(true);

        return $this->getResponseContents();
    }

    public function create(TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run(true);

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function update($taskId, TaskRequest $taskRequest = null)
    {
        $this->setRequestUrl('/task/' . $taskId)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($taskRequest)
            ->run(true);

        return $this->getResponseCode() == 204 ? true : false;
    }
}
