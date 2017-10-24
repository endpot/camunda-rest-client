<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 17:06
 */

namespace Camunda\Service;

use Camunda\Entity\Request\ProcessInstanceRequest;

class ProcessInstanceService extends BasicService
{
    public function deleteVariable($processInstanceId, $variableName)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function setVariableData(
        $processInstanceId,
        $variableName,
        ProcessInstanceRequest $processInstanceRequest = null
    ) {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/' . $variableName . '/data')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getVariable(
        $processInstanceId,
        $variableName,
        ProcessInstanceRequest $processInstanceRequest = null
    ) {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getVariableList(
        $processInstanceId,
        ProcessInstanceRequest $processInstanceRequest = null
    ) {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateVariable(
        $processInstanceId,
        $variableName,
        ProcessInstanceRequest $processInstanceRequest = null
    ) {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function modifyVariable($processInstanceId, ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/variables/')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function delete($processInstanceId, ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getActivityInstance($processInstanceId)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/activity-instances')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getList(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($processInstanceId)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function modify($processInstanceId, ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/modification')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteAsync(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/delete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function deleteAsyncHistoricQueryBased()
    {
        //
    }

    public function setJobRetriesAsync()
    {
        //
    }

    public function setJobRetriesAsyncHistoricQueryBased()
    {
        //
    }

    public function activateOrSuspendById($processInstanceId, ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/' . $processInstanceId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function activateOrSuspend(ProcessInstanceRequest $processInstanceRequest = null)
    {
        $this->setRequestUrl('/process-instance/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
