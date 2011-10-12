<?php
  
 namespace Tipddy\OABundle\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Component\Validator\Constraints as Assert; 


/**
 * @ORM\Table(name="tipo_usuario")
 * @ORM\Entity
 */
class TipoUsuario {
    
    
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
     * 
     * @ORM\Column(name="rol", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $rol;
     
     
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="tipoUsuario")
     */
     private $usuarios;

    
    
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set rol
     *
     * @param string $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add usuarios
     *
     * @param Tipddy\OABundle\Entity\Usuario $usuarios
     */
    public function addUsuario(\Tipddy\OABundle\Entity\Usuario $usuarios)
    {
        $this->usuarios[] = $usuarios;
    }

    /**
     * Get usuarios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}