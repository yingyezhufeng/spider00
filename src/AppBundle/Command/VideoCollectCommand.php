<?php
namespace AppBundle\Command;

use AppBundle\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\CollectResourcePage;
use AppBundle\Entity\VideoSingle;
use AppBundle\Model\Helper\CollectManager;

class VideoCollectCommand extends BaseCommand
{
    protected $config_params = ['name'        => "spider",
                                'description' => "none",
                                'help'        => "很屌的命令"];

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->start($output, "脚本开始运行了...");
        $this->wait($output, "程序正在执行中,请耐心等候...");
        $this->zhibo8();
        $this->end($output, "完成!");
    }

    protected function zhibo8() {

        $em = $this->getEntityManager();
        echo 'start date:' . date('Y-m-d H:i:s' ,time()) . "\n";
        $event = CollectManager::beginEvent($em, 'collect_zhibo8_video', 'zhibo8');

        // $total = 0;
        
        $urls = array();

        $content = $this->getContentFromUrl('http://www.zhibo8.cc/nba/');

        preg_match_all('/href="([^"]+)"/si', $content, $links, PREG_SET_ORDER);
        foreach ($links as $link) {
            $urls[] = $link[1];
        }
        $content = $this->getContentFromUrl('http://www.zhibo8.cc/zuqiu/');
        preg_match_all('/href="([^"]+)"/si', $content, $links, PREG_SET_ORDER);
        foreach ($links as $link) {
            $urls[] = $link[1];
        }
        $urlsFilter = array();
        foreach ($urls as $url) {
            if (preg_match('/\/(nba|zuqiu)\/[\d]+\//si', $url)) {
                $url = str_replace('http://www.zhibo8.cc/', '', $url);
                $url = str_replace('http://www.zhibo8.com/', '', $url);
                $urlsFilter[] = $url;
            }
            continue;
        }
        //保存page信息
        foreach ($urlsFilter as $url) {
            $this->setResourcePageUrl($url, 'zhibo8');
        }
        //采集page里面的video信息
        //应获取总共采集数，有效采集数，采集失败数等信息
        $this->collectPageInfo($event, 'zhibo8');
        // $total += $result['total'];
        
        // CollectManager::endEvent($event, $total);
        CollectManager::endEvent($em, $event);
        echo 'end date:' . date('Y-m-d H:i:s' ,time()) . "\n";
    }

    //保存page信息
    protected function setResourcePageUrl($url , $site){
        $pagemd5 = md5($url);
        $em = $this->getEntityManager();
        $query = $em->createQuery("select p from AppBundle:CollectResourcePage p
                                   where p.site = :site and p.urlmd5 = :md5");
        $result = $query->setParameters(array('site' => $site, 'md5' => $pagemd5))->getResult();

        if(empty($result)){
            $page = new CollectResourcePage();
            $page->setSite($site)
                 ->setUrl($url)
                 ->setUrlmd5($pagemd5)
                 ->setInsertTime(time());

            $em->persist($page);
            $em->flush();
        }
    }

    //采集page里面的video信息
    //应获取总共采集数，有效采集数，采集失败数等信息
    public function collectPageInfo($event, $site)
    {
        $pages = $this->getEntityManager()->createQuery("select p from AppBundle:CollectResourcePage p
                                                        where p.site = :site")
                                            ->setParameter('site',$site)
                                            ->getResult();
        foreach ($pages as $page)
        {
            $this->getVideosFromZhibo8Page($page, $event, $site);
        }
    }

    public function getVideosFromZhibo8Page($page, $event, $site)
    {
        $content = $this->getContentFromUrl('http://www.zhibo8.cc/' . $page->getUrl());

        try
        {
            if(empty($content))
            {
                throw new \Exception("content empty ".$page->getUrl());
            }

            if(preg_match('/<div id="signals" class="content">(.*?)<div class="video_ad">/si', $content, $linkscontent))
            {
                preg_match_all('/href="([^"]*)"[^>]+>(.*?)<\/a>/si', $linkscontent[1], $matches, PREG_SET_ORDER);

                if (empty($matches))
                {
                    throw new \Exception('no href matched' . $page->getUrl());
                }
            }
            else {
                throw new \Exception('no position matched' . $page->getUrl());
            }

            foreach ($matches as $link) {
                $link[1] = str_replace('&amp;', '&', $link[1]);
                if(strstr($link[1], 'zhibo8.cc')){
                    continue;
                }

                if(strlen($link[2]) <= 40 || strstr($link[2], '手机')){
                    $vname = "";
                }
                else{
                    $vname = strip_tags(trim($link[2]));
                }
                $urlname[] = array($link[1], $vname);
            }

            foreach ($urlname as $url) {
                $site = 'zhibo8';
                $em = $this->getEntityManager();
                $query = $em->createQuery("select vs from AppBundle:VideoSingle vs
                                           where vs.site = :site and vs.url = :url");
                $result = $query->setParameters(array('site' => $site, 'url' => $url[1]))->getResult();

                if(empty($result)){
                    $video_sing = new VideoSingle();
                    $video_sing->setSite($site)
                               ->setTitle(trim($url[1]))
                               ->setUrl($url[0]);

                    $em->persist($video_sing);
                    $em->flush();
                }
            }
        }
        catch(Exception $e)
        {
            $error[] = $e->getMessage();
        }
    }

    public function addVideo($value='')
    {
        # code...
    }

}