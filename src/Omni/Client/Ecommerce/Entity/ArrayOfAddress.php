<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfAddress implements IteratorAggregate
{

    /**
     * @property Address[] $Address
     */
    protected $Address = array(
        
    );

    /**
     * @param Address[] $Address
     * @return $this
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return Address[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->Address );
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
        return $this->Address;
    }


}

