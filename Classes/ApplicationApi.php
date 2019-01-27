<?php
declare(strict_types=1);
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2018 Hans Hoechtl <hhoechtl@1drop.de>
 *  All rights reserved
 ***************************************************************/
namespace Prosoft\RecruitingApi;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Neos\Flow\Http\FlowUploadedFile;
use Prosoft\RecruitingApi\Api\Endpoints\BewerbungApi;
use Prosoft\RecruitingApi\Api\ObjectSerializer;

class ApplicationApi extends BewerbungApi
{
    /**
     * Create request for operation 'apiPublicV1BewerbungCreatePost'
     * Special handling for multiple file uploads
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
        if (!is_array($attachments)) {
            $attachments = [];
        }
        $resourcePath = '/api/public/v1/Bewerbung/Create';
        $headers = $this->headerSelector->selectHeadersForMultipart([]);
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
            $headers
        );
        $multipartContents = [
            [
                'name'     => 'bewerbung',
                'contents' => ObjectSerializer::toFormValue($bewerbung),
                'headers'  => [
                    'Content-Type' => 'application/json',
                ],
            ],
        ];
        /** @var FlowUploadedFile $attachment */
        foreach ($attachments as $attachment) {
            $multipartContents[] = [
                'name'     => 'attachments[]',
                'filename' => $attachment->getClientFilename(),
                'headers'  => [
                    'Content-Type' => $attachment->getClientMediaType(),
                ],
                'contents' => $attachment->getStream()->getContents(),
            ];
        }
        $httpBody = new MultipartStream($multipartContents);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
    }
}
