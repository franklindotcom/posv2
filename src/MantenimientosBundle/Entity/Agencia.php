<?php

namespace MantenimientosBundle\Entity;

/**
 * Agencia
 */
class Agencia
{
    /**
     * @var integer
     */
    private $codigoAgencia;

    /**
     * @var string
     */
    private $nombreAgencia;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get codigoAgencia
     *
     * @return integer
     */
    public function getCodigoAgencia()
    {
        return $this->codigoAgencia;
    }

    /**
     * Set nombreAgencia
     *
     * @param string $nombreAgencia
     *
     * @return Agencia
     */
    public function setNombreAgencia($nombreAgencia)
    {
        $this->nombreAgencia = $nombreAgencia;

        return $this;
    }

    /**
     * Get nombreAgencia
     *
     * @return string
     */
    public function getNombreAgencia()
    {
        return $this->nombreAgencia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Agencia
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Agencia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

