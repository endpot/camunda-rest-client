<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/11/9
 * Time: 15:18
 */

namespace Camunda\Service\History;

use Camunda\Service\BasicService;
use Camunda\Entity\Request\History\ActivityInstanceRequest;

class ActivityInstanceService extends BasicService
{
    public function getList(ActivityInstanceRequest $activityInstanceRequest = null)
    {
        $this->setRequestUrl('/history/activity-instance')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($activityInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(ActivityInstanceRequest $activityInstanceRequest = null)
    {
        $this->setRequestUrl('/history/activity-instance/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($activityInstanceRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($activityInstanceId)
    {
        $this->setRequestUrl('/history/activity-instance/' . $activityInstanceId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }
}
