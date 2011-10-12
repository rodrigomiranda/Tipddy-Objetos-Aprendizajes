<?php

namespace Tipddy\OABundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 



/**
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * 
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $nombre;
    
    /**
     * 
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $apellido;
    
    /**
     * 
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $rut;
    
    /**
     * 
     * @ORM\Column(name="empresa", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $empresa;
    
    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\Email(message="No es un mail válido")
     */
    private $email;    
    
    
    /**
     * 
     * @ORM\Column(name="codigo_postal", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $codigoPostal;
    
    /**
     * 
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $direccion; 
    
    
    /**
     * 
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $region;
    
    
    /**
     * 
     * @ORM\Column(name="comuna", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $comuna;
    
    /**
     * 
     * @ORM\Column(name="telefono", type="string", length=30, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $telefono;
    
    /**
     * 
     * @ORM\Column(name="celular", type="string", length=30, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $celular;
        
  
    /**
     * @ORM\ManyToOne(targetEntity="TipoUsuario", inversedBy="usuarios", cascade={"remove"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="tipo_usuario_id", referencedColumnName="id")
     * })
     */       
    private $tipoUsuario;
    
    
    /**
     * 
     * @ORM\Column(name="nick", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $nick;
    
    /**
     * 
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Campo obligatorio")
     * @Assert\Type(type="string", message="El valor {{ value }} no es {{ type }}")
     */
    private $password;

    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Organizacion", inversedBy="usuarios", cascade={"remove"})
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="organizacion_id", referencedColumnName="id")
     * })
     */
    private $organizacion;
    
    
    /**
     * @ORM\OneToMany(targetEntity="ObjetoAprendizaje", mappedBy="usuario")
     */
    private $objetosAprendizajes; 
    
    
    /**
     * @ORM\OneToMany(targetEntity="Sugerencia", mappedBy="usuario")
     */
    private $sugerencias;

    
    
    
        

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct()
    {
        $this->objetosAprendizajes = new \Doctrine\Common\Collections\ArrayCollection();
    $this->sugerencias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set rut
     *
     * @param string $rut
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set comuna
     *
     * @param string $comuna
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;
    }

    /**
     * Get comuna
     *
     * @return string 
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set nick
     *
     * @param string $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set tipoUsuario
     *
     * @param Tipddy\OABundle\Entity\TipoUsuario $tipoUsuario
     */
    public function setTipoUsuario(\Tipddy\OABundle\Entity\TipoUsuario $tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;
    }

    /**
     * Get tipoUsuario
     *
     * @return Tipddy\OABundle\Entity\TipoUsuario 
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    /**
     * Set organizacion
     *
     * @param Tipddy\OABundle\Entity\Organizacion $organizacion
     */
    public function setOrganizacion(\Tipddy\OABundle\Entity\Organizacion $organizacion)
    {
        $this->organizacion = $organizacion;
    }

    /**
     * Get organizacion
     *
     * @return Tipddy\OABundle\Entity\Organizacion 
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }

    /**
     * Add objetosAprendizajes
     *
     * @param Tipddy\OABundle\Entity\ObjetoAprendizaje $objetosAprendizajes
     */
    public function addObjetoAprendizaje(\Tipddy\OABundle\Entity\ObjetoAprendizaje $objetosAprendizajes)
    {
        $this->objetosAprendizajes[] = $objetosAprendizajes;
    }

    /**
     * Get objetosAprendizajes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getObjetosAprendizajes()
    {
        return $this->objetosAprendizajes;
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