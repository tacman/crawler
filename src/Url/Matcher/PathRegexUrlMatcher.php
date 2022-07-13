<?php

namespace MediaMonks\Crawler\Url\Matcher;

use League\Uri\Schemes\Http as Url;

class PathRegexUrlMatcher implements UrlMatcherInterface
{
    private string $pattern;

    /**
     * @param string $pattern
     */
    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @param Url $url
     * @return bool
     */
    public function matches(Url $url)
    {
        return (bool)preg_match($this->pattern, $url->getPath());
    }
}
