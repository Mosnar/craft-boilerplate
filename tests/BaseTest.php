<?php

class BaseTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    protected $baseUrl = 'http://localhost';

    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl($this->baseUrl);
    }

    protected function visit($uri)
    {
        $this->url($uri);
        return $this;
    }

    protected function seeTitle($title)
    {
        $this->assertEquals($title, $this->title());
        return $this;
    }

    protected function wait($seconds)
    {
        sleep($seconds);
        return $this;
    }

    protected function click($class)
    {
        $this->byCssSelector($class)->click();
        return $this;
    }

    protected function clickXpath($path)
    {
        $this->byXPath($class)->click();
        return $this;
    }

    protected function see($text, $tag = 'body')
    {
        $content = $this->byTag($tag)->text();
        $this->assertContains($text, $content);
        return $this;
    }

    protected function dontSee($text, $tag = 'body')
    {
        $content = $this->byTag($tag)->text();
        $this->assertNotContains($text, $content);
        return $this;
    }
}
