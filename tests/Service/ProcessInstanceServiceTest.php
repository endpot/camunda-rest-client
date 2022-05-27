<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2018/8/10
 * Time: 11:11
 */

namespace Camunda\Service;


use Camunda\Entity\Request\ProcessInstanceRequest;
use PHPUnit\Framework\TestCase;

class ProcessInstanceServiceTest extends TestCase
{
    public function testGetList()
    {
        $processInstanceService = new ProcessInstanceService('http://localhost:8080/engine-rest/');

        var_dump($processInstanceService->getList());
    }

    public function testDeleteAsync()
    {
        $processDefinitionId = 'test_one:1:884d4430-9c4d-11e8-97bd-005056c00008';

        $processInstanceRequest = new ProcessInstanceRequest();
        $processInstanceService = new ProcessInstanceService('http://localhost:8080/engine-rest/');

        $processInstanceRequest->set('processInstanceQuery', [
            'processDefinitionId' => $processDefinitionId
        ])->set('skipCustomListeners', true);

        $result = $processInstanceService->deleteAsync($processInstanceRequest);

        var_dump($result);
    }
}
