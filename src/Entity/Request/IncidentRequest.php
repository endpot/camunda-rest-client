<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 11:03
 */

namespace Camunda\Entity\Request;

class IncidentRequest extends BasicRequest
{
    protected $fields = [
        'incidentId',
        'incidentType',
        'incidentMessage',
        'processDefinitionId',
        'processInstanceId',
        'executionId',
        'activityId',
        'causeIncidentId',
        'rootCauseIncidentId',
        'configuration',
        'tenantIdIn',
        'jobDefinitionIdIn',
        'sortBy',
        'sortOrder'
    ];
}