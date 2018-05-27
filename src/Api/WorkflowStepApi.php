<?php
/**
 * WorkflowStepApi
 * PHP version 5
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Memsource REST API
 *
 * Welcome to Memsource's API documentation. To view our legacy APIs please [visit our documentation](https://wiki.memsource.com/wiki/Memsource_API) and for more information about our new APIs, [visit our blog](https://www.memsource.com/blog/2017/10/24/introducing-rest-apis-qa-with-the-memsource-api-team/).    If you have any questions, please contact [Memsource Support](<mailto:support@memsource.com>).
 *
 * OpenAPI spec version: All
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Memsource\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Memsource\ApiException;
use Memsource\Configuration;
use Memsource\HeaderSelector;
use Memsource\ObjectSerializer;

/**
 * WorkflowStepApi Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkflowStepApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listWFSteps
     *
     * List workflow steps
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Memsource\Model\PageDtoWorkflowStepDto
     */
    public function listWFSteps($pageNumber = '0', $pageSize = '50')
    {
        list($response) = $this->listWFStepsWithHttpInfo($pageNumber, $pageSize);
        return $response;
    }

    /**
     * Operation listWFStepsWithHttpInfo
     *
     * List workflow steps
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Memsource\Model\PageDtoWorkflowStepDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWFStepsWithHttpInfo($pageNumber = '0', $pageSize = '50')
    {
        $returnType = '\Memsource\Model\PageDtoWorkflowStepDto';
        $request = $this->listWFStepsRequest($pageNumber, $pageSize);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Memsource\Model\PageDtoWorkflowStepDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWFStepsAsync
     *
     * List workflow steps
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWFStepsAsync($pageNumber = '0', $pageSize = '50')
    {
        return $this->listWFStepsAsyncWithHttpInfo($pageNumber, $pageSize)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWFStepsAsyncWithHttpInfo
     *
     * List workflow steps
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWFStepsAsyncWithHttpInfo($pageNumber = '0', $pageSize = '50')
    {
        $returnType = '\Memsource\Model\PageDtoWorkflowStepDto';
        $request = $this->listWFStepsRequest($pageNumber, $pageSize);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listWFSteps'
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listWFStepsRequest($pageNumber = '0', $pageSize = '50')
    {
        if ($pageNumber !== null && $pageNumber < 0) {
            throw new \InvalidArgumentException('invalid value for "$pageNumber" when calling WorkflowStepApi.listWFSteps, must be bigger than or equal to 0.');
        }

        if ($pageSize !== null && $pageSize > 50) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling WorkflowStepApi.listWFSteps, must be smaller than or equal to 50.');
        }
        if ($pageSize !== null && $pageSize < 1) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling WorkflowStepApi.listWFSteps, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api2/v1/workflowSteps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pageNumber !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($pageNumber);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($pageSize);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listWorkflowSteps
     *
     * List assigned workflow steps
     *
     * @param  int $userId userId (required)
     * @param  string[] $status status (optional)
     * @param  string $projectUid projectUid (optional)
     * @param  string[] $targetLang targetLang (optional)
     * @param  int $dueInHours -1 for jobs that are overdue (optional)
     * @param  string $filename filename (optional)
     * @param  int $pageNumber pageNumber (optional, default to 0)
     * @param  int $pageSize pageSize (optional, default to 50)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Memsource\Model\PageDtoWorkflowStepReference
     */
    public function listWorkflowSteps($userId, $status = null, $projectUid = null, $targetLang = null, $dueInHours = null, $filename = null, $pageNumber = '0', $pageSize = '50')
    {
        list($response) = $this->listWorkflowStepsWithHttpInfo($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize);
        return $response;
    }

    /**
     * Operation listWorkflowStepsWithHttpInfo
     *
     * List assigned workflow steps
     *
     * @param  int $userId (required)
     * @param  string[] $status (optional)
     * @param  string $projectUid (optional)
     * @param  string[] $targetLang (optional)
     * @param  int $dueInHours -1 for jobs that are overdue (optional)
     * @param  string $filename (optional)
     * @param  int $pageNumber (optional, default to 0)
     * @param  int $pageSize (optional, default to 50)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Memsource\Model\PageDtoWorkflowStepReference, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWorkflowStepsWithHttpInfo($userId, $status = null, $projectUid = null, $targetLang = null, $dueInHours = null, $filename = null, $pageNumber = '0', $pageSize = '50')
    {
        $returnType = '\Memsource\Model\PageDtoWorkflowStepReference';
        $request = $this->listWorkflowStepsRequest($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Memsource\Model\PageDtoWorkflowStepReference',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWorkflowStepsAsync
     *
     * List assigned workflow steps
     *
     * @param  int $userId (required)
     * @param  string[] $status (optional)
     * @param  string $projectUid (optional)
     * @param  string[] $targetLang (optional)
     * @param  int $dueInHours -1 for jobs that are overdue (optional)
     * @param  string $filename (optional)
     * @param  int $pageNumber (optional, default to 0)
     * @param  int $pageSize (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWorkflowStepsAsync($userId, $status = null, $projectUid = null, $targetLang = null, $dueInHours = null, $filename = null, $pageNumber = '0', $pageSize = '50')
    {
        return $this->listWorkflowStepsAsyncWithHttpInfo($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWorkflowStepsAsyncWithHttpInfo
     *
     * List assigned workflow steps
     *
     * @param  int $userId (required)
     * @param  string[] $status (optional)
     * @param  string $projectUid (optional)
     * @param  string[] $targetLang (optional)
     * @param  int $dueInHours -1 for jobs that are overdue (optional)
     * @param  string $filename (optional)
     * @param  int $pageNumber (optional, default to 0)
     * @param  int $pageSize (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWorkflowStepsAsyncWithHttpInfo($userId, $status = null, $projectUid = null, $targetLang = null, $dueInHours = null, $filename = null, $pageNumber = '0', $pageSize = '50')
    {
        $returnType = '\Memsource\Model\PageDtoWorkflowStepReference';
        $request = $this->listWorkflowStepsRequest($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listWorkflowSteps'
     *
     * @param  int $userId (required)
     * @param  string[] $status (optional)
     * @param  string $projectUid (optional)
     * @param  string[] $targetLang (optional)
     * @param  int $dueInHours -1 for jobs that are overdue (optional)
     * @param  string $filename (optional)
     * @param  int $pageNumber (optional, default to 0)
     * @param  int $pageSize (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listWorkflowStepsRequest($userId, $status = null, $projectUid = null, $targetLang = null, $dueInHours = null, $filename = null, $pageNumber = '0', $pageSize = '50')
    {
        // verify the required parameter 'userId' is set
        if ($userId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userId when calling listWorkflowSteps'
            );
        }
        if ($dueInHours !== null && $dueInHours < -1) {
            throw new \InvalidArgumentException('invalid value for "$dueInHours" when calling WorkflowStepApi.listWorkflowSteps, must be bigger than or equal to -1.');
        }

        if ($pageNumber !== null && $pageNumber < 0) {
            throw new \InvalidArgumentException('invalid value for "$pageNumber" when calling WorkflowStepApi.listWorkflowSteps, must be bigger than or equal to 0.');
        }

        if ($pageSize !== null && $pageSize > 50) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling WorkflowStepApi.listWorkflowSteps, must be smaller than or equal to 50.');
        }
        if ($pageSize !== null && $pageSize < 1) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling WorkflowStepApi.listWorkflowSteps, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api2/v1/users/{userId}/workflowSteps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($status)) {
            $status = ObjectSerializer::serializeCollection($status, 'multi', true);
        }
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($projectUid !== null) {
            $queryParams['projectUid'] = ObjectSerializer::toQueryValue($projectUid);
        }
        // query params
        if (is_array($targetLang)) {
            $targetLang = ObjectSerializer::serializeCollection($targetLang, 'multi', true);
        }
        if ($targetLang !== null) {
            $queryParams['targetLang'] = ObjectSerializer::toQueryValue($targetLang);
        }
        // query params
        if ($dueInHours !== null) {
            $queryParams['dueInHours'] = ObjectSerializer::toQueryValue($dueInHours);
        }
        // query params
        if ($filename !== null) {
            $queryParams['filename'] = ObjectSerializer::toQueryValue($filename);
        }
        // query params
        if ($pageNumber !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($pageNumber);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($pageSize);
        }

        // path params
        if ($userId !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($userId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
