<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfVariantExt implements IteratorAggregate
{

    /**
     * @property VariantExt[] $VariantExt
     */
    protected $VariantExt = array(
        
    );

    /**
     * @param VariantExt[] $VariantExt
     * @return $this
     */
    public function setVariantExt($VariantExt)
    {
        $this->VariantExt = $VariantExt;
        return $this;
    }

    /**
     * @return VariantExt[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->VariantExt );
    }

    /**
     * @return VariantExt[]
     */
    public function getVariantExt()
    {
        return $this->VariantExt;
    }


}

