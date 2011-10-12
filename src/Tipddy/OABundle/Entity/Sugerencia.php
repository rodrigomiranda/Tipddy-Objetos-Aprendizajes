<?php

namespace Tipddy\OABundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 


/**
 * @ORM\Table(name="sugerencia")
 * @ORM\Entity
 */
class Sugerencia {
    
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
     * @ORM\Column(name="informacion", type="text", nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $informacion;
     
     
     
    /**
     *
     * @ORM\ManyToOne(targetEntity="TipoSugerencia", inversedBy="sugerencias", cascade={"remove"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="tipo_sugerencia_id", referencedColumnName="id")
     * })
     */
     private $tipoSugerencia;
     
     
    /**
     *
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="sugerencias", cascade={"remove"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
     private $usuario;

    
    

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
     * Set informacion
     *
     * @param text $informacion
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    }

    /**
     * Get informacion
     *
     * @return text 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set tipoSugerencia
     *
     * @param Tipddy\OABundle\Entity\TipoSugerencia $tipoSugerencia
     */
    public function setTipoSugerencia(\Tipddy\OABundle\Entity\TipoSugerencia $tipoSugerencia)
    {
        $this->tipoSugerencia = $tipoSugerencia;
    }

    /**
     * Get tipoSugerencia
     *
     * @return Tipddy\OABundle\Entity\TipoSugerencia 
     */
    public function getTipoSugerencia()
    {
        return $this->tipoSugerencia;
    }

    /**
     * Set usuario
     *
     * @param Tipddy\OABundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Tipddy\OABundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Tipddy\OABundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}