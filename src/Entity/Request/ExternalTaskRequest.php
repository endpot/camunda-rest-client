<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 9:34
 */

namespace Camunda\Entity\Request;

class ExternalTaskRequest extends BasicRequest
{
    protected $fields = [
        'externalTaskId',
        'topicName',
        'workerId',
        'locked',
        'notLocked',
        'withRetriesLeft',
        'noRetriesLeft',
        'lockExpirationAfter',
        'lockExpirationBefore',
        'activityId',
        'activityIdIn',
        'executionId',
        'processInstanceId',
        'processDefinitionId',
        'tenantIdIn',
        'active',
        'priorityHigherThanOrEquals',
        'priorityLowerThanOrEquals',
        'suspended',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'sorting',
        'maxTasks',
        'usePriority',
        'topics',
        'variables',
        'errorCode',
        'errorMessage',
        'errorDetails',
        'retries',
        'retryTimeout',
        'priority',
        'externalTaskIds',
        'externalTaskQuery'
    ];
}