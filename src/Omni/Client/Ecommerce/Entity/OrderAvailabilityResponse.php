<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class OrderAvailabilityResponse
{

    /**
     * @property ArrayOfOrderLineAvailabilityResponse $Lines
     */
    protected $Lines = null;

    /**
     * @property string $OrderId
     */
    protected $OrderId = null;

    /**
     * @property string $PreferredSourcingLocation
     */
    protected $PreferredSourcingLocation = null;

    /**
     * @param ArrayOfOrderLineAvailabilityResponse $Lines
     * @return $this
     */
    public function setLines($Lines)
    {
        $this->Lines = $Lines;
        return $this;
    }

    /**
     * @return ArrayOfOrderLineAvailabilityResponse
     */
    public function getLines()
    {
        return $this->Lines;
    }

    /**
     * @param string $OrderId
     * @return $this
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param string $PreferredSourcingLocation
     * @return $this
     */
    public function setPreferredSourcingLocation($PreferredSourcingLocation)
    {
        $this->PreferredSourcingLocation = $PreferredSourcingLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreferredSourcingLocation()
    {
        return $this->PreferredSourcingLocation;
    }


}
