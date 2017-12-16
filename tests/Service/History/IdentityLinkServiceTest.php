<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/12/16
 * Time: 13:52
 */

namespace Camunda\Service\History;

use Camunda\Entity\Request\History\IdentityLinkRequest;

class IdentityLinkServiceTest extends \PHPUnit_Framework_TestCase
{
    const CAMUNDA_REST_HOST = 'http://localhost:8080/engine-rest';

    public function testGetList()
    {
        $identityLinkRequest = new IdentityLinkRequest();
        $identityLinkService = new IdentityLinkService(self::CAMUNDA_REST_HOST);
        $identityLinkRequest->set('type', 'assignee')
            ->set('taskId', 'ff3e4da2-e191-11e7-a72e-005056c00008');

        $result = $identityLinkService->getList($identityLinkRequest);
        var_dump($result);
    }

    public function testGetListCount()
    {
        $identityLinkRequest = new IdentityLinkRequest();
        $identityLinkService = new IdentityLinkService(self::CAMUNDA_REST_HOST);
        $identityLinkRequest->set('type', 'assignee')
            ->set('taskId', 'ff3e4da2-e191-11e7-a72e-005056c00008');

        $result = $identityLinkService->getListCount($identityLinkRequest);
        var_dump($result);
    }
}
