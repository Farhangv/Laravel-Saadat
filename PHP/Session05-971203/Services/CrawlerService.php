<?php 

namespace Crawler\Services;

use \Crawler\Models\CrawlTask;

class CrawlerService
{
    public function getUrlsContentIntoFile(CrawlTask $task): CrawlTask
    {
        $taskDir = 'Tasks/' . $task->getName() . '/';
        for ($i=0; $i < count($task->getUrls()); $i++) { 
            file_put_contents($taskDir . 'content_'. $i .'.html', file_get_contents($task->getUrls()[$i]));
        }
        
        return $task;
    }

    public function processTask(string $taskName)
    {
        //TODO: Download and save all images       
    }
}
