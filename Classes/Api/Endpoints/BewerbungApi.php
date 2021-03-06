<?php
/**
 * BewerbungApi
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
 * BewerbungApi Class Doc Comment
 *
 * @category Class
 * @package  Prosoft\RecruitingApi\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BewerbungApi
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
     * Operation apiPublicV1BewerbungCreatePost
     *
     * Erstellt eine Online-Bewerbung in der prosoftrecruiting Inbox.  Header-Daten:  \"X-ApiKey\": \"ihrapikey\" - der
     * API-Key kann in prosoftrecruiting unter Einstellungen/API-Keys erstellt werden (Bereich: \"OpenStelle\")
     * \"Content-Type\": \"multipart/form-data\"
     *
     * @param string         $bewerbung   bewerbung (optional)
     * @param \SplFileObject $attachments attachments (optional)
     * @param string         $x_api_key   x_api_key (optional)
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiPublicV1BewerbungCreatePost($bewerbung = null, $attachments = null, $x_api_key = null)
    {
        $this->apiPublicV1BewerbungCreatePostWithHttpInfo($bewerbung, $attachments, $x_api_key);
    }

    /**
     * Operation apiPublicV1BewerbungCreatePostWithHttpInfo
     *
     * Erstellt eine Online-Bewerbung in der prosoftrecruiting Inbox.  Header-Daten:  \"X-ApiKey\": \"ihrapikey\" - der
     * API-Key kann in prosoftrecruiting unter Einstellungen/API-Keys erstellt werden (Bereich: \"OpenStelle\")
     * \"Content-Type\": \"multipart/form-data\"
     *
     * @param string         $bewerbung   (optional)
     * @param \SplFileObject $attachments (optional)
     * @param string         $x_api_key   (optional)
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array                                   of null, HTTP status code, HTTP response headers (array of
     *                                                 strings)
     */
    public function apiPublicV1BewerbungCreatePostWithHttpInfo(
        $bewerbung = null,
        $attachments = null,
        $x_api_key = null
    ) {
        $returnType = '';
        $request = $this->apiPublicV1BewerbungCreatePostRequest($bewerbung, $attachments, $x_api_key);

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
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiPublicV1BewerbungCreatePostAsync
     *
     * Erstellt eine Online-Bewerbung in der prosoftrecruiting Inbox.  Header-Daten:  \"X-ApiKey\": \"ihrapikey\" - der
     * API-Key kann in prosoftrecruiting unter Einstellungen/API-Keys erstellt werden (Bereich: \"OpenStelle\")
     * \"Content-Type\": \"multipart/form-data\"
     *
     * @param string         $bewerbung   (optional)
     * @param \SplFileObject $attachments (optional)
     * @param string         $x_api_key   (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1BewerbungCreatePostAsync($bewerbung = null, $attachments = null, $x_api_key = null)
    {
        return $this->apiPublicV1BewerbungCreatePostAsyncWithHttpInfo($bewerbung, $attachments, $x_api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiPublicV1BewerbungCreatePostAsyncWithHttpInfo
     *
     * Erstellt eine Online-Bewerbung in der prosoftrecruiting Inbox.  Header-Daten:  \"X-ApiKey\": \"ihrapikey\" - der
     * API-Key kann in prosoftrecruiting unter Einstellungen/API-Keys erstellt werden (Bereich: \"OpenStelle\")
     * \"Content-Type\": \"multipart/form-data\"
     *
     * @param string         $bewerbung   (optional)
     * @param \SplFileObject $attachments (optional)
     * @param string         $x_api_key   (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1BewerbungCreatePostAsyncWithHttpInfo(
        $bewerbung = null,
        $attachments = null,
        $x_api_key = null
    ) {
        $returnType = '';
        $request = $this->apiPublicV1BewerbungCreatePostRequest($bewerbung, $attachments, $x_api_key);

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
     * Create request for operation 'apiPublicV1BewerbungCreatePost'
     *
     * @param string         $bewerbung   (optional)
     * @param \SplFileObject $attachments (optional)
     * @param string         $x_api_key   (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiPublicV1BewerbungCreatePostRequest($bewerbung = null, $attachments = null, $x_api_key = null)
    {
        $resourcePath = '/api/public/v1/Bewerbung/Create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_api_key !== null) {
            $headerParams['X-ApiKey'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        // form params
        if ($bewerbung !== null) {
            $formParams['bewerbung'] = ObjectSerializer::toFormValue($bewerbung);
        }
        // form params
        if ($attachments !== null) {
            $multipart = true;
            $formParams['attachments'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($attachments), 'rb');
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
                ['multipart/form-data']
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
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-ApiKey');
        if ($apiKey !== null) {
            $headers['X-ApiKey'] = $apiKey;
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
     * Operation apiPublicV1BewerbungGetNeuanlageModelGet
     *
     * Gibt die Beschreibung des Objekts, das die Bewerberdaten enthält (für Bewerbung/Create) im JSON-Format als
     * Beispiel zurück.  Die Pflichtfelder sind in der Ansicht \"Model\" mit einem roten Stern markiert.  Nicht
     * benötigte Properties können weggelassen werden.
     *
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException                    on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Prosoft\RecruitingApi\Api\Dto\PublicBewerbungNeuanlageDto
     */
    public function apiPublicV1BewerbungGetNeuanlageModelGet()
    {
        list($response) = $this->apiPublicV1BewerbungGetNeuanlageModelGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation apiPublicV1BewerbungGetNeuanlageModelGetWithHttpInfo
     *
     * Gibt die Beschreibung des Objekts, das die Bewerberdaten enthält (für Bewerbung/Create) im JSON-Format als
     * Beispiel zurück.  Die Pflichtfelder sind in der Ansicht \"Model\" mit einem roten Stern markiert.  Nicht
     * benötigte Properties können weggelassen werden.
     *
     *
     * @throws \Prosoft\RecruitingApi\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array                                   of \Prosoft\RecruitingApi\Api\Dto\PublicBewerbungNeuanlageDto,
     *                                                 HTTP status code, HTTP response headers (array of strings)
     */
    public function apiPublicV1BewerbungGetNeuanlageModelGetWithHttpInfo()
    {
        $returnType = '\Prosoft\RecruitingApi\Api\Dto\PublicBewerbungNeuanlageDto';
        $request = $this->apiPublicV1BewerbungGetNeuanlageModelGetRequest();

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
                        '\Prosoft\RecruitingApi\Api\Dto\PublicBewerbungNeuanlageDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiPublicV1BewerbungGetNeuanlageModelGetAsync
     *
     * Gibt die Beschreibung des Objekts, das die Bewerberdaten enthält (für Bewerbung/Create) im JSON-Format als
     * Beispiel zurück.  Die Pflichtfelder sind in der Ansicht \"Model\" mit einem roten Stern markiert.  Nicht
     * benötigte Properties können weggelassen werden.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1BewerbungGetNeuanlageModelGetAsync()
    {
        return $this->apiPublicV1BewerbungGetNeuanlageModelGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiPublicV1BewerbungGetNeuanlageModelGetAsyncWithHttpInfo
     *
     * Gibt die Beschreibung des Objekts, das die Bewerberdaten enthält (für Bewerbung/Create) im JSON-Format als
     * Beispiel zurück.  Die Pflichtfelder sind in der Ansicht \"Model\" mit einem roten Stern markiert.  Nicht
     * benötigte Properties können weggelassen werden.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiPublicV1BewerbungGetNeuanlageModelGetAsyncWithHttpInfo()
    {
        $returnType = '\Prosoft\RecruitingApi\Api\Dto\PublicBewerbungNeuanlageDto';
        $request = $this->apiPublicV1BewerbungGetNeuanlageModelGetRequest();

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
     * Create request for operation 'apiPublicV1BewerbungGetNeuanlageModelGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiPublicV1BewerbungGetNeuanlageModelGetRequest()
    {
        $resourcePath = '/api/public/v1/Bewerbung/GetNeuanlageModel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
