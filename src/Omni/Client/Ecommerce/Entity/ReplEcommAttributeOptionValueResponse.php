<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ReplEcommAttributeOptionValueResponse implements ResponseInterface
{

    /**
     * @property ReplAttributeOptionValueResponse $ReplEcommAttributeOptionValueResult
     */
    protected $ReplEcommAttributeOptionValueResult = null;

    /**
     * @param ReplAttributeOptionValueResponse $ReplEcommAttributeOptionValueResult
     * @return $this
     */
    public function setReplEcommAttributeOptionValueResult($ReplEcommAttributeOptionValueResult)
    {
        $this->ReplEcommAttributeOptionValueResult = $ReplEcommAttributeOptionValueResult;
        return $this;
    }

    /**
     * @return ReplAttributeOptionValueResponse
     */
    public function getReplEcommAttributeOptionValueResult()
    {
        return $this->ReplEcommAttributeOptionValueResult;
    }

    /**
     * @return ReplAttributeOptionValueResponse
     */
    public function getResult()
    {
        return $this->ReplEcommAttributeOptionValueResult;
    }


}

