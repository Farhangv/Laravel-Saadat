<?php 
use Crawler\Models\CrawlTask;
use Crawler\Services\CrawlTaskService;
require_once(__DIR__ . '/Autoloader.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $task = new CrawlTask();
    $task->setName(str_replace(' ', '-', strtolower($_POST['name'])));
    $urls = array();
    if(isset($_POST['urls']))
        $urls = explode("\n", $_POST['urls']);
    
    if(!empty($_FILES['urls-file']['name'][0]))
    {
        $lines = file($_FILES['urls-file']['tmp_name'][0]);
        for($i = 0; $i < count($lines); $i++)
        {
            $lines[$i] = trim($lines[$i]);
            $urls[] = $lines[$i];
        }
    }
    $task->setUrls($urls);

    $crawlTaskService = new CrawlTaskService();

    if($crawlTaskService->SaveCrawlTask($task))
        die('درخواست شما با موفقیت انجام شد');
    else
        die('درخواست شما با موفقیت انجام نشد');
}
