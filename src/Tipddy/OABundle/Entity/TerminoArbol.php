<?php
   
  namespace Tipddy\OABundle\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Table(name="termino_arbol")
 * @ORM\Entity
 */
class TerminoArbol {
    
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
     * @ORM\Column(name="taxonomia", type="string", length=32, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $taxonomia;
     
    /**
     * 
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $descripcion;
     
    /**
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     * 
     */
     private $parent;
     
     
    /**
     *
     * @ORM\Column(name="count", type="bigint", nullable=false)
     * 
     */
     private $count;
     
    /**
     *
     * @ORM\ManyToOne(targetEntity="Termino", inversedBy="terminosArbol", cascade={"remove"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="termino_id", referencedColumnName="id")
     * })
     */
     private $termino;

    
    

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
     * Set taxonomia
     *
     * @param string $taxonomia
     */
    public function setTaxonomia($taxonomia)
    {
        $this->taxonomia = $taxonomia;
    }

    /**
     * Get taxonomia
     *
     * @return string 
     */
    public function getTaxonomia()
    {
        return $this->taxonomia;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set parent
     *
     * @param bigint $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return bigint 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set count
     *
     * @param bigint $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * Get count
     *
     * @return bigint 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set termino
     *
     * @param Tipddy\OABundle\Entity\Termino $termino
     */
    public function setTermino(\Tipddy\OABundle\Entity\Termino $termino)
    {
        $this->termino = $termino;
    }

    /**
     * Get termino
     *
     * @return Tipddy\OABundle\Entity\Termino 
     */
    public function getTermino()
    {
        return $this->termino;
    }
}