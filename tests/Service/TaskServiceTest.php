<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/11/2
 * Time: 12:46
 */

namespace Camunda\Service;

use Camunda\Entity\Request\TaskRequest;
use PHPUnit\Framework\TestCase;

class TaskServiceTest extends TestCase
{
    const CAMUNDA_REST_HOST = 'http://localhost:8080/engine-rest';

    public function testCompleteTask()
    {
        $taskRequest = new TaskRequest();
        $taskService = new TaskService(self::CAMUNDA_REST_HOST);

        $taskId = '8cd376cc-bf7f-11e7-a6e2-005056c00008';

        echo $taskService->complete($taskId, $taskRequest);
    }

    public function testGetCommentList()
    {
        $taskService = new TaskService(self::CAMUNDA_REST_HOST);

        $taskId = 'e1a2d7a6-dce0-11e7-901d-005056c00008';

        var_dump($taskService->getCommentList($taskId));
    }
}
