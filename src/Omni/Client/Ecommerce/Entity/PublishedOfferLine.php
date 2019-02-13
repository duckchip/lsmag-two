<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\OfferDiscountType;
use Ls\Omni\Client\Ecommerce\Entity\Enum\OfferDiscountLineType;
use Ls\Omni\Client\Ecommerce\Entity\Enum\OfferLineVariantType;
use Ls\Omni\Exception\InvalidEnumException;

class PublishedOfferLine extends Entity
{

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $DiscountId
     */
    protected $DiscountId = null;

    /**
     * @property OfferDiscountType $DiscountType
     */
    protected $DiscountType = null;

    /**
     * @property boolean $Exclude
     */
    protected $Exclude = null;

    /**
     * @property int $LineNo
     */
    protected $LineNo = null;

    /**
     * @property OfferDiscountLineType $LineType
     */
    protected $LineType = null;

    /**
     * @property string $OfferId
     */
    protected $OfferId = null;

    /**
     * @property string $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @property string $Variant
     */
    protected $Variant = null;

    /**
     * @property OfferLineVariantType $VariantType
     */
    protected $VariantType = null;

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $DiscountId
     * @return $this
     */
    public function setDiscountId($DiscountId)
    {
        $this->DiscountId = $DiscountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountId()
    {
        return $this->DiscountId;
    }

    /**
     * @param OfferDiscountType|string $DiscountType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setDiscountType($DiscountType)
    {
        if ( ! $DiscountType instanceof OfferDiscountType ) {
            if ( OfferDiscountType::isValid( $DiscountType ) ) 
                $DiscountType = new OfferDiscountType( $DiscountType );
            elseif ( OfferDiscountType::isValidKey( $DiscountType ) ) 
                $DiscountType = new OfferDiscountType( constant( "OfferDiscountType::$DiscountType" ) );
            elseif ( ! $DiscountType instanceof OfferDiscountType )
                throw new InvalidEnumException();
        }
        $this->DiscountType = $DiscountType->getValue();
        
        return $this;
    }

    /**
     * @return OfferDiscountType
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }

    /**
     * @param boolean $Exclude
     * @return $this
     */
    public function setExclude($Exclude)
    {
        $this->Exclude = $Exclude;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getExclude()
    {
        return $this->Exclude;
    }

    /**
     * @param int $LineNo
     * @return $this
     */
    public function setLineNo($LineNo)
    {
        $this->LineNo = $LineNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNo()
    {
        return $this->LineNo;
    }

    /**
     * @param OfferDiscountLineType|string $LineType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setLineType($LineType)
    {
        if ( ! $LineType instanceof OfferDiscountLineType ) {
            if ( OfferDiscountLineType::isValid( $LineType ) ) 
                $LineType = new OfferDiscountLineType( $LineType );
            elseif ( OfferDiscountLineType::isValidKey( $LineType ) ) 
                $LineType = new OfferDiscountLineType( constant( "OfferDiscountLineType::$LineType" ) );
            elseif ( ! $LineType instanceof OfferDiscountLineType )
                throw new InvalidEnumException();
        }
        $this->LineType = $LineType->getValue();
        
        return $this;
    }

    /**
     * @return OfferDiscountLineType
     */
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param string $OfferId
     * @return $this
     */
    public function setOfferId($OfferId)
    {
        $this->OfferId = $OfferId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferId()
    {
        return $this->OfferId;
    }

    /**
     * @param string $UnitOfMeasure
     * @return $this
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
        $this->UnitOfMeasure = $UnitOfMeasure;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param string $Variant
     * @return $this
     */
    public function setVariant($Variant)
    {
        $this->Variant = $Variant;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->Variant;
    }

    /**
     * @param OfferLineVariantType|string $VariantType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setVariantType($VariantType)
    {
        if ( ! $VariantType instanceof OfferLineVariantType ) {
            if ( OfferLineVariantType::isValid( $VariantType ) ) 
                $VariantType = new OfferLineVariantType( $VariantType );
            elseif ( OfferLineVariantType::isValidKey( $VariantType ) ) 
                $VariantType = new OfferLineVariantType( constant( "OfferLineVariantType::$VariantType" ) );
            elseif ( ! $VariantType instanceof OfferLineVariantType )
                throw new InvalidEnumException();
        }
        $this->VariantType = $VariantType->getValue();
        
        return $this;
    }

    /**
     * @return OfferLineVariantType
     */
    public function getVariantType()
    {
        return $this->VariantType;
    }


}

