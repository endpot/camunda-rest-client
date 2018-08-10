<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 16:57
 */

namespace Camunda\Entity\Request;

class ProcessInstanceRequest extends BasicRequest
{
    protected $fields = [
        'id',
        'activityId',
        'activityName',
        'activityType',
        'processInstanceId',
        'processDefinitionId',
        'childActivityInstances',
        'childTransitionInstances',
        'executionIds',
        'processInstanceIds',
        'businessKey',
        'businessKeyLike',
        'caseInstanceId',
        'processDefinitionKey',
        'deploymentId',
        'superProcessInstance',
        'subProcessInstance',
        'superCaseInstance',
        'subCaseInstance',
        'active',
        'suspended',
        'incidentId',
        'incidentType',
        'incidentMessage',
        'incidentMessageLike',
        'tenantIdIn',
        'withoutTenantId',
        'activityIdIn',
        'variables',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'ended',
        'tenantId',
        'skipCustomListeners',
        'skipIoMappings',
        'instructions',
        'processInstanceIds',
        'processInstanceQuery',
        'deleteReason'
    ];
}
