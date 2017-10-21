<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 15:53
 */

namespace Camunda\Service;

use Camunda\Entity\Request\AuthorizationRequest;

class AuthorizationService extends BasicService
{
    public function getList(AuthorizationRequest $authorizationRequest = null)
    {
        $this->setRequestUrl('/authorization')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($authorizationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(AuthorizationRequest $authorizationRequest = null)
    {
        $this->setRequestUrl('/authorization/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($authorizationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($authorizationId)
    {
        $this->setRequestUrl('/authorization/' . $authorizationId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function check(AuthorizationRequest $authorizationRequest = null)
    {
        $this->setRequestUrl('/authorization/check')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($authorizationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function options()
    {
        $this->setRequestUrl('/authorization')
            ->setRequestMethod('OPTIONS')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function optionsById($authorizationId)
    {
        $this->setRequestUrl('/authorization/' . $authorizationId)
            ->setRequestMethod('OPTIONS')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function create(AuthorizationRequest $authorizationRequest = null)
    {
        $this->setRequestUrl('/authorization/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($authorizationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function update($authorizationId, AuthorizationRequest $authorizationRequest = null)
    {
        $this->setRequestUrl('/authorization/' . $authorizationId)
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($authorizationRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteById($authorizationId)
    {
        $this->setRequestUrl('/authorization/' . $authorizationId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 200 ? true : false;
    }
}