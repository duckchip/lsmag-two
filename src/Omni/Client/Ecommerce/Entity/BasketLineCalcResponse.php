<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\EntryStatus;
use Ls\Omni\Client\Ecommerce\Entity\Enum\LineType;
use Ls\Omni\Exception\InvalidEnumException;

class BasketLineCalcResponse
{

    /**
     * @property ArrayOfBasketLineDiscResponse $BasketLineDiscResponses
     */
    protected $BasketLineDiscResponses = null;

    /**
     * @property string $BarcodeId
     */
    protected $BarcodeId = null;

    /**
     * @property string $CardOrCustNo
     */
    protected $CardOrCustNo = null;

    /**
     * @property string $CouponCode
     */
    protected $CouponCode = null;

    /**
     * @property int $CouponFunction
     */
    protected $CouponFunction = null;

    /**
     * @property string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @property int $CurrencyFactor
     */
    protected $CurrencyFactor = null;

    /**
     * @property float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @property float $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @property EntryStatus $EntryStatus
     */
    protected $EntryStatus = null;

    /**
     * @property string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @property string $ItemId
     */
    protected $ItemId = null;

    /**
     * @property int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @property LineType $LineType
     */
    protected $LineType = null;

    /**
     * @property float $ManualDiscountAmount
     */
    protected $ManualDiscountAmount = null;

    /**
     * @property float $ManualDiscountPercent
     */
    protected $ManualDiscountPercent = null;

    /**
     * @property float $ManualPrice
     */
    protected $ManualPrice = null;

    /**
     * @property float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @property float $NetPrice
     */
    protected $NetPrice = null;

    /**
     * @property float $Price
     */
    protected $Price = null;

    /**
     * @property float $Quantity
     */
    protected $Quantity = null;

    /**
     * @property float $TAXAmount
     */
    protected $TAXAmount = null;

    /**
     * @property string $TAXBusinessCode
     */
    protected $TAXBusinessCode = null;

    /**
     * @property string $TAXProductCode
     */
    protected $TAXProductCode = null;

    /**
     * @property string $Uom
     */
    protected $Uom = null;

    /**
     * @property int $ValidInTransaction
     */
    protected $ValidInTransaction = null;

    /**
     * @property string $VariantId
     */
    protected $VariantId = null;

    /**
     * @param ArrayOfBasketLineDiscResponse $BasketLineDiscResponses
     * @return $this
     */
    public function setBasketLineDiscResponses($BasketLineDiscResponses)
    {
        $this->BasketLineDiscResponses = $BasketLineDiscResponses;
        return $this;
    }

    /**
     * @return ArrayOfBasketLineDiscResponse
     */
    public function getBasketLineDiscResponses()
    {
        return $this->BasketLineDiscResponses;
    }

    /**
     * @param string $BarcodeId
     * @return $this
     */
    public function setBarcodeId($BarcodeId)
    {
        $this->BarcodeId = $BarcodeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }

    /**
     * @param string $CardOrCustNo
     * @return $this
     */
    public function setCardOrCustNo($CardOrCustNo)
    {
        $this->CardOrCustNo = $CardOrCustNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardOrCustNo()
    {
        return $this->CardOrCustNo;
    }

    /**
     * @param string $CouponCode
     * @return $this
     */
    public function setCouponCode($CouponCode)
    {
        $this->CouponCode = $CouponCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponCode()
    {
        return $this->CouponCode;
    }

    /**
     * @param int $CouponFunction
     * @return $this
     */
    public function setCouponFunction($CouponFunction)
    {
        $this->CouponFunction = $CouponFunction;
        return $this;
    }

    /**
     * @return int
     */
    public function getCouponFunction()
    {
        return $this->CouponFunction;
    }

    /**
     * @param string $CurrencyCode
     * @return $this
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param int $CurrencyFactor
     * @return $this
     */
    public function setCurrencyFactor($CurrencyFactor)
    {
        $this->CurrencyFactor = $CurrencyFactor;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyFactor()
    {
        return $this->CurrencyFactor;
    }

    /**
     * @param float $DiscountAmount
     * @return $this
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountPercent
     * @return $this
     */
    public function setDiscountPercent($DiscountPercent)
    {
        $this->DiscountPercent = $DiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

    /**
     * @param EntryStatus|string $EntryStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setEntryStatus($EntryStatus)
    {
        if ( ! $EntryStatus instanceof EntryStatus ) {
            if ( EntryStatus::isValid( $EntryStatus ) ) 
                $EntryStatus = new EntryStatus( $EntryStatus );
            elseif ( EntryStatus::isValidKey( $EntryStatus ) ) 
                $EntryStatus = new EntryStatus( constant( "EntryStatus::$EntryStatus" ) );
            elseif ( ! $EntryStatus instanceof EntryStatus )
                throw new InvalidEnumException();
        }
        $this->EntryStatus = $EntryStatus->getValue();
        
        return $this;
    }

    /**
     * @return EntryStatus
     */
    public function getEntryStatus()
    {
        return $this->EntryStatus;
    }

    /**
     * @param string $ItemDescription
     * @return $this
     */
    public function setItemDescription($ItemDescription)
    {
        $this->ItemDescription = $ItemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemId
     * @return $this
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param int $LineNumber
     * @return $this
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param LineType|string $LineType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setLineType($LineType)
    {
        if ( ! $LineType instanceof LineType ) {
            if ( LineType::isValid( $LineType ) ) 
                $LineType = new LineType( $LineType );
            elseif ( LineType::isValidKey( $LineType ) ) 
                $LineType = new LineType( constant( "LineType::$LineType" ) );
            elseif ( ! $LineType instanceof LineType )
                throw new InvalidEnumException();
        }
        $this->LineType = $LineType->getValue();
        
        return $this;
    }

    /**
     * @return LineType
     */
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param float $ManualDiscountAmount
     * @return $this
     */
    public function setManualDiscountAmount($ManualDiscountAmount)
    {
        $this->ManualDiscountAmount = $ManualDiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getManualDiscountAmount()
    {
        return $this->ManualDiscountAmount;
    }

    /**
     * @param float $ManualDiscountPercent
     * @return $this
     */
    public function setManualDiscountPercent($ManualDiscountPercent)
    {
        $this->ManualDiscountPercent = $ManualDiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getManualDiscountPercent()
    {
        return $this->ManualDiscountPercent;
    }

    /**
     * @param float $ManualPrice
     * @return $this
     */
    public function setManualPrice($ManualPrice)
    {
        $this->ManualPrice = $ManualPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getManualPrice()
    {
        return $this->ManualPrice;
    }

    /**
     * @param float $NetAmount
     * @return $this
     */
    public function setNetAmount($NetAmount)
    {
        $this->NetAmount = $NetAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $NetPrice
     * @return $this
     */
    public function setNetPrice($NetPrice)
    {
        $this->NetPrice = $NetPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param float $Price
     * @return $this
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Quantity
     * @return $this
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $TAXAmount
     * @return $this
     */
    public function setTAXAmount($TAXAmount)
    {
        $this->TAXAmount = $TAXAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTAXAmount()
    {
        return $this->TAXAmount;
    }

    /**
     * @param string $TAXBusinessCode
     * @return $this
     */
    public function setTAXBusinessCode($TAXBusinessCode)
    {
        $this->TAXBusinessCode = $TAXBusinessCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTAXBusinessCode()
    {
        return $this->TAXBusinessCode;
    }

    /**
     * @param string $TAXProductCode
     * @return $this
     */
    public function setTAXProductCode($TAXProductCode)
    {
        $this->TAXProductCode = $TAXProductCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTAXProductCode()
    {
        return $this->TAXProductCode;
    }

    /**
     * @param string $Uom
     * @return $this
     */
    public function setUom($Uom)
    {
        $this->Uom = $Uom;
        return $this;
    }

    /**
     * @return string
     */
    public function getUom()
    {
        return $this->Uom;
    }

    /**
     * @param int $ValidInTransaction
     * @return $this
     */
    public function setValidInTransaction($ValidInTransaction)
    {
        $this->ValidInTransaction = $ValidInTransaction;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidInTransaction()
    {
        return $this->ValidInTransaction;
    }

    /**
     * @param string $VariantId
     * @return $this
     */
    public function setVariantId($VariantId)
    {
        $this->VariantId = $VariantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantId()
    {
        return $this->VariantId;
    }


}

