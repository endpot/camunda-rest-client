<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:07
 */

namespace Camunda\Service;

use Camunda\Entity\Request\FilterRequest;

class FilterService extends BasicService
{
    public function getList(FilterRequest $filterRequest = null)
    {
        $this->setRequestUrl('/filter')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($filterRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(FilterRequest $filterRequest = null)
    {
        $this->setRequestUrl('/filter/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($filterRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($filterId, FilterRequest $filterRequest = null)
    {
        $this->setRequestUrl('/filter/' . $filterId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($filterRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function create(FilterRequest $filterRequest = null)
    {
        $this->setRequestUrl('/filter/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($filterRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function update($filterId, FilterRequest $filterRequest = null)
    {
        $this->setRequestUrl('/filter/' . $filterId)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($filterRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function delete($filterId)
    {
        $this->setRequestUrl('/filter/' . $filterId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function execute($filterId)
    {
        $this->setRequestUrl('/filter/' . $filterId . '/singleResult')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function executeList($filterId)
    {
        $this->setRequestUrl('/filter/' . $filterId . '/list')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function executeCount($filterId)
    {
        $this->setRequestUrl('/filter/' . $filterId . '/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function options($filterId = '')
    {
        $url = $filterId ? '/filter/' . $filterId : '/filter';
        $this->setRequestUrl($url)
            ->setRequestMethod('OPTIONS')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }
}