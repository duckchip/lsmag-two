<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class OneListGetByContactIdResponse implements ResponseInterface
{

    /**
     * @property ArrayOfOneList $OneListGetByContactIdResult
     */
    protected $OneListGetByContactIdResult = null;

    /**
     * @param ArrayOfOneList $OneListGetByContactIdResult
     * @return $this
     */
    public function setOneListGetByContactIdResult($OneListGetByContactIdResult)
    {
        $this->OneListGetByContactIdResult = $OneListGetByContactIdResult;
        return $this;
    }

    /**
     * @return ArrayOfOneList
     */
    public function getOneListGetByContactIdResult()
    {
        return $this->OneListGetByContactIdResult;
    }

    /**
     * @return ArrayOfOneList
     */
    public function getResult()
    {
        return $this->OneListGetByContactIdResult;
    }


}

