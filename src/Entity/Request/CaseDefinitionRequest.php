<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 16:36
 */

namespace Camunda\Entity\Request;

class CaseDefinitionRequest extends BasicRequest
{
    protected $fields = [
        'caseDefinitionId',
        'caseDefinitionIdIn',
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
        'includeCaseDefinitionsWithoutTenantId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'variables',
        'businessKey',
        'historyTimeToLive'
    ];
}