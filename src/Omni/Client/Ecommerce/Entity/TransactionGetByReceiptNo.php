<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class TransactionGetByReceiptNo implements RequestInterface
{

    /**
     * @property string $receiptNo
     */
    protected $receiptNo = null;

    /**
     * @param string $receiptNo
     * @return $this
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }


}
