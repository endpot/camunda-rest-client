<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 20:28
 */

namespace Camunda\Service;

use Camunda\Entity\Request\ExecutionRequest;

class ExecutionService extends BasicService
{
    public function getLocalVariableList($executionId, ExecutionRequest $executionRequest)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getLocalVariable($executionId, $variableName, ExecutionRequest $executionRequest)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getLocalVariableData($executionId, $variableName)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/' . $variableName . '/data')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function updateLocalVariable($executionId, $variableName, ExecutionRequest $executionRequest)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/' . $variableName)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateLocalVariableData(
        $executionId,
        $variableName,
        ExecutionRequest $executionRequest
    ) {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/' . $variableName . '/data')
            ->setRequestMethod('POST')
            ->setRequestContentType('MULTIPART')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function modifyLocalVariable($executionId, ExecutionRequest $executionRequest)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteLocalVariable($executionId, $variableName)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/localVariables/' . $variableName)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getMessageEventSubscription($executionId, $messageName)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/messageSubscriptions/' . $messageName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function triggerMessageEventSubscription(
        $executionId,
        $messageName,
        ExecutionRequest $executionRequest = null
    ) {
        $this->setRequestUrl('/execution/' . $executionId . '/messageSubscriptions/' . $messageName . '/trigger')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getList(ExecutionRequest $executionRequest = null)
    {
        $this->setRequestUrl('/execution')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(ExecutionRequest $executionRequest = null)
    {
        $this->setRequestUrl('/execution/count')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($executionId)
    {
        $this->setRequestUrl('/execution/' . $executionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function trigger($executionId, ExecutionRequest $executionRequest = null)
    {
        $this->setRequestUrl('/execution/' . $executionId . '/signal')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($executionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}