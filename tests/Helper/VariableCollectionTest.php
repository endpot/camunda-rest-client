<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:17
 */

use Camunda\Helper\VariableCollection;

class VariableCollectionTest extends \PHPUnit\Framework\TestCase
{
    public function testAddVariable()
    {
        $target = [
            'aVariable' => [
                'value' => 'aStringValue'
            ],
            'anotherVariable' => [
                'value' => 42
            ],
            'aThirdVariable' => [
                'value' => true
            ],
            'aFileVariable' => [
                'value' => 'TG9yZW0gaXBzdW0=',
                'type' => 'File',
                'valueInfo' => [
                    'filename' => 'myFile.txt'
                ]
            ]
        ];
        $vc = new VariableCollection();
        $vc->addVariable('aVariable', 'aStringValue')
            ->addVariable('anotherVariable', 42)
            ->addVariable('aThirdVariable', true)
            ->addVariable('aFileVariable', 'TG9yZW0gaXBzdW0=', 'File', ['filename' => 'myFile.txt']);

        $this->assertEquals($target, $vc->getVariables());
    }
}
