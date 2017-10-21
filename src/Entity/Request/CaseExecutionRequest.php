<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 17:08
 */

namespace Camunda\Entity\Request;

class CaseExecutionRequest extends BasicRequest
{
    protected $fields = [
        'deserializeValue',
        'value',
        'type',
        'valueInfo',
        'data',
        'valueType',
        'modifications',
        'deletions',
        'caseExecutionId',
        'caseInstanceId',
        'businessKey',
        'caseDefinitionId',
        'caseDefinitionKey',
        'activityId',
        'required',
        'repeatable',
        'repetition',
        'active',
        'enabled',
        'disabled',
        'tenantIdIn',
        'variables',
        'caseInstanceVariables',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'sorting'
    ];
}