<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:41
 */

namespace Camunda\Entity\Request;

class MigrationRequest extends BasicRequest
{
    protected $fields = [
        'sourceProcessDefinitionId',
        'targetProcessDefinitionId',
        'updateEventTriggers',
        'instructions',
        'migrationPlan',
        'processInstanceIds',
        'processInstanceQuery',
        'skipCustomListeners',
        'skipIoMappings'
    ];
}