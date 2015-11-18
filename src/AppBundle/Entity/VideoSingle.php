<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="video_single")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VideoSingleRepository")
 */
class VideoSingle{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="finger", type="string", length=250, nullable=true)
     */
    private $finger;

    /**
     * @ORM\Column(name="site", type="string", length=30, nullable=true)
     */
    private $site;

    /**
     * @ORM\Column(name="vid", type="string", length=200, nullable=true)
     */
    private $vid;

    /**
     * @ORM\Column(name="imgs", type="string", length=2000, nullable=true)
     */
    private $imgs;

    /**
     * @ORM\Column(name="length", type="integer", length=10, nullable=true)
     */
    private $length;

    /**
     * @ORM\Column(name="title", type="string", length=500, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(name="url", type="string", length=500, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(name="official_url", type="string", length=500, nullable=true)
     */
    private $official_url;

    /**
     * @ORM\Column(name="flash_url", type="string", length=500, nullable=true)
     */
    private $flash_url;

    /**
     * @ORM\Column(name="mobile_video", type="string", length=2000, nullable=true)
     */
    private $mobile_video;

    /**
     * @ORM\Column(name="downloads", type="string", length=2000, nullable=true)
     */
    private $downloads;

    /**
     * @ORM\Column(name="infos", type="string", length=4000, nullable=true)
     */
    private $infos;

    /**
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;


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
     * Set finger
     *
     * @param string $finger
     * @return VideoSingle
     */
    public function setFinger($finger)
    {
        $this->finger = $finger;

        return $this;
    }

    /**
     * Get finger
     *
     * @return string 
     */
    public function getFinger()
    {
        return $this->finger;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return VideoSingle
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
     * Set vid
     *
     * @param string $vid
     * @return VideoSingle
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return string 
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set imgs
     *
     * @param string $imgs
     * @return VideoSingle
     */
    public function setImgs($imgs)
    {
        $this->imgs = $imgs;

        return $this;
    }

    /**
     * Get imgs
     *
     * @return string 
     */
    public function getImgs()
    {
        return $this->imgs;
    }

    /**
     * Set length
     *
     * @param \int $length
     * @return VideoSingle
     */
    public function setLength(\int $length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return \int 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return VideoSingle
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
     * Set official_url
     *
     * @param string $officialUrl
     * @return VideoSingle
     */
    public function setOfficialUrl($officialUrl)
    {
        $this->official_url = $officialUrl;

        return $this;
    }

    /**
     * Get official_url
     *
     * @return string 
     */
    public function getOfficialUrl()
    {
        return $this->official_url;
    }

    /**
     * Set flash_url
     *
     * @param string $flashUrl
     * @return VideoSingle
     */
    public function setFlashUrl($flashUrl)
    {
        $this->flash_url = $flashUrl;

        return $this;
    }

    /**
     * Get flash_url
     *
     * @return string 
     */
    public function getFlashUrl()
    {
        return $this->flash_url;
    }

    /**
     * Set mobile_video
     *
     * @param string $mobileVideo
     * @return VideoSingle
     */
    public function setMobileVideo($mobileVideo)
    {
        $this->mobile_video = $mobileVideo;

        return $this;
    }

    /**
     * Get mobile_video
     *
     * @return string 
     */
    public function getMobileVideo()
    {
        return $this->mobile_video;
    }

    /**
     * Set downloads
     *
     * @param string $downloads
     * @return VideoSingle
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * Get downloads
     *
     * @return string 
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * Set infos
     *
     * @param string $infos
     * @return VideoSingle
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return VideoSingle
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return VideoSingle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}
