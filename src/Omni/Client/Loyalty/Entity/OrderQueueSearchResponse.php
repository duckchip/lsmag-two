<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use Ls\Omni\Client\ResponseInterface;

class OrderQueueSearchResponse implements ResponseInterface
{

    /**
     * @property ArrayOfOrderQueue $OrderQueueSearchResult
     */
    protected $OrderQueueSearchResult = null;

    /**
     * @param ArrayOfOrderQueue $OrderQueueSearchResult
     * @return $this
     */
    public function setOrderQueueSearchResult($OrderQueueSearchResult)
    {
        $this->OrderQueueSearchResult = $OrderQueueSearchResult;
        return $this;
    }

    /**
     * @return ArrayOfOrderQueue
     */
    public function getOrderQueueSearchResult()
    {
        return $this->OrderQueueSearchResult;
    }

    /**
     * @return ArrayOfOrderQueue
     */
    public function getResult()
    {
        return $this->OrderQueueSearchResult;
    }


}
