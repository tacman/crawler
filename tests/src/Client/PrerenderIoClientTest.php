<?php

namespace tests\MediaMonks\Crawler\Client;

use MediaMonks\Crawler\Client\PrerenderIoClient;

class PrerenderIoClientTest extends \PHPUnit\Framework\TestCase
{
    public function test_url_is_prepended()
    {
        $token = 'my-prerender.io-token';
        $websiteUrl = 'http://my-website/';

        $method = get_non_public_method(PrerenderIoClient::class, 'getAbsoluteUri');
        $client = new PrerenderIoClient($token);
        $result = $method->invokeArgs($client, [$websiteUrl]);

        $this->assertEquals(PrerenderIoClient::URL.$websiteUrl, $result);
        // we need to inject our client, not symfony's
//        $this->assertEquals(
//            PrerenderIoClient::USER_AGENT,
//            $client->getServerParameter(PrerenderIoClient::HEADER_USER_AGENT)
//        );
//        $this->assertEquals($token, $client->getServerParameter(PrerenderIoClient::HEADER_TOKEN));
    }

    public function test_getRequest()
    {
        $token = 'my-prerender.io-token';
        $client = new PrerenderIoClient($token);
        $this->assertNull($client->getRequest());
    }
}
