<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 14:09
 */

namespace Camunda\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Camunda\Helper\FileCollection;
use Camunda\Helper\VariableCollection;
use Camunda\Entity\Request\BasicRequest;

class BasicService
{
    private $restApiUrl;
    private $requestUrl;
    private $requestMethod = 'GET';
    private $requestContentType = 'QUERY';
    private $requestObject;

    private $responseCode;
    private $responseContents;

    public function __construct($restApiUrl = '')
    {
        $this->restApiUrl = rtrim(trim($restApiUrl), '/');
    }

    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = strtoupper($requestMethod);
        return $this;
    }

    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    public function setRequestContentType($requestContentType)
    {
        $requestContentType = strtolower($requestContentType);
        if (in_array($requestContentType, ['query', 'json', 'multipart'])) {
            $this->requestContentType = $requestContentType;
        }
        return $this;
    }

    public function getRequestContentType()
    {
        return $this->requestContentType;
    }

    public function setRequestObject($requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }

    public function getRequestObject()
    {
        return $this->requestObject;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function getResponseContents()
    {
        return $this->responseContents;
    }

    public function run($HAL = false)
    {
        $object = ($this->requestObject instanceof BasicRequest) ? $this->requestObject->getObject() : [];
        $body = [];
        $option = [];

        if ($HAL) {
            $option['headers'] = ['Accept' => 'application/hal+json'];
        }

        if ($object) {
            if ($this->requestContentType == 'multipart') {
                foreach ($object as $key => $value) {
                    if ($value instanceof VariableCollection) {
                        array_push($body, [
                            'name' => $key,
                            'contents' => json_encode($value->getVariables())
                        ]);
                    } elseif ($value instanceof FileCollection) {
                        $body = array_merge($body, $value->getFiles());
                    } else {
                        array_push($body, [
                            'name' => $key,
                            'contents' => $value
                        ]);
                    }
                }
            } else {
                foreach ($object as $key => $value) {
                    if ($value instanceof VariableCollection) {
                        $body[$key] = $value->getVariables();
                    } elseif ($value instanceof FileCollection) {
                        $files = $value->getFiles();
                        foreach ($files as $file) {
                            $body[$file['name']] = $file;
                        }
                    } else {
                        $body[$key] = $value;
                    }
                }
            }
        }

        $option[$this->requestContentType] = $body;

        $client = new Client();
        try {
            $response = $client->request($this->requestMethod, $this->restApiUrl . $this->requestUrl, $option);
        } catch (RequestException $requestException) {
            $response = $requestException->getResponse();
        }

        $this->responseCode = $response->getStatusCode();
        $this->responseContents = $response->getBody()->getContents();

        if (in_array('application/json', $response->getHeader('Content-Type')) || in_array('application/hal+json', $response->getHeader('Content-Type'))) {
            $this->responseContents = json_decode($this->responseContents, true);
        }

        return $this;
    }

    public function reset()
    {
        $this->requestUrl = '';
        $this->requestMethod = 'GET';
        $this->requestContentType = 'JSON';
        $this->requestObject = null;

        return $this;
    }
}
