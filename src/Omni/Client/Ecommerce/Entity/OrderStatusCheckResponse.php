<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class OrderStatusCheckResponse implements ResponseInterface
{

    /**
     * @property OrderStatusResponse $OrderStatusCheckResult
     */
    protected $OrderStatusCheckResult = null;

    /**
     * @param OrderStatusResponse $OrderStatusCheckResult
     * @return $this
     */
    public function setOrderStatusCheckResult($OrderStatusCheckResult)
    {
        $this->OrderStatusCheckResult = $OrderStatusCheckResult;
        return $this;
    }

    /**
     * @return OrderStatusResponse
     */
    public function getOrderStatusCheckResult()
    {
        return $this->OrderStatusCheckResult;
    }

    /**
     * @return OrderStatusResponse
     */
    public function getResult()
    {
        return $this->OrderStatusCheckResult;
    }


}

