<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class OneListGetByIdResponse implements ResponseInterface
{

    /**
     * @property OneList $OneListGetByIdResult
     */
    protected $OneListGetByIdResult = null;

    /**
     * @param OneList $OneListGetByIdResult
     * @return $this
     */
    public function setOneListGetByIdResult($OneListGetByIdResult)
    {
        $this->OneListGetByIdResult = $OneListGetByIdResult;
        return $this;
    }

    /**
     * @return OneList
     */
    public function getOneListGetByIdResult()
    {
        return $this->OneListGetByIdResult;
    }

    /**
     * @return OneList
     */
    public function getResult()
    {
        return $this->OneListGetByIdResult;
    }


}

