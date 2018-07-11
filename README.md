# camunda-rest-client

```php
# an example to use camunda rest api to complete task

use Camunda\Entity\Request\TaskRequest;
use Camunda\Service\TaskService;

$host = 'http://localhost:8080/engine-rest';
$taskRequest = new TaskRequest();
$taskService = new TaskService($host);

$taskId = '8cd376cc-bf7f-11e7-a6e2-005056c00008';
echo $taskService->complete($taskId, $taskRequest);
```
