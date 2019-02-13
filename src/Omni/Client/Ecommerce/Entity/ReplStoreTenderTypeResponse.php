<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ReplStoreTenderTypeResponse
{

    /**
     * @property ArrayOfReplStoreTenderType $StoreTenderTypes
     */
    protected $StoreTenderTypes = null;

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
     * @param ArrayOfReplStoreTenderType $StoreTenderTypes
     * @return $this
     */
    public function setStoreTenderTypes($StoreTenderTypes)
    {
        $this->StoreTenderTypes = $StoreTenderTypes;
        return $this;
    }

    /**
     * @return ArrayOfReplStoreTenderType
     */
    public function getStoreTenderTypes()
    {
        return $this->StoreTenderTypes;
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

