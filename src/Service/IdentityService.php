<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:49
 */

namespace Camunda\Service;

use Camunda\Entity\Request\IdentityRequest;

class IdentityService extends BasicService
{
    public function getGroups(IdentityRequest $identityRequest = null)
    {
        $this->setRequestUrl('/identity/groups')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($identityRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function verifyUser(IdentityRequest $identityRequest = null)
    {
        $this->setRequestUrl('/identity/verify')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($identityRequest)
            ->run();

        return $this->getResponseContents();
    }
}