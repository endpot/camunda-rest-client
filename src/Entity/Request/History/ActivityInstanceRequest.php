<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/11/9
 * Time: 15:21
 */

namespace Camunda\Entity\Request\History;

use Camunda\Entity\Request\BasicRequest;

class ActivityInstanceRequest extends BasicRequest
{
    protected $fields = [
        'activityInstanceId',
        'processInstanceId',
        'processDefinitionId',
        'executionId',
        'activityId',
        'activityName',
        'activityType',
        'taskAssignee',
        'finished',
        'unfinished',
        'canceled',
        'completeScope',
        'startedBefore',
        'startedAfter',
        'finishedBefore',
        'finishedAfter',
        'tenantIdIn',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults'
    ];
}