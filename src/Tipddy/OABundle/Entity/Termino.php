<?php

namespace Tipddy\OABundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 


/**
 * @ORM\Table(name="termino")
 * @ORM\Entity
 */
class Termino {
    
    /**
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
     private $id;
     
    /**
     * 
     * @ORM\Column(name="etiqueta", type="string", length=200, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $etiqueta;
     
    /**
     * 
     * @ORM\Column(name="slug", type="string", length=200, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $slug;
     
    /**
     * @ORM\OneToMany(targetEntity="TerminoArbol", mappedBy="termino")
     */
     private $terminosArbol;
     

     
    
    
    public function __construct()
    {
        $this->terminosArbol = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add terminosArbol
     *
     * @param Tipddy\OABundle\Entity\TerminoArbol $terminosArbol
     */
    public function addTerminoArbol(\Tipddy\OABundle\Entity\TerminoArbol $terminosArbol)
    {
        $this->terminosArbol[] = $terminosArbol;
    }

    /**
     * Get terminosArbol
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTerminosArbol()
    {
        return $this->terminosArbol;
    }
}