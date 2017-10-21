<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 16:18
 */

namespace Camunda\Service;

use Camunda\Entity\Request\BatchRequest;

class BatchService extends BasicService
{
    public function getList(BatchRequest $batchRequest = null)
    {
        $this->setRequestUrl('/batch')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(BatchRequest $batchRequest = null)
    {
        $this->setRequestUrl('/batch/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($batchId)
    {
        $this->setRequestUrl('/batch/' . $batchId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function activateById($batchId)
    {
        $batchRequest = new BatchRequest();
        $batchRequest->set('suspended', false);

        $this->setRequestUrl('/batch/' . $batchId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function suspendById($batchId)
    {
        $batchRequest = new BatchRequest();
        $batchRequest->set('suspended', true);

        $this->setRequestUrl('/batch/' . $batchId . '/suspended')
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteById($batchId)
    {
        $this->setRequestUrl('/batch/' . $batchId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function getStatistics(BatchRequest $batchRequest = null)
    {
        $this->setRequestUrl('/batch/statistics')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getStatisticsCount(BatchRequest $batchRequest = null)
    {
        $this->setRequestUrl('/batch/statistics/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($batchRequest)
            ->run();

        return $this->getResponseContents();
    }
}