<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 16:31
 */

namespace Camunda\Service;

use Camunda\Entity\Request\DecisionDefinitionRequest;

class DecisionDefinitionService extends BasicService
{
    public function getList(DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-definition')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-definition/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($decisionDefinitionId)
    {
        $this->setRequestUrl('/decision-definition/' . $decisionDefinitionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLById($decisionDefinitionId)
    {
        $this->setRequestUrl('/decision-definition/' . $decisionDefinitionId . '/xml')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLByKey($decisionDefinitionKey, $tenantId = '')
    {
        $url = '/decision-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/xml';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramById($decisionDefinitionId)
    {
        $this->setRequestUrl('/decision-definition/' . $decisionDefinitionId . '/diagram')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramByKey($decisionDefinitionKey, $tenantId = '')
    {
        $url = '/decision-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/diagram';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function evaluateById($decisionDefinitionId, DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-definition/' . $decisionDefinitionId . '/evaluate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function evaluateByKey(
        $decisionDefinitionKey,
        $tenantId = '',
        DecisionDefinitionRequest $decisionDefinitionRequest = null
    ) {
        $url = '/decision-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/evaluate';

        $this->setRequestUrl($url)
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateHTTLById($decisionDefinitionId, DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-definition/' . $decisionDefinitionId . '/history-time-to-live')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateHTTLByKey(
        $decisionDefinitionKey,
        $tenantId = '',
        DecisionDefinitionRequest $decisionDefinitionRequest = null
    ) {
        $url = '/decision-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/history-time-to-live';

        $this->setRequestUrl($url)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }
}