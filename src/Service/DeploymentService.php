<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 9:19
 */

namespace Camunda\Service;

use Camunda\Entity\Request\DeploymentRequest;

class DeploymentService extends BasicService
{
    public function getList(DeploymentRequest $deploymentRequest = null)
    {
        $this->setRequestUrl('/deployment')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($deploymentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(DeploymentRequest $deploymentRequest = null)
    {
        $this->setRequestUrl('/deployment/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($deploymentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($deploymentId)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function create(DeploymentRequest $deploymentRequest = null)
    {
        $this->setRequestUrl('/deployment/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('MULTIPART')
            ->setRequestObject($deploymentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function redeploy($deploymentId, DeploymentRequest $deploymentRequest = null)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId . '/redeploy')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($deploymentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getResources($deploymentId, DeploymentRequest $deploymentRequest = null)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId . '/resources')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($deploymentRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getResource($deploymentId, $resourceId)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId . '/resources/' . $resourceId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getResourceData($deploymentId, $resourceId)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId . '/resources/' . $resourceId . '/data')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function deleteById($deploymentId)
    {
        $this->setRequestUrl('/deployment/' . $deploymentId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
