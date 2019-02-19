<?php 
use Crawler\Models\CrawlTask;
use Crawler\Services\CrawlTaskService;
use Crawler\Services\IOService;
use Crawler\Services\CrawlerService;
use Crawler\Services\ExtractorService;

require_once(__DIR__ . '/Autoloader.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $task = new CrawlTask();
    $task->setName(str_replace(' ', '-', strtolower($_POST['name'])));
    $urls = array();
    if(isset($_POST['urls']) && strlen($_POST['urls']) >= 1)
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
    //TODO: Validate entered URLs
    $task->setUrls($urls);

    $crawlTaskService = new CrawlTaskService();
    $task = $crawlTaskService->SaveCrawlTask($task);
    ////////////////////////////////////////////////////////////////
    //CRON Jobs
    if($task != null)
    {
        $crawlerService = new CrawlerService();
        $crawlerService->getUrlsContentIntoFile($task);
        $extractorService = new ExtractorService();
        $extractorService->getAllImageUrlsFromTask($task);
    }
    else
        die('درخواست شما با موفقیت انجام نشد');
}
