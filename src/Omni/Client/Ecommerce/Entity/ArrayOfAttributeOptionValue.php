<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfAttributeOptionValue implements IteratorAggregate
{

    /**
     * @property AttributeOptionValue[] $AttributeOptionValue
     */
    protected $AttributeOptionValue = array(
        
    );

    /**
     * @param AttributeOptionValue[] $AttributeOptionValue
     * @return $this
     */
    public function setAttributeOptionValue($AttributeOptionValue)
    {
        $this->AttributeOptionValue = $AttributeOptionValue;
        return $this;
    }

    /**
     * @return AttributeOptionValue[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->AttributeOptionValue );
    }

    /**
     * @return AttributeOptionValue[]
     */
    public function getAttributeOptionValue()
    {
        return $this->AttributeOptionValue;
    }


}

