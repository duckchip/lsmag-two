<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplItem implements IteratorAggregate
{

    /**
     * @property ReplItem[] $ReplItem
     */
    protected $ReplItem = array(
        
    );

    /**
     * @param ReplItem[] $ReplItem
     * @return $this
     */
    public function setReplItem($ReplItem)
    {
        $this->ReplItem = $ReplItem;
        return $this;
    }

    /**
     * @return ReplItem[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplItem );
    }

    /**
     * @return ReplItem[]
     */
    public function getReplItem()
    {
        return $this->ReplItem;
    }


}

