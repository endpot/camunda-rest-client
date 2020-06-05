<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 16:10
 */

namespace Camunda\Service;

use Camunda\Entity\Request\ProcessDefinitionRequest;

class ProcessDefinitionService extends BasicService
{
    public function getActivityInstanceStatisticsById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/statistics')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getActivityInstanceStatisticsByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/statistics';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramById($processDefinitionId)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/diagram')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramByKey($processDefinitionKey, $tenantId = '')
    {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/diagram';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getStartFormVariablesById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/form-variables')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getStartFormVariablesByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/form-variables';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getList(ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getRenderedStartFormById($processDefinitionId)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/rendered-form')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getRenderedStartFormByKey($processDefinitionKey, $tenantId = '')
    {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/rendered-form';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getStartFormKeyById($processDefinitionId)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/startForm')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getStartFormKeyByKey($processDefinitionKey, $tenantId = '')
    {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/startForm';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getProcessInstanceStatistics(ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition/statistics')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLById($processDefinitionId)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/xml')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLByKey($processDefinitionKey, $tenantId = '')
    {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/xml';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getById($processDefinitionId)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getByKey($processDefinitionKey, $tenantId = '')
    {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function startInstanceById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/start')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function startInstanceByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/start';

        $this->setRequestUrl($url)
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function submitStartFormById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/submit-form')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function submitStartFormByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/submit-form';

        $this->setRequestUrl($url)
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function activateOrSuspendById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function activateOrSuspendByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/suspended';

        $this->setRequestUrl($url)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateHTTLById(
        $processDefinitionId,
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/history-time-to-live')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function updateHTTLByKey(
        $processDefinitionKey,
        $tenantId = '',
        ProcessDefinitionRequest $processDefinitionRequest = null
    ) {
        $url = '/process-definition/key/' . $processDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/history-time-to-live';

        $this->setRequestUrl($url)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function delete($processDefinitionId, ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function restart($processDefinitionId, ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/restart')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function restartAsync($processDefinitionId, ProcessDefinitionRequest $processDefinitionRequest = null)
    {
        $this->setRequestUrl('/process-definition/' . $processDefinitionId . '/restart-async')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($processDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }
}
