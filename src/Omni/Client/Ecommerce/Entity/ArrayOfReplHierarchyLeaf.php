<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplHierarchyLeaf implements IteratorAggregate
{

    /**
     * @property ReplHierarchyLeaf[] $ReplHierarchyLeaf
     */
    protected $ReplHierarchyLeaf = array(
        
    );

    /**
     * @param ReplHierarchyLeaf[] $ReplHierarchyLeaf
     * @return $this
     */
    public function setReplHierarchyLeaf($ReplHierarchyLeaf)
    {
        $this->ReplHierarchyLeaf = $ReplHierarchyLeaf;
        return $this;
    }

    /**
     * @return ReplHierarchyLeaf[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplHierarchyLeaf );
    }

    /**
     * @return ReplHierarchyLeaf[]
     */
    public function getReplHierarchyLeaf()
    {
        return $this->ReplHierarchyLeaf;
    }


}

