<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use Ls\Omni\Client\ResponseInterface;

class ItemsGetByPublishedOfferIdResponse implements ResponseInterface
{

    /**
     * @property ArrayOfItem $ItemsGetByPublishedOfferIdResult
     */
    protected $ItemsGetByPublishedOfferIdResult = null;

    /**
     * @param ArrayOfItem $ItemsGetByPublishedOfferIdResult
     * @return $this
     */
    public function setItemsGetByPublishedOfferIdResult($ItemsGetByPublishedOfferIdResult)
    {
        $this->ItemsGetByPublishedOfferIdResult = $ItemsGetByPublishedOfferIdResult;
        return $this;
    }

    /**
     * @return ArrayOfItem
     */
    public function getItemsGetByPublishedOfferIdResult()
    {
        return $this->ItemsGetByPublishedOfferIdResult;
    }

    /**
     * @return ArrayOfItem
     */
    public function getResult()
    {
        return $this->ItemsGetByPublishedOfferIdResult;
    }


}

