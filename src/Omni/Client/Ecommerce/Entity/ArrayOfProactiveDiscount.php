<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfProactiveDiscount implements IteratorAggregate
{

    /**
     * @property ProactiveDiscount[] $ProactiveDiscount
     */
    protected $ProactiveDiscount = array(
        
    );

    /**
     * @param ProactiveDiscount[] $ProactiveDiscount
     * @return $this
     */
    public function setProactiveDiscount($ProactiveDiscount)
    {
        $this->ProactiveDiscount = $ProactiveDiscount;
        return $this;
    }

    /**
     * @return ProactiveDiscount[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ProactiveDiscount );
    }

    /**
     * @return ProactiveDiscount[]
     */
    public function getProactiveDiscount()
    {
        return $this->ProactiveDiscount;
    }


}

