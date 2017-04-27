<?php

namespace MantenimientosBundle\Entity;

/**
 * Rubros
 */
class Rubros
{
    /**
     * @var integer
     */
    private $codigoRubro;

    /**
     * @var string
     */
    private $nombreRubro;


    /**
     * Get codigoRubro
     *
     * @return integer
     */
    public function getCodigoRubro()
    {
        return $this->codigoRubro;
    }

    /**
     * Set nombreRubro
     *
     * @param string $nombreRubro
     *
     * @return Rubros
     */
    public function setNombreRubro($nombreRubro)
    {
        $this->nombreRubro = $nombreRubro;

        return $this;
    }

    /**
     * Get nombreRubro
     *
     * @return string
     */
    public function getNombreRubro()
    {
        return $this->nombreRubro;
    }
}

