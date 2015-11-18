<?php
namespace AppBundle\Model\Helper;

use AppBundle\Entity\CollectEvent;

class CollectManager {

    private static $greeting = 'hello';
    private static $initialized = false;

    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$greeting .= ' There!';
        self::$initialized = true;
    }

    public static function greet()
    {
        self::initialize();
        echo self::$greeting;
    }
    //保存采集page信息
    // public function setResourcePageUrl($url , $site){
    //     $pagemd5 = md5($url);
    //     $query = $this->getEntityManager()->createQuery("SELECT p FROM AppBundle:CollectResourcePage p");
    //     $result = $query->getResult();
    //     var_dump($result);die;
    //     $pageAr = CollectResourcePageAR::model()->find("site = '{$site}' and page_md5 = ?", array($pagemd5));
    //     if(empty($pageAr)){
    //         $pageAr = new CollectResourcePageAR;
    //         $pageAr->site = $site;
    //         $pageAr->page = $url;
    //         $pageAr->page_md5 = $pagemd5;
    //         $pageAr->add_time = time();
    //         $pageAr->save();
    //     }
    // }

    public static function beginEvent($em, $event_name, $site){
        $event = new CollectEvent();
        $event->setName($event_name)
              ->setSite($site)
              ->setStartTime(time());

        $em->persist($event);
        $em->flush();

        return $event->getId();
    }
    public static function endEvent($em, $event_id){
        $event = $em->getRepository("AppBundle:CollectEvent")->find($event_id);
        if(!empty($event)){
            $event->setEndTime(time());

            $em->flush();
        }
    }
    
    // public function isCollected($url, $key = ''){
    //     $md5 = md5($url);
    //     $condition = "urlmd5 = '{$md5}'";
    //     if(!empty($key)){
    //         $condition .= " or `key` = '{$key}'";
    //     }
    //     $resource = CollectResourceHistoryAR::model()->find($condition);
        
    //     return !empty($resource) ? $resource : false;
    // }
}