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
use GuzzleHttp\Psr7\Response;

/**
 * Class BasicService
 * @package Camunda\Service
 */
class BasicService
{
    /**
     * @var string url of camunda rest engine
     */
    private $restApiUrl;

    /**
     * @var string url of specific operation for specific resource
     */

    private $requestUrl;

    /**
     * @var string request method (GET/POST/PUT/DELETE/OPTIONS/...)
     */
    private $requestMethod = 'GET';

    /**
     * @var string indicates whether the parameters are appended in url or as json body or form/multipart (query/json/multipart)
     */
    private $requestContentType = 'query';

    /**
     * @var BasicRequest request entity that contains necessary properties
     */
    private $requestObject;

    /**
     * @var int response code
     */
    private $responseCode;

    /**
     * @var mixed response contents (string or object)
     */
    private $responseContents;

    /**
     * BasicService constructor.
     *
     * @param string $restApiUrl url of camunda rest engine
     */
    public function __construct($restApiUrl = '')
    {
        $this->restApiUrl = rtrim(trim($restApiUrl), '/');
    }

    /**
     * set request url.
     *
     * @param $requestUrl
     * @return $this
     */
    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    /**
     * get request url.
     *
     * @return mixed
     */
    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * set request method.
     *
     * @param string $requestMethod
     * @return $this
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = strtoupper($requestMethod);
        return $this;
    }

    /**
     * get request method.
     *
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * set request content type.
     *
     * @param string $requestContentType (query/json/multipart)
     * @return $this
     */
    public function setRequestContentType($requestContentType)
    {
        $requestContentType = strtolower($requestContentType);
        if (in_array($requestContentType, ['query', 'json', 'multipart'])) {
            $this->requestContentType = $requestContentType;
        }
        return $this;
    }

    /**
     * get request content type.
     *
     * @return string
     */
    public function getRequestContentType()
    {
        return $this->requestContentType;
    }

    /**
     * set request object.
     *
     * @param BasicRequest $requestObject
     * @return $this
     */
    public function setRequestObject($requestObject)
    {
        $this->requestObject = $requestObject;
        return $this;
    }

    /**
     * get request object.
     *
     * @return BasicRequest
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * get response code.
     *
     * @return int response code
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * get response contents..
     *
     * @return mixed
     */
    public function getResponseContents()
    {
        return $this->responseContents;
    }

    /**
     * run this service and get response from camunda engine.
     *
     * @param bool $HAL whether use HAL or not
     * @return $this
     */
    public function run($HAL = false)
    {
        $object = ($this->requestObject instanceof BasicRequest) ? $this->requestObject->getObject() : [];
        $body = [];
        $option = [];

        // if HAL, add header
        if ($HAL) {
            $option['headers']['Accept'] = 'application/hal+json';
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

        // when json body is empty, add content-type
        if (empty($body) && $this->requestContentType == 'json') {
            $option['headers']['Content-Type'] = 'application/json';
        } else {
            $option[$this->requestContentType] = $body;
        }

        $client = new Client();
        try {
            $response = $client->request($this->requestMethod, $this->restApiUrl . $this->requestUrl, $option);
        } catch (RequestException $requestException) {
            $response = $requestException->getResponse();
        }

        if ($response instanceof Response) {
            $this->responseCode = $response->getStatusCode();
            $this->responseContents = $response->getBody()->getContents();

            if (in_array('application/json', $response->getHeader('Content-Type')) || in_array('application/hal+json', $response->getHeader('Content-Type'))) {
                $this->responseContents = json_decode($this->responseContents, false);
            }
        } else {
            $this->responseCode = '';
            $this->responseContents = '';
        }

        return $this;
    }

    /**
     * reset service settings.
     *
     * @return $this
     */
    public function reset()
    {
        $this->requestUrl = '';
        $this->requestMethod = 'GET';
        $this->requestContentType = 'JSON';
        $this->requestObject = null;

        return $this;
    }
}
