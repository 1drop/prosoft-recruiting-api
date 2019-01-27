<?php
declare(strict_types=1);
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2018 Hans Hoechtl <hhoechtl@1drop.de>
 *  All rights reserved
 ***************************************************************/
namespace Prosoft\RecruitingApi;

use Prosoft\RecruitingApi\Api\Configuration;

class ApiConfiguration extends Configuration
{
    /**
     * @var string
     */
    protected $fullApiKey = '';

    /**
     * Workaround for object framework injection
     */
    public function initializeObject()
    {
        $this->apiKeys['X-ApiKey'] = $this->fullApiKey;
    }

    /**
     * @param  string           $key
     * @return ApiConfiguration
     */
    public function setApiKeyFull(string $key)
    {
        parent::setApiKey('X-ApiKey', $key);
        $this->fullApiKey = $key;
        return $this;
    }
}
