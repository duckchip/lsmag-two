<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplProductGroup implements IteratorAggregate
{

    /**
     * @property ReplProductGroup[] $ReplProductGroup
     */
    protected $ReplProductGroup = array(
        
    );

    /**
     * @param ReplProductGroup[] $ReplProductGroup
     * @return $this
     */
    public function setReplProductGroup($ReplProductGroup)
    {
        $this->ReplProductGroup = $ReplProductGroup;
        return $this;
    }

    /**
     * @return ReplProductGroup[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplProductGroup );
    }

    /**
     * @return ReplProductGroup[]
     */
    public function getReplProductGroup()
    {
        return $this->ReplProductGroup;
    }


}

