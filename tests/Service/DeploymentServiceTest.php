<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/20
 * Time: 10:20
 */

namespace Camunda\Service;

use Camunda\Entity\Request\DeploymentRequest;
use Camunda\Helper\FileCollection;

class DeploymentServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testGetList()
    {
        $deploymentService = new DeploymentService('http://localhost:8080/engine-rest/');
        //$deploymentRequest = new DeploymentRequest();
        //$deploymentRequest->set('id', 'e1a85d53-b3cb-11e7-93a5-005056c00008');
        //var_dump($deploymentService->getList($deploymentRequest));
        //var_dump($deploymentService->getList());
    }

    public function testGetListCount()
    {
        $deploymentService = new DeploymentService('http://localhost:8080/engine-rest/');
        //$deploymentRequest = new DeploymentRequest();
        //$deploymentRequest->set('id', 'e1a85d53-b3cb-11e7-93a5-005056c00008');
        //var_dump($deploymentService->getList($deploymentRequest));
        //var_dump($deploymentService->getListCount());
    }

    public function testGetById()
    {
        $deploymentService = new DeploymentService('http://localhost:8080/engine-rest/');
        //$deploymentRequest = new DeploymentRequest();
        //$deploymentRequest->set('id', 'e1a85d53-b3cb-11e7-93a5-005056c00008');
        //var_dump($deploymentService->getList($deploymentRequest));
        //var_dump($deploymentService->getById('e1a85d53-b3cb-11e7-93a5-005056c00008'));
    }

    public function testCreate()
    {
        $deploymentService = new DeploymentService('http://localhost:8080/engine-rest/');

        $files = new FileCollection();

        $files->addFile('power35', file_get_contents('./testProcess.bpmn'), 'testProcess.bpmn');
        //$files->addFile('start', file_get_contents("./startForm.form"), 'startForm.form');

        $deploymentRequest = new DeploymentRequest();
        $deploymentRequest->set('deployment-name', '测试')
            ->set('files', $files);
        var_dump($deploymentService->create($deploymentRequest));
    }

    public function testDelete()
    {
        $deploymentService = new DeploymentService('http://localhost:8080/engine-rest/');

        echo $deploymentService->deleteById('1c9fe521-b563-11e7-bf57-005056c00008');
    }
}
