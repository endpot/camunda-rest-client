<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author xuansw
 * @date 2017/12/16
 * @since 2017/12/16 description
 */

namespace Camunda\Entity\Request\History;

use Camunda\Entity\Request\BasicRequest;

class IdentityLinkRequest extends BasicRequest
{
    protected $fields = [
        'type',
        'userId',
        'groupId',
        'dateBefore',
        'dateAfter',
        'taskId',
        'processDefinitionId',
        'processDefinitionKey',
        'operationType',
        'assignerId',
        'tenantIdIn',
        'sortBy',
        'sortOrder'
    ];
}
