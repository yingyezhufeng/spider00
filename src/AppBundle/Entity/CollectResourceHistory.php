<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="collect_resource_history")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CollectResourceHistoryRepository")
 */
class CollectResourceHistory{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="event_id", type="integer")
     */
    private $event_id;

    /**
     * @ORM\Column(name="site", type="string", length=100)
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
     * @ORM\Column(name="key", type="string", length=50, nullable=true)
     */
    private $key;

    /**
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * Set key
     *
     * @param string $key
     * @return CollectResourceHistory
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * Set time
     *
     * @param integer $time
     * @return CollectResourceHistory
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set update_time
     *
     * @param integer $updateTime
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
     * @return CollectResourceHistory
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
}
