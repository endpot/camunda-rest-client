<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 20:03
 */

namespace Camunda\Entity\Request;

class ExecutionRequest extends BasicRequest
{
    protected $fields = [
        'deserializeValues',
        'deserializeValue',
        'value',
        'type',
        'valueInfo',
        'data',
        'valueType',
        'modifications',
        'deletions',
        'variables',
        'businessKey',
        'processDefinitionId',
        'processDefinitionKey',
        'processInstanceId',
        'activityId',
        'signalEventSubscriptionName',
        'messageEventSubscriptionName',
        'active',
        'suspended',
        'incidentId',
        'incidentType',
        'incidentMessage',
        'incidentMessageLike',
        'tenantIdIn',
        'processVariables',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'sorting'
    ];
}