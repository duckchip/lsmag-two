<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

class Ingredient
{

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property float $MQty
     */
    protected $MQty = null;

    /**
     * @property float $MaxQty
     */
    protected $MaxQty = null;

    /**
     * @property int $Ord
     */
    protected $Ord = null;

    /**
     * @property float $PR
     */
    protected $PR = null;

    /**
     * @property boolean $PRoE
     */
    protected $PRoE = null;

    /**
     * @property float $Qty
     */
    protected $Qty = null;

    /**
     * @property string $UOM
     */
    protected $UOM = null;

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param float $MQty
     * @return $this
     */
    public function setMQty($MQty)
    {
        $this->MQty = $MQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getMQty()
    {
        return $this->MQty;
    }

    /**
     * @param float $MaxQty
     * @return $this
     */
    public function setMaxQty($MaxQty)
    {
        $this->MaxQty = $MaxQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxQty()
    {
        return $this->MaxQty;
    }

    /**
     * @param int $Ord
     * @return $this
     */
    public function setOrd($Ord)
    {
        $this->Ord = $Ord;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrd()
    {
        return $this->Ord;
    }

    /**
     * @param float $PR
     * @return $this
     */
    public function setPR($PR)
    {
        $this->PR = $PR;
        return $this;
    }

    /**
     * @return float
     */
    public function getPR()
    {
        return $this->PR;
    }

    /**
     * @param boolean $PRoE
     * @return $this
     */
    public function setPRoE($PRoE)
    {
        $this->PRoE = $PRoE;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPRoE()
    {
        return $this->PRoE;
    }

    /**
     * @param float $Qty
     * @return $this
     */
    public function setQty($Qty)
    {
        $this->Qty = $Qty;
        return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
        return $this->Qty;
    }

    /**
     * @param string $UOM
     * @return $this
     */
    public function setUOM($UOM)
    {
        $this->UOM = $UOM;
        return $this;
    }

    /**
     * @return string
     */
    public function getUOM()
    {
        return $this->UOM;
    }


}

