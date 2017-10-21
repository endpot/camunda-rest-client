<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 15:47
 */

namespace Camunda\Entity\Request;

class AuthorizationRequest extends BasicRequest
{
    protected $fields = [
        'id',
        'type',
        'userIdIn',
        'groupIdIn',
        'resourceType',
        'resourceId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'permissionName',
        'permissionValue',
        'resourceName',
        'resourceType',
        'permissions',
        'userId',
        'groupId'
    ];
}