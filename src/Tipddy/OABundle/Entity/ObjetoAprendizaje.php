<?php

namespace Tipddy\OABundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 


/**
 * @ORM\Table(name="objeto_aprendizaje")
 * @ORM\Entity
 */
class ObjetoAprendizaje {
    
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $titulo;
     
    /**
     * 
     * @ORM\Column(name="requerimientos", type="text", nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $requerimientos;
     
    /**
     * 
     * @ORM\Column(name="derechos", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $derechos;
     
    /**
     * 
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $version;
     
    /**
     * 
     * @ORM\Column(name="autores", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $autores;
     
    /**
     * 
     * @ORM\Column(name="diseno_instruccional", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $disenoInstruccional;
     
    /**
     * 
     * @ORM\Column(name="desarrolladores_tecnicos", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $desarrolladoresTecnicos;
     
    /**
     * 
     * @ORM\Column(name="referencia", type="text", nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $referencia;
     
    /**
     * 
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
     private $path;
     
     
    /**
     * @ORM\Column(name="fecha_ult_subida", type="datetime", nullable=false)
     */
     private $fechaUltSubida;
     
     
    /**
     *
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="objetosAprendizajes", cascade={"remove"})
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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set requerimientos
     *
     * @param text $requerimientos
     */
    public function setRequerimientos($requerimientos)
    {
        $this->requerimientos = $requerimientos;
    }

    /**
     * Get requerimientos
     *
     * @return text 
     */
    public function getRequerimientos()
    {
        return $this->requerimientos;
    }

    /**
     * Set derechos
     *
     * @param string $derechos
     */
    public function setDerechos($derechos)
    {
        $this->derechos = $derechos;
    }

    /**
     * Get derechos
     *
     * @return string 
     */
    public function getDerechos()
    {
        return $this->derechos;
    }

    /**
     * Set version
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set autores
     *
     * @param string $autores
     */
    public function setAutores($autores)
    {
        $this->autores = $autores;
    }

    /**
     * Get autores
     *
     * @return string 
     */
    public function getAutores()
    {
        return $this->autores;
    }

    /**
     * Set disenoInstruccional
     *
     * @param string $disenoInstruccional
     */
    public function setDisenoInstruccional($disenoInstruccional)
    {
        $this->disenoInstruccional = $disenoInstruccional;
    }

    /**
     * Get disenoInstruccional
     *
     * @return string 
     */
    public function getDisenoInstruccional()
    {
        return $this->disenoInstruccional;
    }

    /**
     * Set desarrolladoresTecnicos
     *
     * @param string $desarrolladoresTecnicos
     */
    public function setDesarrolladoresTecnicos($desarrolladoresTecnicos)
    {
        $this->desarrolladoresTecnicos = $desarrolladoresTecnicos;
    }

    /**
     * Get desarrolladoresTecnicos
     *
     * @return string 
     */
    public function getDesarrolladoresTecnicos()
    {
        return $this->desarrolladoresTecnicos;
    }

    /**
     * Set referencia
     *
     * @param text $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * Get referencia
     *
     * @return text 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set fechaUltSubida
     *
     * @param datetime $fechaUltSubida
     */
    public function setFechaUltSubida($fechaUltSubida)
    {
        $this->fechaUltSubida = $fechaUltSubida;
    }

    /**
     * Get fechaUltSubida
     *
     * @return datetime 
     */
    public function getFechaUltSubida()
    {
        return $this->fechaUltSubida;
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