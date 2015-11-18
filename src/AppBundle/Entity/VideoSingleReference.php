<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="video_single_reference")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VideoSingleReferenceRepository")
 */
class VideoSingleReference{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="single_id", type="integer", length=10, nullable=true)
     */
    private $single_id;

    /**
     * @ORM\Column(name="name", type="string", length=500, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(name="reference", type="string", length=500, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(name="description", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="addtime", type="integer", length=10, nullable=true)
     */
    private $addtime;

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
     * Set single_id
     *
     * @param \int $singleId
     * @return VideoSingleReference
     */
    public function setSingleId(\int $singleId)
    {
        $this->single_id = $singleId;

        return $this;
    }

    /**
     * Get single_id
     *
     * @return \int 
     */
    public function getSingleId()
    {
        return $this->single_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return VideoSingleReference
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return VideoSingleReference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return VideoSingleReference
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set addtime
     *
     * @param \int $addtime
     * @return VideoSingleReference
     */
    public function setAddtime(\int $addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return \int 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}
