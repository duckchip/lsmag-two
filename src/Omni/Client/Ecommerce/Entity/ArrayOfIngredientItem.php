<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfIngredientItem implements IteratorAggregate
{

    /**
     * @property IngredientItem[] $IngredientItem
     */
    protected $IngredientItem = [
        
    ];

    /**
     * @param IngredientItem[] $IngredientItem
     * @return $this
     */
    public function setIngredientItem($IngredientItem)
    {
        $this->IngredientItem = $IngredientItem;
        return $this;
    }

    /**
     * @return IngredientItem[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->IngredientItem );
    }

    /**
     * @return IngredientItem[]
     */
    public function getIngredientItem()
    {
        return $this->IngredientItem;
    }


}

