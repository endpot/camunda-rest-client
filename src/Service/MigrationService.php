<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 14:44
 */

namespace Camunda\Service;

use Camunda\Entity\Request\MigrationRequest;

class MigrationService extends BasicService
{
    public function generate(MigrationRequest $migrationRequest = null)
    {
        $this->setRequestUrl('/migration/generate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($migrationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function validate(MigrationRequest $migrationRequest = null)
    {
        $this->setRequestUrl('/migration/validate')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($migrationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function execute(MigrationRequest $migrationRequest = null)
    {
        $this->setRequestUrl('/migration/execute')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($migrationRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function executeAsync(MigrationRequest $migrationRequest = null)
    {
        $this->setRequestUrl('/migration/executeAsync')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($migrationRequest)
            ->run();

        return $this->getResponseContents();
    }
}
