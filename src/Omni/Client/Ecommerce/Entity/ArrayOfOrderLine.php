<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfOrderLine implements IteratorAggregate
{

    /**
     * @property OrderLine[] $OrderLine
     */
    protected $OrderLine = array(
        
    );

    /**
     * @param OrderLine[] $OrderLine
     * @return $this
     */
    public function setOrderLine($OrderLine)
    {
        $this->OrderLine = $OrderLine;
        return $this;
    }

    /**
     * @return OrderLine[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->OrderLine );
    }

    /**
     * @return OrderLine[]
     */
    public function getOrderLine()
    {
        return $this->OrderLine;
    }


}

