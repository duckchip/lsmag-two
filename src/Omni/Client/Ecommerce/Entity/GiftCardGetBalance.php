<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class GiftCardGetBalance implements RequestInterface
{

    /**
     * @property string $cardNo
     */
    protected $cardNo = null;

    /**
     * @param string $cardNo
     * @return $this
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }


}

