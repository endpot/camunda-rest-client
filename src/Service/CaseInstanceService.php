<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 10:08
 */

namespace Camunda\Service;

use Camunda\Entity\Request\CaseInstanceRequest;

class CaseInstanceService extends BasicService
{
    public function getVariable($caseInstanceId, $variableName, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getVariableData($caseInstanceId, $variableName)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getVariableList($caseInstanceId, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateVariable($caseInstanceId, $variableName, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateVariableData(
        $caseInstanceId,
        $variableName,
        CaseInstanceRequest $caseInstanceRequest = null
    ) {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables/' . $variableName . '/data')
            ->setRequestMethod('POST')
            ->setRequestContentType('MULTIPART')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function modifyVariable($caseInstanceId, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteVariable($caseInstanceId, $variableName)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/variables/' . $variableName)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JSON')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getList(CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/count')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($caseInstanceId)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function complete($caseInstanceId, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-instance/' . $caseInstanceId . '/complete')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function close($caseInstanceId, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseInstanceId . '/close')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function terminate($caseInstanceId, CaseInstanceRequest $caseInstanceRequest = null)
    {
        $this->setRequestUrl('/case-execution/' . $caseInstanceId . '/terminate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseInstanceRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}