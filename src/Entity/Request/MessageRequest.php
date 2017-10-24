<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:26
 */

namespace Camunda\Entity\Request;

class MessageRequest extends BasicRequest
{
    protected $fields = [
        'messageName',
        'businessKey',
        'tenantId',
        'withoutTenantId',
        'processInstanceId',
        'correlationKeys',
        'localCorrelationKeys',
        'processVariables',
        'all',
        'resultEnabled'
    ];
}
