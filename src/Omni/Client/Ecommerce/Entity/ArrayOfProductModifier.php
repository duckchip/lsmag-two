<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfProductModifier implements IteratorAggregate
{

    /**
     * @property ProductModifier[] $ProductModifier
     */
    protected $ProductModifier = [
        
    ];

    /**
     * @param ProductModifier[] $ProductModifier
     * @return $this
     */
    public function setProductModifier($ProductModifier)
    {
        $this->ProductModifier = $ProductModifier;
        return $this;
    }

    /**
     * @return ProductModifier[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ProductModifier );
    }

    /**
     * @return ProductModifier[]
     */
    public function getProductModifier()
    {
        return $this->ProductModifier;
    }


}

