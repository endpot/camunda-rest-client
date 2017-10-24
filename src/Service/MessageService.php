<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:30
 */

namespace Camunda\Service;

use Camunda\Entity\Request\MessageRequest;

class MessageService extends BasicService
{
    public function correlate(MessageRequest $messageRequest = null)
    {
        $this->setRequestUrl('/message')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($messageRequest)
            ->run();

        return $this->getResponseContents();
    }
}
