<?php

namespace MediaMonks\Crawler\Client;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DomCrawler\Crawler;

interface CrawlerClientInterface
{
    /**
     * @return Request|null A Request instance
     */
    public function getRequest();

    /**
     * @return Response|null A response instance
     */
    public function getResponse();

    /**
     * @param string $method        The request method
     * @param string $uri           The URI to fetch
     * @param array  $parameters    The Request parameters
     * @param array  $files         The files
     * @param array  $server        The server parameters (HTTP headers are referenced with a HTTP_ prefix as PHP does)
     * @param string $content       The raw body data
     * @param bool   $changeHistory Whether to update the history or not (only used internally for back(), forward(), and reload())
     *
     * @return Crawler
     */
    public function request(string $method, string $uri, array $parameters = [], array $files = [], array $server = [], string $content = null, bool $changeHistory = true);
//
//    public function request(
//        $method,
//        $uri,
//        array $parameters = [],
//        array $files = [],
//        array $server = [],
//        $content = null,
//        $changeHistory = true
//    );
}


//PHP Fatal error:  Declaration of Symfony\Component\BrowserKit\AbstractBrowser::request(string $method, string $uri, array $parameters = Array, array $files = Array, array $server = Array, ?string $content = NULL, bool $changeHistory = true) must be compatible with MediaMonks\Crawler\Client\CrawlerClientInterface::request($method, $uri, array $parameters = Array, array $files = Array, array $server = Array, $content = NULL, $changeHistory = true) in /home/tac/survos/projects/crawler/src/Client/GoutteClient.php on line 355
//tac@pop-os:~/survos/projects/crawler$
