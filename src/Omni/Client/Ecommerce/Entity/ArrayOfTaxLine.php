<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfTaxLine implements IteratorAggregate
{

    /**
     * @property TaxLine[] $TaxLine
     */
    protected $TaxLine = array(
        
    );

    /**
     * @param TaxLine[] $TaxLine
     * @return $this
     */
    public function setTaxLine($TaxLine)
    {
        $this->TaxLine = $TaxLine;
        return $this;
    }

    /**
     * @return TaxLine[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->TaxLine );
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLine()
    {
        return $this->TaxLine;
    }


}

