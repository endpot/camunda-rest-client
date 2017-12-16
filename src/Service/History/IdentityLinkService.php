<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author xuansw
 * @date 2017/12/16
 * @since 2017/12/16 description
 */

namespace Camunda\Service\History;

use Camunda\Service\BasicService;
use Camunda\Entity\Request\History\IdentityLinkRequest;

class IdentityLinkService extends BasicService
{
    public function getList(IdentityLinkRequest $identityRequest = null)
    {
        $this->setRequestUrl('/history/identity-link-log')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($identityRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(IdentityLinkRequest $identityRequest = null)
    {
        $this->setRequestUrl('/history/identity-link-log/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($identityRequest)
            ->run();

        return $this->getResponseContents();
    }
}
