<?php

namespace Crawler\Services;
use Crawler\Models\CrawlTask;

class CrawlTaskService
{
    public function SaveCrawlTask(CrawlTask $task): ?CrawlTask
    {
        $taskDir = 'Tasks/'. $task->getName() . '/';
        if(!is_dir($taskDir))
        {
            mkdir($taskDir, 0777);
            $taskJson = json_encode($task);
            $file = fopen($taskDir . 'task.json', 'w');
            if($file != false)
            {
                fwrite($file, $taskJson);
                fclose($file);
                mkdir($taskDir . 'images');
                return $task;
            }
            else
            {
                rmdir($taskDir);
            }
        }
        return null;
    }
}
