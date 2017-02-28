<?php
namespace Luritas\Helena\Url;

class Sanner
{
    /**
     * @var array URL 배열
     */
    protected $urls;

    /**
     * @var \GuzzleHttpClient
     */
    protected $httpClient;

    /**
     * 생성자
     * @param array $urls 스캔한 URL 배열
     */
    public function __contruct(array $urls)
    {
        $this->urls = $urls;
    }
}

