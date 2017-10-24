<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:35
 */

namespace Camunda\Entity\Request;

class MetricsRequest extends BasicRequest
{
    protected $fields = [
        'name',
        'reporter',
        'startDate',
        'endDate',
        'firstResult',
        'maxResults',
        'interval'
    ];
}
