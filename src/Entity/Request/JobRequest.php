<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 11:09
 */

namespace Camunda\Entity\Request;

class JobRequest extends BasicRequest
{
    protected $fields = [
        'jobId',
        'jobDefinitionId',
        'processInstanceId',
        'executionId',
        'processDefinitionId',
        'processDefinitionKey',
        'activityId',
        'withRetriesLeft',
        'executable',
        'timers',
        'messages',
        'dueDates',
        'withException',
        'exceptionMessage',
        'noRetriesLeft',
        'active',
        'suspended',
        'priorityLowerThanOrEquals',
        'priorityHigherThanOrEquals',
        'tenantIdIn',
        'withoutTenantId',
        'includeJobsWithoutTenantId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'sorting',
        'duedate',
        'priority',
        'retries',
        'jobIds',
        'jobQuery',
        'processDefinitionTenantId',
        'processDefinitionWithoutTenantId',
        'processInstanceId'
    ];
}