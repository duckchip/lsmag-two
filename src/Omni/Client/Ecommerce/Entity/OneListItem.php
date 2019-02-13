<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class OneListItem extends Entity
{

    /**
     * @property ArrayOfOneListItemDiscount $OnelistItemDiscounts
     */
    protected $OnelistItemDiscounts = null;

    /**
     * @property float $Amount
     */
    protected $Amount = null;

    /**
     * @property string $BarcodeId
     */
    protected $BarcodeId = null;

    /**
     * @property string $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @property float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @property float $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @property int $DisplayOrderId
     */
    protected $DisplayOrderId = null;

    /**
     * @property LoyItem $Item
     */
    protected $Item = null;

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
     * @property float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @property UnitOfMeasure $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @property VariantRegistration $VariantReg
     */
    protected $VariantReg = null;

    /**
     * @param ArrayOfOneListItemDiscount $OnelistItemDiscounts
     * @return $this
     */
    public function setOnelistItemDiscounts($OnelistItemDiscounts)
    {
        $this->OnelistItemDiscounts = $OnelistItemDiscounts;
        return $this;
    }

    /**
     * @return ArrayOfOneListItemDiscount
     */
    public function getOnelistItemDiscounts()
    {
        return $this->OnelistItemDiscounts;
    }

    /**
     * @param float $Amount
     * @return $this
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
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
     * @param string $CreateDate
     * @return $this
     */
    public function setCreateDate($CreateDate)
    {
        $this->CreateDate = $CreateDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
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
     * @param int $DisplayOrderId
     * @return $this
     */
    public function setDisplayOrderId($DisplayOrderId)
    {
        $this->DisplayOrderId = $DisplayOrderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrderId()
    {
        return $this->DisplayOrderId;
    }

    /**
     * @param LoyItem $Item
     * @return $this
     */
    public function setItem($Item)
    {
        $this->Item = $Item;
        return $this;
    }

    /**
     * @return LoyItem
     */
    public function getItem()
    {
        return $this->Item;
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
     * @param float $TaxAmount
     * @return $this
     */
    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * @param UnitOfMeasure $UnitOfMeasure
     * @return $this
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
        $this->UnitOfMeasure = $UnitOfMeasure;
        return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param VariantRegistration $VariantReg
     * @return $this
     */
    public function setVariantReg($VariantReg)
    {
        $this->VariantReg = $VariantReg;
        return $this;
    }

    /**
     * @return VariantRegistration
     */
    public function getVariantReg()
    {
        return $this->VariantReg;
    }


}

