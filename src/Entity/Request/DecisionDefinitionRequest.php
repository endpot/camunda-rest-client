<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 16:27
 */

namespace Camunda\Entity\Request;

class DecisionDefinitionRequest extends BasicRequest
{
    protected $fields = [
        'decisionDefinitionId',
        'decisionDefinitionIdIn',
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
        'decisionRequirementsDefinitionId',
        'decisionRequirementsDefinitionKey',
        'withoutDecisionRequirementsDefinition',
        'tenantIdIn',
        'withoutTenantId',
        'includeDecisionDefinitionsWithoutTenantId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'variables',
        'historyTimeToLive'
    ];
}