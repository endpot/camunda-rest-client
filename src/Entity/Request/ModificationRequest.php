<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:49
 */

namespace Camunda\Entity\Request;

class ModificationRequest extends BasicRequest
{
    protected $fields = [
        'processDefinitionId',
        'skipCustomListeners',
        'skipIoMappings',
        'processInstanceIds',
        'processInstanceQuery',
        'instructions'
    ];
}