<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ReplEcommVendorItemMappingResponse implements ResponseInterface
{

    /**
     * @property ReplLoyVendorItemMappingResponse $ReplEcommVendorItemMappingResult
     */
    protected $ReplEcommVendorItemMappingResult = null;

    /**
     * @param ReplLoyVendorItemMappingResponse $ReplEcommVendorItemMappingResult
     * @return $this
     */
    public function setReplEcommVendorItemMappingResult($ReplEcommVendorItemMappingResult)
    {
        $this->ReplEcommVendorItemMappingResult = $ReplEcommVendorItemMappingResult;
        return $this;
    }

    /**
     * @return ReplLoyVendorItemMappingResponse
     */
    public function getReplEcommVendorItemMappingResult()
    {
        return $this->ReplEcommVendorItemMappingResult;
    }

    /**
     * @return ReplLoyVendorItemMappingResponse
     */
    public function getResult()
    {
        return $this->ReplEcommVendorItemMappingResult;
    }


}

