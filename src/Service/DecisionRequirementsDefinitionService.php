<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 17:08
 */

namespace Camunda\Service;

use Camunda\Entity\Request\DecisionDefinitionRequest;

class DecisionRequirementsDefinitionService extends BasicService
{
    public function getList(DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-requirements-definition')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(DecisionDefinitionRequest $decisionDefinitionRequest = null)
    {
        $this->setRequestUrl('/decision-requirements-definition/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($decisionDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($decisionDefinitionId)
    {
        $this->setRequestUrl('/decision-requirements-definition/' . $decisionDefinitionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getByKey($decisionDefinitionKey, $tenantId = '')
    {
        $url = '/decision-requirements-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLById($decisionDefinitionId)
    {
        $this->setRequestUrl('/decision-requirements-definition/' . $decisionDefinitionId . '/xml')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLByKey($decisionDefinitionKey, $tenantId = '')
    {
        $url = '/decision-requirements-definition/' . $decisionDefinitionKey;
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
        $this->setRequestUrl('/decision-requirements-definition/' . $decisionDefinitionId . '/diagram')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramByKey($decisionDefinitionKey, $tenantId = '')
    {
        $url = '/decision-requirements-definition/' . $decisionDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/diagram';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }
}
