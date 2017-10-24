<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:47
 */

namespace Camunda\Entity\Request;

class IdentityRequest extends BasicRequest
{
    protected $fields = [
        'userId',
        'username',
        'password'
    ];
}