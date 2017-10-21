<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 17:36
 */

namespace Camunda\Service;

use Camunda\Entity\Request\CaseDefinitionRequest;

class CaseExecutionService extends BasicService
{
    public function getLocalVariable($caseExecutionId, $variableName, CaseDefinitionRequest $caseDefinitionRequest)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getLocalVariableData($caseExecutionId, $variableName)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/' . $variableName . '/data')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getLocalVariableList($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateLocalVariable($caseExecutionId, $variableName, CaseDefinitionRequest $caseDefinitionRequest)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/' . $variableName)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateLocalVariableData(
        $caseExecutionId,
        $variableName,
        CaseDefinitionRequest $caseDefinitionRequest
    ) {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/' . $variableName . '/data')
            ->setRequestMethod('POST')
            ->setRequestContentType('MULTIPART')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function modifyLocalVariable($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteLocalVariable($caseExecutionId, $variableName)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/localVariables/' . $variableName)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getVariable($caseExecutionId, $variableName, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getVariableData($caseExecutionId, $variableName)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/' . $variableName . '/data')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getVariableList($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateVariable($caseExecutionId, $variableName, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/' . $variableName)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateVariableData(
        $caseExecutionId,
        $variableName,
        CaseDefinitionRequest $caseDefinitionRequest = null
    ) {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/' . $variableName . '/data')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function modifyVariable($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteVariable($caseExecutionId, $variableName)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/variables/' . $variableName)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getList(CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/count')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($caseExecutionId)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function start($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/manual-start')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function complete($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/complete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function disable($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/disable')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function reEnable($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/reenable')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function terminate($caseExecutionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseExecutionId . '/terminate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}