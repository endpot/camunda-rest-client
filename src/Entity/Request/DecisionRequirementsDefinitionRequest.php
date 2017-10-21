<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 17:04
 */

namespace Camunda\Entity\Request;

class DecisionRequirementsDefinitionRequest extends BasicRequest
{
    protected $fields = [
        'decisionRequirementsDefinitionId',
        'decisionRequirementsDefinitionIdIn',
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
        'tenantIdIn',
        'withoutTenantId',
        'includeDecisionRequirementsDefinitionsWithoutTenantId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults'
    ];
}