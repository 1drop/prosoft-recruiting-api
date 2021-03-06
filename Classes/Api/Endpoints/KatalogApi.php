<?php
/**
 * KatalogApi
 * PHP version 5
 *
 * @category Class
 * @package  Prosoft\RecruitingApi\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * prosoftrecruiting API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.3
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace Prosoft\RecruitingApi\Api\Endpoints;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Prosoft\RecruitingApi\Api\ApiException;
use Prosoft\RecruitingApi\Api\Configuration;
use Prosoft\RecruitingApi\Api\HeaderSelector;
use Prosoft\RecruitingApi\Api\ObjectSerializer;

/**
 * KatalogApi Class Doc Comment
 *
 * @category Class
 * @package  Prosoft\RecruitingApi\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KatalogApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

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
     * Operation apiPublicV1KatalogGetByRelationNameGet
     *
     * Gibt Einträge und die Anzahl der Einträge aus Katalogen zurück.  Diese können als Optionen für Auswahllisten
     * z.B. im Bewerberformular verwendet werden.
     *
     * @param string $entity_name       Name der Entität, die die Relation enthält, für die Lookup-Einträge
     *                                  zurückgegeben werden sollen (optional)
     * @param string $relation_name     Name der Relation, für die Lookup-Einträge zurückgegeben werden sollen
     *                                  (optional)
     * @param string $name_property     Name der Property, deren Wert als Bezeichnung verwendet werden soll (optional)
     * @param string $search_text       Text, der in der Bezeichnung enthalten sein soll (optional)
     * @param bool   $ignore_selectable true, wenn auch die veralteten Einträge zurückgegeben werden sollen, sonst
     *                                  false (optional)
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException                     on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Prosoft\RecruitingApi\Api\Dto\PaginationResultDtoLookupDto
     */
    public function apiPublicV1KatalogGetByRelationNameGet(
        $entity_name = null,
        $relation_name = null,
        $name_property = null,
        $search_text = null,
        $ignore_selectable = null
    ) {
        list($response) = $this->apiPublicV1KatalogGetByRelationNameGetWithHttpInfo(
            $entity_name,
            $relation_name,
            $name_property,
            $search_text,
            $ignore_selectable
        );
        return $response;
    }

    /**
     * Operation apiPublicV1KatalogGetByRelationNameGetWithHttpInfo
     *
     * Gibt Einträge und die Anzahl der Einträge aus Katalogen zurück.  Diese können als Optionen für Auswahllisten
     * z.B. im Bewerberformular verwendet werden.
     *
     * @param string $entity_name       Name der Entität, die die Relation enthält, für die Lookup-Einträge
     *                                  zurückgegeben werden sollen (optional)
     * @param string $relation_name     Name der Relation, für die Lookup-Einträge zurückgegeben werden sollen
     *                                  (optional)
     * @param string $name_property     Name der Property, deren Wert als Bezeichnung verwendet werden soll (optional)
     * @param string $search_text       Text, der in der Bezeichnung enthalten sein soll (optional)
     * @param bool   $ignore_selectable true, wenn auch die veralteten Einträge zurückgegeben werden sollen, sonst
     *                                  false (optional)
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array                                   of \Prosoft\RecruitingApi\Api\Dto\PaginationResultDtoLookupDto,
     *                                                 HTTP status code, HTTP response headers (array of strings)
     */
    public function apiPublicV1KatalogGetByRelationNameGetWithHttpInfo(
        $entity_name = null,
        $relation_name = null,
        $name_property = null,
        $search_text = null,
        $ignore_selectable = null
    ) {
        $returnType = '\Prosoft\RecruitingApi\Api\Dto\PaginationResultDtoLookupDto';
        $request = $this->apiPublicV1KatalogGetByRelationNameGetRequest(
            $entity_name,
            $relation_name,
            $name_property,
            $search_text,
            $ignore_selectable
        );

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
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\Prosoft\RecruitingApi\Api\Dto\PaginationResultDtoLookupDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiPublicV1KatalogGetByRelationNameGetAsync
     *
     * Gibt Einträge und die Anzahl der Einträge aus Katalogen zurück.  Diese können als Optionen für Auswahllisten
     * z.B. im Bewerberformular verwendet werden.
     *
     * @param string $entity_name       Name der Entität, die die Relation enthält, für die Lookup-Einträge
     *                                  zurückgegeben werden sollen (optional)
     * @param string $relation_name     Name der Relation, für die Lookup-Einträge zurückgegeben werden sollen
     *                                  (optional)
     * @param string $name_property     Name der Property, deren Wert als Bezeichnung verwendet werden soll (optional)
     * @param string $search_text       Text, der in der Bezeichnung enthalten sein soll (optional)
     * @param bool   $ignore_selectable true, wenn auch die veralteten Einträge zurückgegeben werden sollen, sonst
     *                                  false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1KatalogGetByRelationNameGetAsync(
        $entity_name = null,
        $relation_name = null,
        $name_property = null,
        $search_text = null,
        $ignore_selectable = null
    ) {
        return $this->apiPublicV1KatalogGetByRelationNameGetAsyncWithHttpInfo(
            $entity_name,
            $relation_name,
            $name_property,
            $search_text,
            $ignore_selectable
        )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiPublicV1KatalogGetByRelationNameGetAsyncWithHttpInfo
     *
     * Gibt Einträge und die Anzahl der Einträge aus Katalogen zurück.  Diese können als Optionen für Auswahllisten
     * z.B. im Bewerberformular verwendet werden.
     *
     * @param string $entity_name       Name der Entität, die die Relation enthält, für die Lookup-Einträge
     *                                  zurückgegeben werden sollen (optional)
     * @param string $relation_name     Name der Relation, für die Lookup-Einträge zurückgegeben werden sollen
     *                                  (optional)
     * @param string $name_property     Name der Property, deren Wert als Bezeichnung verwendet werden soll (optional)
     * @param string $search_text       Text, der in der Bezeichnung enthalten sein soll (optional)
     * @param bool   $ignore_selectable true, wenn auch die veralteten Einträge zurückgegeben werden sollen, sonst
     *                                  false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1KatalogGetByRelationNameGetAsyncWithHttpInfo(
        $entity_name = null,
        $relation_name = null,
        $name_property = null,
        $search_text = null,
        $ignore_selectable = null
    ) {
        $returnType = '\Prosoft\RecruitingApi\Api\Dto\PaginationResultDtoLookupDto';
        $request = $this->apiPublicV1KatalogGetByRelationNameGetRequest(
            $entity_name,
            $relation_name,
            $name_property,
            $search_text,
            $ignore_selectable
        );

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
                        $response->getHeaders(),
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
     * Create request for operation 'apiPublicV1KatalogGetByRelationNameGet'
     *
     * @param string $entity_name       Name der Entität, die die Relation enthält, für die Lookup-Einträge
     *                                  zurückgegeben werden sollen (optional)
     * @param string $relation_name     Name der Relation, für die Lookup-Einträge zurückgegeben werden sollen
     *                                  (optional)
     * @param string $name_property     Name der Property, deren Wert als Bezeichnung verwendet werden soll (optional)
     * @param string $search_text       Text, der in der Bezeichnung enthalten sein soll (optional)
     * @param bool   $ignore_selectable true, wenn auch die veralteten Einträge zurückgegeben werden sollen, sonst
     *                                  false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiPublicV1KatalogGetByRelationNameGetRequest(
        $entity_name = null,
        $relation_name = null,
        $name_property = null,
        $search_text = null,
        $ignore_selectable = null
    ) {
        $resourcePath = '/api/public/v1/Katalog/GetByRelationName';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($entity_name !== null) {
            $queryParams['entityName'] = ObjectSerializer::toQueryValue($entity_name);
        }
        // query params
        if ($relation_name !== null) {
            $queryParams['relationName'] = ObjectSerializer::toQueryValue($relation_name);
        }
        // query params
        if ($name_property !== null) {
            $queryParams['nameProperty'] = ObjectSerializer::toQueryValue($name_property);
        }
        // query params
        if ($search_text !== null) {
            $queryParams['searchText'] = ObjectSerializer::toQueryValue($search_text);
        }
        // query params
        if ($ignore_selectable !== null) {
            $queryParams['ignoreSelectable'] = ObjectSerializer::toQueryValue($ignore_selectable);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
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
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
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
     * @return array             of http client options
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
