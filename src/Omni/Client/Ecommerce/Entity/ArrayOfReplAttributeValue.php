<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplAttributeValue implements IteratorAggregate
{

    /**
     * @property ReplAttributeValue[] $ReplAttributeValue
     */
    protected $ReplAttributeValue = array(
        
    );

    /**
     * @param ReplAttributeValue[] $ReplAttributeValue
     * @return $this
     */
    public function setReplAttributeValue($ReplAttributeValue)
    {
        $this->ReplAttributeValue = $ReplAttributeValue;
        return $this;
    }

    /**
     * @return ReplAttributeValue[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplAttributeValue );
    }

    /**
     * @return ReplAttributeValue[]
     */
    public function getReplAttributeValue()
    {
        return $this->ReplAttributeValue;
    }


}
