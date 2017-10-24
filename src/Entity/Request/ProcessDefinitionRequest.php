<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 15:47
 */

namespace Camunda\Entity\Request;

class ProcessDefinitionRequest extends BasicRequest
{
    protected $fields = [
        'failedJobs',
        'incidents',
        'incidentsForType',
        'variableNames',
        'deserializeValues',
        'processDefinitionId',
        'processDefinitionIdIn',
        'name',
        'nameLike',
        'deploymentId',
        'key',
        'keyLike',
        'category',
        'categoryLike',
        'version',
        'latestVersion',
        'resourceName',
        'resourceNameLike',
        'startableBy',
        'active',
        'suspended',
        'incidentId',
        'incidentType',
        'incidentMessage',
        'incidentMessageLike',
        'tenantIdIn',
        'withoutTenantId',
        'includeProcessDefinitionsWithoutTenantId',
        'versionTag',
        'versionTagLike',
        'variables',
        'businessKey',
        'caseInstanceId',
        'startInstructions',
        'skipCustomListeners',
        'skipIoMappings',
        'withVariablesInReturn',
        'suspended',
        'includeProcessInstances',
        'executionDate',
        'processDefinitionKey',
        'historyTimeToLive',
        'cascade',
        'skipCustomListeners',
        'initialVariables',
        'withoutBusinessKey',
        'instructions',
        'processInstanceIds',
        'historicProcessInstanceQuery'
    ];
}