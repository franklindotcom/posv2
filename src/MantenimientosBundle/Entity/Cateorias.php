<?php

namespace MantenimientosBundle\Entity;

/**
 * Cateorias
 */
class Cateorias
{
    /**
     * @var integer
     */
    private $codigoCategoria;

    /**
     * @var string
     */
    private $nombreCategoria;


    /**
     * Get codigoCategoria
     *
     * @return integer
     */
    public function getCodigoCategoria()
    {
        return $this->codigoCategoria;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     *
     * @return Cateorias
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }
}

