<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplPrice implements IteratorAggregate
{

    /**
     * @property ReplPrice[] $ReplPrice
     */
    protected $ReplPrice = array(
        
    );

    /**
     * @param ReplPrice[] $ReplPrice
     * @return $this
     */
    public function setReplPrice($ReplPrice)
    {
        $this->ReplPrice = $ReplPrice;
        return $this;
    }

    /**
     * @return ReplPrice[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplPrice );
    }

    /**
     * @return ReplPrice[]
     */
    public function getReplPrice()
    {
        return $this->ReplPrice;
    }


}

