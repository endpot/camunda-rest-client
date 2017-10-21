<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 16:09
 */

namespace Camunda\Entity\Request;

class DeploymentRequest extends BasicRequest
{
    protected $fields = [
        'id',
        'name',
        'nameLike',
        'source',
        'withoutSource',
        'tenantIdIn',
        'withoutTenantId',
        'includeDeploymentsWithoutTenantId',
        'after',
        'before',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'deployment-name',
        'enable-duplicate-filtering',
        'deploy-changed-only',
        'deployment-source',
        'tenant-id',
        'files',
        'resourceIds',
        'resourceNames',
        'source',
        'cascade',
        'skipCustomListeners',
        'skipIoMappings'
    ];
}
