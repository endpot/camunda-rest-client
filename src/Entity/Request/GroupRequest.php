<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:26
 */

namespace Camunda\Entity\Request;

class GroupRequest extends BasicRequest
{
    protected $fields = [
        'id',
        'name',
        'nameLike',
        'type',
        'member',
        'memberOfTenant',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults'
    ];
}
