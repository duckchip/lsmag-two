<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class TransactionGetByReceiptNoResponse implements ResponseInterface
{

    /**
     * @property LoyTransaction $TransactionGetByReceiptNoResult
     */
    protected $TransactionGetByReceiptNoResult = null;

    /**
     * @param LoyTransaction $TransactionGetByReceiptNoResult
     * @return $this
     */
    public function setTransactionGetByReceiptNoResult($TransactionGetByReceiptNoResult)
    {
        $this->TransactionGetByReceiptNoResult = $TransactionGetByReceiptNoResult;
        return $this;
    }

    /**
     * @return LoyTransaction
     */
    public function getTransactionGetByReceiptNoResult()
    {
        return $this->TransactionGetByReceiptNoResult;
    }

    /**
     * @return LoyTransaction
     */
    public function getResult()
    {
        return $this->TransactionGetByReceiptNoResult;
    }


}

