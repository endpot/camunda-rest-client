<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:00
 */

namespace Camunda\Entity\Request;

class FilterRequest extends BasicRequest
{
    protected $fields = [
        'filterId',
        'resourceType',
        'name',
        'nameLike',
        'owner',
        'itemCount',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'itemCount',
        'query',
        'properties',
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
