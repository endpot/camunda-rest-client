<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 16:15
 */

namespace Camunda\Entity\Request;

class BatchRequest extends BasicRequest
{
    protected $fields = [
        'batchId',
        'type',
        'tenantIdIn',
        'withoutTenantId',
        'suspended',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'cascade'
    ];
}