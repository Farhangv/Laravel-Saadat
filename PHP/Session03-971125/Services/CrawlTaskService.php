<?php

namespace Crawler\Services;
use Crawler\Models\CrawlTask;

require_once (__DIR__ . '/../Autoloader.php');

class CrawlTaskService
{
    public function SaveCrawlTask(CrawlTask $task): bool
    {
        return true;
    }
}
