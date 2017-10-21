<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 16:46
 */

namespace Camunda\Service;

use Camunda\Entity\Request\CaseDefinitionRequest;

class CaseDefinitionService extends BasicService
{
    public function getList(CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-definition')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-definition/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($caseDefinitionId)
    {
        $this->setRequestUrl('/case-definition/' . $caseDefinitionId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getByKey($caseDefinitionKey, $tenantId = '')
    {
        $url = '/case-definition/' . $caseDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLById($caseDefinitionId)
    {
        $this->setRequestUrl('/case-definition/' . $caseDefinitionId . '/xml')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getXMLByKey($caseDefinitionKey, $tenantId = '')
    {
        $url = '/case-definition/' . $caseDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/xml';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramById($caseDefinitionId)
    {
        $this->setRequestUrl('/case-definition/' . $caseDefinitionId . '/diagram')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getDiagramByKey($caseDefinitionKey, $tenantId = '')
    {
        $url = '/case-definition/' . $caseDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/diagram';

        $this->setRequestUrl($url)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function createInstanceById($caseDefinitionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-definition/' . $caseDefinitionId . '/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function createInstanceByKey(
        $caseDefinitionKey,
        $tenantId = '',
        CaseDefinitionRequest $caseDefinitionRequest = null
    )
    {
        $url = '/case-definition/' . $caseDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/create';

        $this->setRequestUrl($url)
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateHTTLById($caseDefinitionId, CaseDefinitionRequest $caseDefinitionRequest = null)
    {
        $this->setRequestUrl('/case-definition/' . $caseDefinitionId . '/history-time-to-live')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function updateHTTLByKey(
        $caseDefinitionKey,
        $tenantId = '',
        CaseDefinitionRequest $caseDefinitionRequest = null
    ) {
        $url = '/case-definition/' . $caseDefinitionKey;
        $url = $tenantId ? ($url . '/tenant-id/' . $tenantId) : $url;
        $url = $url . '/history-time-to-live';

        $this->setRequestUrl($url)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($caseDefinitionRequest)
            ->run();

        return $this->getResponseContents();
    }
}