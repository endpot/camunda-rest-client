<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:15
 */

use Camunda\Service\BasicService;
use Camunda\Entity\Request\BasicRequest;

class BasicServiceTest extends PHPUnit_Framework_TestCase
{
    public function testSet()
    {
        $basicRequest = new BasicRequest();

        $basic = new BasicService();
        $basic->setRequestUrl('/deployment');
        $basic->setRequestContentType('json');
        $basic->setRequestMethod('get');
        $basic->setRequestObject($basicRequest);

        $this->assertEquals('/deployment', $basic->getRequestUrl());
        $this->assertEquals('json', $basic->getRequestContentType());
        $this->assertEquals('GET', $basic->getRequestMethod());
        $this->assertEquals($basicRequest, $basic->getRequestObject());
    }
}
