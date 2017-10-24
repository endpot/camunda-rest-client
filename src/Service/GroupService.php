<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 10:31
 */

namespace Camunda\Service;

use Camunda\Entity\Request\GroupRequest;

class GroupService extends BasicService
{
    public function createGroupMember($groupId, $userId)
    {
        $this->setRequestUrl('/group/' . $groupId . '/members/' . $userId)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JQUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function deleteGroupMember($groupId, $userId)
    {
        $this->setRequestUrl('/group/' . $groupId . '/members/' . $userId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('JQUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function groupMemberOptions($groupId)
    {
        $this->setRequestUrl('/group/' . $groupId . '/members/')
            ->setRequestMethod('OPTIONS')
            ->setRequestContentType('JQUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function getList(GroupRequest $groupRequest = null)
    {
        $this->setRequestUrl('/group')
            ->setRequestMethod('GET')
            ->setRequestContentType('JQUERY')
            ->setRequestObject($groupRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getListCount(GroupRequest $groupRequest = null)
    {
        $this->setRequestUrl('/group/count')
            ->setRequestMethod('GET')
            ->setRequestContentType('JQUERY')
            ->setRequestObject($groupRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($groupId)
    {
        $this->setRequestUrl('/group/' . $groupId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function create(GroupRequest $groupRequest = null)
    {
        $this->setRequestUrl('/group/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($groupRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function update($groupId, GroupRequest $groupRequest = null)
    {
        $this->setRequestUrl('/group/' . $groupId)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($groupRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function options($groupId)
    {
        $this->setRequestUrl('/group/' . $groupId)
            ->setRequestMethod('OPTIONS')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function delete($groupId)
    {
        $this->setRequestUrl('/group/' . $groupId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}