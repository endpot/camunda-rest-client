<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 16:57
 */

namespace Camunda\Entity\Request;

class ProcessInstanceRequest extends BasicRequest
{
    protected $fields = [
        'skipCustomListeners',
        'skipIoMappings',
        'instructions',
        'processInstanceIds',
        'processInstanceQuery',
        'deleteReason'
    ];
}
