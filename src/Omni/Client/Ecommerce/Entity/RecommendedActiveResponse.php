<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class RecommendedActiveResponse implements ResponseInterface
{

    /**
     * @property boolean $RecommendedActiveResult
     */
    protected $RecommendedActiveResult = null;

    /**
     * @param boolean $RecommendedActiveResult
     * @return $this
     */
    public function setRecommendedActiveResult($RecommendedActiveResult)
    {
        $this->RecommendedActiveResult = $RecommendedActiveResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommendedActiveResult()
    {
        return $this->RecommendedActiveResult;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->RecommendedActiveResult;
    }


}
