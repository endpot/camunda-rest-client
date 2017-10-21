<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:50
 */

namespace Camunda\Entity\Request;


class DeploymentRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testSet()
    {
        $target = [
            'id' => 'drId'
        ];

        $dr = new DeploymentRequest();
        $dr->set('id', 'drId')->set('bbb', 'bbb');
        var_dump($dr->getObject());
        $this->assertEquals($dr->getObject(), $target);
    }
}
