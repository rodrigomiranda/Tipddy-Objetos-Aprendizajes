<?php 
 namespace Tipddy\OABundle\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Table(name="organizacion")
 * @ORM\Entity
 */
class Organizacion {
 
    
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
     * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $etiqueta;
    
    /**
     * 
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $rut;
    
    /**
     * 
     * @ORM\Column(name="giro", type="text", nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $giro;
    
    /**
     * 
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $direccion;
    
    /**
     * 
     * @ORM\Column(name="pais", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $pais;
    
    
    /**
     * 
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $region;
    
    /**
     * 
     * @ORM\Column(name="provincia", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $provincia;
    
    /**
     * 
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;
    
    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="organizacion")
     */
    private $usuarios;
    

    
    
}
