<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ReplUnitOfMeasureResponse
{

    /**
     * @property ArrayOfReplUnitOfMeasure $UnitOfMeasures
     */
    protected $UnitOfMeasures = null;

    /**
     * @property string $LastKey
     */
    protected $LastKey = null;

    /**
     * @property string $MaxKey
     */
    protected $MaxKey = null;

    /**
     * @property int $RecordsRemaining
     */
    protected $RecordsRemaining = null;

    /**
     * @param ArrayOfReplUnitOfMeasure $UnitOfMeasures
     * @return $this
     */
    public function setUnitOfMeasures($UnitOfMeasures)
    {
        $this->UnitOfMeasures = $UnitOfMeasures;
        return $this;
    }

    /**
     * @return ArrayOfReplUnitOfMeasure
     */
    public function getUnitOfMeasures()
    {
        return $this->UnitOfMeasures;
    }

    /**
     * @param string $LastKey
     * @return $this
     */
    public function setLastKey($LastKey)
    {
        $this->LastKey = $LastKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastKey()
    {
        return $this->LastKey;
    }

    /**
     * @param string $MaxKey
     * @return $this
     */
    public function setMaxKey($MaxKey)
    {
        $this->MaxKey = $MaxKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxKey()
    {
        return $this->MaxKey;
    }

    /**
     * @param int $RecordsRemaining
     * @return $this
     */
    public function setRecordsRemaining($RecordsRemaining)
    {
        $this->RecordsRemaining = $RecordsRemaining;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecordsRemaining()
    {
        return $this->RecordsRemaining;
    }


}

