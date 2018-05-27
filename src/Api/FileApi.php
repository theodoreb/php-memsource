<?php
/**
 * FileApi
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
 * FileApi Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileApi
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
     * Operation createUrlFile
     *
     * Upload file
     *
     * @param  \Memsource\Model\RemoteUploadedFileDto $body file (required)
     * @param  string $contentDisposition contentDisposition (optional)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Memsource\Model\UploadedFileDto
     */
    public function createUrlFile($body, $contentDisposition = null)
    {
        list($response) = $this->createUrlFileWithHttpInfo($body, $contentDisposition);
        return $response;
    }

    /**
     * Operation createUrlFileWithHttpInfo
     *
     * Upload file
     *
     * @param  \Memsource\Model\RemoteUploadedFileDto $body file (required)
     * @param  string $contentDisposition (optional)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Memsource\Model\UploadedFileDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUrlFileWithHttpInfo($body, $contentDisposition = null)
    {
        $returnType = '\Memsource\Model\UploadedFileDto';
        $request = $this->createUrlFileRequest($body, $contentDisposition);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Memsource\Model\UploadedFileDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createUrlFileAsync
     *
     * Upload file
     *
     * @param  \Memsource\Model\RemoteUploadedFileDto $body file (required)
     * @param  string $contentDisposition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUrlFileAsync($body, $contentDisposition = null)
    {
        return $this->createUrlFileAsyncWithHttpInfo($body, $contentDisposition)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createUrlFileAsyncWithHttpInfo
     *
     * Upload file
     *
     * @param  \Memsource\Model\RemoteUploadedFileDto $body file (required)
     * @param  string $contentDisposition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUrlFileAsyncWithHttpInfo($body, $contentDisposition = null)
    {
        $returnType = '\Memsource\Model\UploadedFileDto';
        $request = $this->createUrlFileRequest($body, $contentDisposition);

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
     * Create request for operation 'createUrlFile'
     *
     * @param  \Memsource\Model\RemoteUploadedFileDto $body file (required)
     * @param  string $contentDisposition (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createUrlFileRequest($body, $contentDisposition = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createUrlFile'
            );
        }
        if ($contentDisposition !== null && !preg_match("/filename\\*=UTF-8''(.+)/", $contentDisposition)) {
            throw new \InvalidArgumentException("invalid value for \"contentDisposition\" when calling FileApi.createUrlFile, must conform to the pattern /filename\\*=UTF-8''(.+)/.");
        }


        $resourcePath = '/api2/v1/files';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($contentDisposition !== null) {
            $headerParams['Content-Disposition'] = ObjectSerializer::toHeaderValue($contentDisposition);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'application/octet-stream', 'multipart/form-data']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deletesFile
     *
     * Delete file
     *
     * @param  string $fileUid fileUid (required)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletesFile($fileUid)
    {
        $this->deletesFileWithHttpInfo($fileUid);
    }

    /**
     * Operation deletesFileWithHttpInfo
     *
     * Delete file
     *
     * @param  string $fileUid (required)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletesFileWithHttpInfo($fileUid)
    {
        $returnType = '';
        $request = $this->deletesFileRequest($fileUid);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deletesFileAsync
     *
     * Delete file
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletesFileAsync($fileUid)
    {
        return $this->deletesFileAsyncWithHttpInfo($fileUid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletesFileAsyncWithHttpInfo
     *
     * Delete file
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletesFileAsyncWithHttpInfo($fileUid)
    {
        $returnType = '';
        $request = $this->deletesFileRequest($fileUid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deletesFile'
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletesFileRequest($fileUid)
    {
        // verify the required parameter 'fileUid' is set
        if ($fileUid === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fileUid when calling deletesFile'
            );
        }

        $resourcePath = '/api2/v1/files/{fileUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($fileUid !== null) {
            $resourcePath = str_replace(
                '{' . 'fileUid' . '}',
                ObjectSerializer::toPathValue($fileUid),
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
                ['application/json']
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFileJson
     *
     * Get file
     *
     * @param  string $fileUid fileUid (required)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Memsource\Model\UploadedFileDto
     */
    public function getFileJson($fileUid)
    {
        list($response) = $this->getFileJsonWithHttpInfo($fileUid);
        return $response;
    }

    /**
     * Operation getFileJsonWithHttpInfo
     *
     * Get file
     *
     * @param  string $fileUid (required)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Memsource\Model\UploadedFileDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileJsonWithHttpInfo($fileUid)
    {
        $returnType = '\Memsource\Model\UploadedFileDto';
        $request = $this->getFileJsonRequest($fileUid);

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
                        '\Memsource\Model\UploadedFileDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFileJsonAsync
     *
     * Get file
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileJsonAsync($fileUid)
    {
        return $this->getFileJsonAsyncWithHttpInfo($fileUid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFileJsonAsyncWithHttpInfo
     *
     * Get file
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileJsonAsyncWithHttpInfo($fileUid)
    {
        $returnType = '\Memsource\Model\UploadedFileDto';
        $request = $this->getFileJsonRequest($fileUid);

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
     * Create request for operation 'getFileJson'
     *
     * @param  string $fileUid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFileJsonRequest($fileUid)
    {
        // verify the required parameter 'fileUid' is set
        if ($fileUid === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fileUid when calling getFileJson'
            );
        }

        $resourcePath = '/api2/v1/files/{fileUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($fileUid !== null) {
            $resourcePath = str_replace(
                '{' . 'fileUid' . '}',
                ObjectSerializer::toPathValue($fileUid),
                $resourcePath
            );
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
     * Operation getFiles
     *
     * List files
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     * @param  string $name name (optional)
     * @param  string[] $types types (optional)
     * @param  int $createdBy createdBy (optional)
     * @param  int $biggerThan Size in bytes (optional)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Memsource\Model\PageDtoUploadedFileDto
     */
    public function getFiles($pageNumber = '0', $pageSize = '50', $name = null, $types = null, $createdBy = null, $biggerThan = null)
    {
        list($response) = $this->getFilesWithHttpInfo($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan);
        return $response;
    }

    /**
     * Operation getFilesWithHttpInfo
     *
     * List files
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     * @param  string $name (optional)
     * @param  string[] $types (optional)
     * @param  int $createdBy (optional)
     * @param  int $biggerThan Size in bytes (optional)
     *
     * @throws \Memsource\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Memsource\Model\PageDtoUploadedFileDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFilesWithHttpInfo($pageNumber = '0', $pageSize = '50', $name = null, $types = null, $createdBy = null, $biggerThan = null)
    {
        $returnType = '\Memsource\Model\PageDtoUploadedFileDto';
        $request = $this->getFilesRequest($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan);

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
                        '\Memsource\Model\PageDtoUploadedFileDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFilesAsync
     *
     * List files
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     * @param  string $name (optional)
     * @param  string[] $types (optional)
     * @param  int $createdBy (optional)
     * @param  int $biggerThan Size in bytes (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesAsync($pageNumber = '0', $pageSize = '50', $name = null, $types = null, $createdBy = null, $biggerThan = null)
    {
        return $this->getFilesAsyncWithHttpInfo($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFilesAsyncWithHttpInfo
     *
     * List files
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     * @param  string $name (optional)
     * @param  string[] $types (optional)
     * @param  int $createdBy (optional)
     * @param  int $biggerThan Size in bytes (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesAsyncWithHttpInfo($pageNumber = '0', $pageSize = '50', $name = null, $types = null, $createdBy = null, $biggerThan = null)
    {
        $returnType = '\Memsource\Model\PageDtoUploadedFileDto';
        $request = $this->getFilesRequest($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan);

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
     * Create request for operation 'getFiles'
     *
     * @param  int $pageNumber Page number, starting with 0, default 0 (optional, default to 0)
     * @param  int $pageSize Page size, accepts values between 1 and 50, default 50 (optional, default to 50)
     * @param  string $name (optional)
     * @param  string[] $types (optional)
     * @param  int $createdBy (optional)
     * @param  int $biggerThan Size in bytes (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFilesRequest($pageNumber = '0', $pageSize = '50', $name = null, $types = null, $createdBy = null, $biggerThan = null)
    {
        if ($pageNumber !== null && $pageNumber < 0) {
            throw new \InvalidArgumentException('invalid value for "$pageNumber" when calling FileApi.getFiles, must be bigger than or equal to 0.');
        }

        if ($pageSize !== null && $pageSize > 50) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling FileApi.getFiles, must be smaller than or equal to 50.');
        }
        if ($pageSize !== null && $pageSize < 1) {
            throw new \InvalidArgumentException('invalid value for "$pageSize" when calling FileApi.getFiles, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api2/v1/files';
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
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if (is_array($types)) {
            $types = ObjectSerializer::serializeCollection($types, 'multi', true);
        }
        if ($types !== null) {
            $queryParams['types'] = ObjectSerializer::toQueryValue($types);
        }
        // query params
        if ($createdBy !== null) {
            $queryParams['createdBy'] = ObjectSerializer::toQueryValue($createdBy);
        }
        // query params
        if ($biggerThan !== null) {
            $queryParams['biggerThan'] = ObjectSerializer::toQueryValue($biggerThan);
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