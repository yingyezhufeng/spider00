<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="collect_resource_page")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CollectResourcePageRepository")
 */
class CollectResourcePage{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $event_id;

    /**
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @ORM\Column(name="url", type="string", length=512, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(name="urlmd5", type="string", length=32, nullable=true)
     */
    private $urlmd5;

    /**
     * @ORM\Column(name="mykey", type="string", length=50, nullable=true)
     */
    private $mykey;

    /**
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(name="insert_time", type="integer", nullable=true)
     */
    private $insert_time;

    /**
     * @ORM\Column(name="update_time", type="integer", nullable=true)
     */
    private $update_time;

    /**
     * @ORM\Column(name="success", type="integer", nullable=true)
     */
    private $success;

    /**
     * @ORM\Column(name="resource_id", type="integer", nullable=true)
     */
    private $resource_id;

    /**
     * @ORM\Column(name="resource_name", type="string", length=200, nullable=true)
     */
    private $resource_name;

    /**
     * @ORM\Column(name="video_single_id", type="integer", nullable=true)
     */
    private $video_single_id;

    /**
     * @ORM\Column(name="download_id", type="integer", nullable=true)
     */
    private $download_id;

    /**
     * @ORM\Column(name="page_id", type="integer", nullable=true)
     */
    private $page_id;

    /**
     * @ORM\Column(name="error", type="string", length=1024, nullable=true)
     */
    private $error;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set event_id
     *
     * @param integer $eventId
     * @return CollectResourcePage
     */
    public function setEventId($eventId)
    {
        $this->event_id = $eventId;

        return $this;
    }

    /**
     * Get event_id
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return CollectResourcePage
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return CollectResourcePage
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set urlmd5
     *
     * @param string $urlmd5
     * @return CollectResourcePage
     */
    public function setUrlmd5($urlmd5)
    {
        $this->urlmd5 = $urlmd5;

        return $this;
    }

    /**
     * Get urlmd5
     *
     * @return string 
     */
    public function getUrlmd5()
    {
        return $this->urlmd5;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return CollectResourcePage
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return CollectResourcePage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set update_time
     *
     * @param integer $updateTime
     * @return CollectResourcePage
     */
    public function setUpdateTime($updateTime)
    {
        $this->update_time = $updateTime;

        return $this;
    }

    /**
     * Get update_time
     *
     * @return integer 
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Set success
     *
     * @param integer $success
     * @return CollectResourcePage
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Get success
     *
     * @return integer 
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set resource_id
     *
     * @param integer $resourceId
     * @return CollectResourcePage
     */
    public function setResourceId($resourceId)
    {
        $this->resource_id = $resourceId;

        return $this;
    }

    /**
     * Get resource_id
     *
     * @return integer 
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Set resource_name
     *
     * @param string $resourceName
     * @return CollectResourcePage
     */
    public function setResourceName($resourceName)
    {
        $this->resource_name = $resourceName;

        return $this;
    }

    /**
     * Get resource_name
     *
     * @return string 
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Set video_single_id
     *
     * @param integer $videoSingleId
     * @return CollectResourcePage
     */
    public function setVideoSingleId($videoSingleId)
    {
        $this->video_single_id = $videoSingleId;

        return $this;
    }

    /**
     * Get video_single_id
     *
     * @return integer 
     */
    public function getVideoSingleId()
    {
        return $this->video_single_id;
    }

    /**
     * Set download_id
     *
     * @param integer $downloadId
     * @return CollectResourcePage
     */
    public function setDownloadId($downloadId)
    {
        $this->download_id = $downloadId;

        return $this;
    }

    /**
     * Get download_id
     *
     * @return integer 
     */
    public function getDownloadId()
    {
        return $this->download_id;
    }

    /**
     * Set page_id
     *
     * @param integer $pageId
     * @return CollectResourcePage
     */
    public function setPageId($pageId)
    {
        $this->page_id = $pageId;

        return $this;
    }

    /**
     * Get page_id
     *
     * @return integer 
     */
    public function getPageId()
    {
        return $this->page_id;
    }

    /**
     * Set error
     *
     * @param string $error
     * @return CollectResourcePage
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return string 
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set insert_time
     *
     * @param integer $insertTime
     * @return CollectResourcePage
     */
    public function setInsertTime($insertTime)
    {
        $this->insert_time = $insertTime;

        return $this;
    }

    /**
     * Get insert_time
     *
     * @return integer 
     */
    public function getInsertTime()
    {
        return $this->insert_time;
    }

    /**
     * Set mykey
     *
     * @param string $mykey
     * @return CollectResourcePage
     */
    public function setMykey($mykey)
    {
        $this->mykey = $mykey;

        return $this;
    }

    /**
     * Get mykey
     *
     * @return string 
     */
    public function getMykey()
    {
        return $this->mykey;
    }
}
