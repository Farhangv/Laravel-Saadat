<?php

namespace Crawler\Models;
use \JsonSerializable;

class CrawlTask implements JsonSerializable
{
    private $name;
    private $urls;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of urls
     */ 
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set the value of urls
     *
     * @return  self
     */ 
    public function setUrls($urls)
    {
        $this->urls = $urls;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'task' => [
                'name' => $this->getName(),
                'urls' => $this->getUrls()
            ]
        ];
    }
}

