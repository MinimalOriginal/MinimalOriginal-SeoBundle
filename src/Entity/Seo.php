<?php

namespace MinimalOriginal\SeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use MinimalOriginal\CoreBundle\Entity\Routing;
use MinimalOriginal\CoreBundle\Annotation\Exposure;

/**
 * Seo
 *
 * @ORM\Table(name="seo")
 * @ORM\Entity(repositoryClass="MinimalOriginal\SeoBundle\Repository\SeoRepository")
 */
class Seo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Exposure(groups = {"manager"}, name = "Titre")
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @Exposure(groups = {"manager"}, name = "Description")
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @Exposure(groups = {"manager"}, name = "Route")
     * @ORM\ManyToOne(targetEntity="MinimalOriginal\CoreBundle\Entity\Routing")
     * @ORM\JoinColumn(name="routing_id", referencedColumnName="id", nullable=true)
     */
     private $routing;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Seo
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Seo
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
     * Set routing
     *
     * @param Routing $routing
     *
     * @return Seo
     */
    public function setRouting(Routing $routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Get routing
     *
     * @return Routing
     */
    public function getRouting()
    {
        return $this->routing;
    }
}
