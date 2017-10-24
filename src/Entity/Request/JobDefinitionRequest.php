<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 11:47
 */

namespace Camunda\Entity\Request;

class JobDefinitionRequest extends BasicRequest
{
    protected $fields = [
        'jobDefinitionId',
        'activityIdIn',
        'processDefinitionId',
        'processDefinitionKey',
        'jobType',
        'jobConfiguration',
        'active',
        'suspended',
        'withOverridingJobPriority',
        'tenantIdIn',
        'withoutTenantId',
        'includeJobDefinitionsWithoutTenantId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'sorting',
        'priority',
        'includeJobs',
        'retries',
        'suspended',
        'executionDate',
        'processDefinitionTenantId',
        'processDefinitionWithoutTenantId'
    ];
}
