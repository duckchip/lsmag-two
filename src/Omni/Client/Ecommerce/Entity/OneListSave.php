<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class OneListSave implements RequestInterface
{

    /**
     * @property OneList $oneList
     */
    protected $oneList = null;

    /**
     * @property boolean $calculate
     */
    protected $calculate = null;

    /**
     * @param OneList $oneList
     * @return $this
     */
    public function setOneList($oneList)
    {
        $this->oneList = $oneList;
        return $this;
    }

    /**
     * @return OneList
     */
    public function getOneList()
    {
        return $this->oneList;
    }

    /**
     * @param boolean $calculate
     * @return $this
     */
    public function setCalculate($calculate)
    {
        $this->calculate = $calculate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCalculate()
    {
        return $this->calculate;
    }


}
