<?php 

namespace Crawler\Services;
use Crawler\Models\CrawlTask;

class ExtractorService
{
    public function getAllImageUrlsFromContent(string $content): array
    {
        preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $matches);
        //var_dump($matches);
        return $matches[1];
    }

    public function getAllImageUrlsFromFile(string $filePath): array
    {
        return $this->getAllImageUrlsFromContent(file_get_contents($filePath));
    }

    public function getAllImageUrlsFromTask(CrawlTask $task): CrawlTask
    {
        $finalArray = [];
        $taskDir = 'Tasks/' . $task->getName() . '/';
        $sub = scandir($taskDir);
        for ($i=0; $i < count($sub); $i++) { 
            if(strpos($sub[$i], 'content_') !== false)
            {
                $images = $this->getAllImageUrlsFromFile($taskDir . $sub[$i]);
                $finalArray[] = $images;
            }
        }

        var_dump($finalArray);
        return $task;
    }

}
