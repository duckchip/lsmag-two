<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class SalesEntryGetById implements RequestInterface
{

    /**
     * @property string $entryId
     */
    protected $entryId = null;

    /**
     * @param string $entryId
     * @return $this
     */
    public function setEntryId($entryId)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntryId()
    {
        return $this->entryId;
    }


}

