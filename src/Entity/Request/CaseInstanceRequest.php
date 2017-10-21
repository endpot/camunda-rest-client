<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/21
 * Time: 9:28
 */

namespace Camunda\Entity\Request;


class CaseInstanceRequest
{
    protected $fields = [
        'deserializeValue',
        'modifications',
        'deletions',
        'value',
        'type',
        'valueInfo',
        'data',
        'valueType',
        'caseInstanceId',
        'businessKey',
        'caseDefinitionId',
        'caseDefinitionKey',
        'deploymentId',
        'superProcessInstance',
        'subProcessInstance',
        'superCaseInstance',
        'subCaseInstance',
        'active',
        'completed',
        'tenantIdIn',
        'withoutTenantIdIn',
        'variables',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults'
    ];
}