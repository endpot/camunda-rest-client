<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:59
 */

namespace Camunda\Service;

use Camunda\Entity\Request\ModificationRequest;

class ModificationService extends BasicService
{
    public function executeModify(ModificationRequest $modificationRequest)
    {
        $this->setRequestUrl('/modification/execute')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($modificationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function executeAsyncModify(ModificationRequest $modificationRequest)
    {
        $this->setRequestUrl('/modification/executeAsync')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($modificationRequest)
            ->run();

        return $this->getResponseContents();
    }
}
