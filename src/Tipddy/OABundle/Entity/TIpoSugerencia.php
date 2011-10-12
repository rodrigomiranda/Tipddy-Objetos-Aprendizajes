<?php

 namespace Tipddy\OABundle\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Component\Validator\Constraints as Assert; 

 
/**
 * @ORM\Table(name="tipo_sugerencia")
 * @ORM\Entity
 */
class TipoSugerencia {
    
    /**
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $id;
    
    /**
     * 
     * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $etiqueta;
    
    /**
     * @ORM\OneToMany(targetEntity="Sugerencia", mappedBy="tipoSugerencia")
     */
    private $sugerencias;

    
    
    
    public function __construct()
    {
        $this->sugerencias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Add sugerencias
     *
     * @param Tipddy\OABundle\Entity\Sugerencia $sugerencias
     */
    public function addSugerencia(\Tipddy\OABundle\Entity\Sugerencia $sugerencias)
    {
        $this->sugerencias[] = $sugerencias;
    }

    /**
     * Get sugerencias
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSugerencias()
    {
        return $this->sugerencias;
    }
}